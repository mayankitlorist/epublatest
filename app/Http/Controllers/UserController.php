<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookPreference;
use App\Models\Ebook;
use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use lywzx\epub\EpubParser;

class UserController extends Controller
{
    public function dashboard()
    {
        $school = School::all()->count();
        $teacher = User::where('role_type', 1)->count();
        $student = User::where('role_type', 2)->count();
        $book = Ebook::all()->count();
        $user_id = session('userid');
        $userdata = User::where('id',$user_id)->first();
        return view('admin.pages.dashboard', compact('school', 'teacher', 'student', 'book','userdata'));
    }

    public function teachers()
    {   
        $users =  DB::table('users')->join('school', 'users.school_id', '=' , 'school.id')->join('role_type', 'users.role_type', '=' , 'role_type.id')->select('users.id as user_id','users.first_name','users.email','school.school_name', 'role_type.role_name')
        ->where('users.role_type', 1)->get();
        
        $school = School::all();
        return view('admin.pages.user.teacher', compact('users','school'));
    }

    public function students()
    {   
        $users =  DB::table('users')->join('school', 'users.school_id', '=' , 'school.id')->join('role_type', 'users.role_type', '=' , 'role_type.id')->select('users.id as user_id','users.first_name','users.email','school.school_name', 'role_type.role_name')
        ->where('users.role_type', 2)->get();
        
        $school = School::all();
        return view('admin.pages.user.student', compact('users','school'));
    }

    public function getteacher(Request $request)
    {
        $schoolid = $request->schoolid;
        $users =  DB::table('users')->join('school', 'users.school_id', '=' , 'school.id')->join('role_type', 'users.role_type', '=' , 'role_type.id')->select('users.id as user_id','users.name','users.email','school.school_name', 'role_type.role_name')
        ->where('users.role_type', 1)->whereIn('school_id', $schoolid)->get();
      
        return response()->json($users);
    }

    public function getstudent(Request $request)
    {
        $schoolid = $request->schoolid;
        $users =  DB::table('users')->join('school', 'users.school_id', '=' , 'school.id')->join('role_type', 'users.role_type', '=' , 'role_type.id')->select('users.id as user_id','users.name','users.email','school.school_name', 'role_type.role_name')
        ->where('users.role_type', 2)->whereIn('school_id', $schoolid)->get();
      
        return response()->json($users);
    }

    public function deleteteacher(Request $request)
    {
        $teachid = $request->teachid;
        $deleteuser = User::where('id',$teachid)->delete();

        return response()->json('success');
    }
}
