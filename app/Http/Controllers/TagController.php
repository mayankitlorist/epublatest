<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use lywzx\epub\EpubParser;
use App\Models\Tag;

class TagController extends Controller
{
   public function index()
   {
        $tag = Tag::all();
        return view('admin.pages.tag.index', compact('tag'));
   }

   public function addTag()
    {
        return view('admin.pages.tag.add');
    }

    public function addtagdata(Request $request)
    {
        $rules = [    
            'tag_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {
            Tag::insert($requestData); 
            return redirect('admin/Tag');
        }
    }

    public function updatetag($id)
    {
        $tag = Tag::where('id',$id)->first();
        return view('admin.pages.tag.edit', compact('tag'));
    }

    public function updatetagdata(Request $request)
    {
        $rules = [    
            'tag_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        unset($requestData['tagid']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {

            Tag::where('id',$request->tagid)->update($requestData); 
            return redirect('admin/Tag');
        }
    }

    public function deletetag($id)
    {
        Tag::where('id',$id)->delete();
        return Redirect::back();
    }

}
