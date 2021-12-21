<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookPreference;
use App\Models\Ebook;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use lywzx\epub\EpubParser;

class BookCategoryController extends Controller
{
    public function index()
    {   
        $bookcategory = BookCategory::all();
        return view('admin.pages.category.index', compact('bookcategory'));
    }
    public function addcategory()
    {
        return view('admin.pages.category.add');
    }

    public function addbookcategory(Request $request)
    {
        $rules = [    
            'book_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {
            BookCategory::insert($requestData); 
            return redirect('admin/bookCategory');
        }
    }

    public function updatebook($id)
    {
        $bookcatid = BookCategory::where('id',$id)->first();
        return view('admin.pages.category.edit', compact('bookcatid'));
    }

    public function updatebookcategory(Request $request)
    {
        $rules = [    
            'book_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        unset($requestData['bookcatid']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {

            BookCategory::where('id',$request->bookcatid)->update($requestData); 
            return redirect('admin/bookCategory');
        }
    }

    public function deletebook($id)
    {
        BookCategory::where('id',$id)->delete();
        return Redirect::back();
    }
}
