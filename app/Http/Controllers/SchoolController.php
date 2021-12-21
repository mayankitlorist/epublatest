<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookPreference;
use App\Models\Ebook;
use App\Models\School;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use lywzx\epub\EpubParser;

class SchoolController extends Controller
{
    public function index()
    {   
        $school = School::all();
        return view('admin.pages.school.index', compact('school'));
    }

    public function addSchool()
    {
        return view('admin.pages.school.add');
    }

    public function addallschool(Request $request)
    {
        $rules = [    
            'school_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {
            School::insert($requestData); 
            return redirect('admin/school');
        }
    }

    public function updateschool($id)
    {   
        $schoolid = School::where('id',$id)->first();
        return view('admin.pages.school.edit', compact('schoolid'));
    }

    public function updateallschool(Request $request)
    {
        $rules = [    
            'school_name' => 'required',   
        ];

        $requestData = $request->all();
        unset($requestData['_token']);
        unset($requestData['schoolid']);
        $validator = Validator::make($requestData, $rules);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['Something went wrong!']);

        } else {

            School::where('id',$request->schoolid)->update($requestData); 
            return redirect('admin/school');
        }
    }

    public function deleteschool($id)
    {   
        School::where('id',$id)->delete();
        return Redirect::back();
    }
}
