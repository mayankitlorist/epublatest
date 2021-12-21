<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookPreference;
use App\Models\Roletype;
use App\Models\School;
use App\Models\User;
use App\Models\Language;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   
    public function indexpage()
    {
        $school = School::all();
        $role = Roletype::all();
        $book = BookCategory::all();
        
        return view('index', compact('school', 'role', 'book'));
    }

    public function loginpage()
    {
        $school = School::all();
        $role = Roletype::all();
        $book = BookCategory::all();
        $language = Language::all();
       
        return view('login', compact('school', 'role', 'book' , 'language'));
    }

    public function getschoolname(Request $request)
    {
        $schoolvalue = $request->schoolvalue;
        
        $schoolname = School::where('school_name', 'LIKE', "%$schoolvalue%")->get();
        return response()->json($schoolname);
    }


    public function adduser(Request $request)
    {
       // print_r($request->all()); die;
        $rules = [
           
            'role' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password',
 
        ];

      
        $requestData = $request->all();
        unset($requestData['_token']);
        
        $validator = Validator::make($requestData, $rules);
        if ($validator->fails()) {
            return response()->json('error');

        } else {
        
        $fisrtdigit = substr($request->first_name, 0, 2);
        $lastdigit = substr($request->last_name, 0, 2);
        $randomNumber = random_int(10, 99);

        $username = $fisrtdigit.$lastdigit.$randomNumber;
        
        $schoolid = School::where('school_name',$request->schoolid)->first();
        $password = bcrypt($request->confirmpassword);
           $obj = [
                'school_id' => $schoolid->id,
                'role_type' => $request->role,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $password,
                'language_id' => $request->language,
                'username' => $username,
                'grade' => $request->grade,
           ];

          $user_id = User::insertGetId($obj);
          session(['userid' => $user_id]);
          return response()->json($user_id);
        }   
    }

    public function adduserbook(Request $request)
    {
        
        foreach($request->bookid as $bookids){
            $obj = [

                'user_id' => $request->user_id,
                'book_category_id' => $bookids,

             ];

            BookPreference::insert($obj);
        }
        return Redirect('Home');
    }

    public function login(Request $request)
    {
        $rules = [
           
            'username' => 'required',
            'password' => 'required',
           
        ];

      
        $requestData = $request->all();
        unset($requestData['_token']);
        
        $validator = Validator::make($requestData, $rules);
        if ($validator->fails()) {
            return response()->json('error');

        } else {
            
           $userdata = User::where('email',$request->username)->first();
           if($userdata){
                if($userdata->role_type == 0){
                    session(['userid' => $userdata->id]);

                    if(!Hash::check($request->password, $userdata->password)){
                        return response()->json('error');
                    }
                    return response()->json('admin');
                }else{
                    session(['userid' => $userdata->id]);

                    if(!Hash::check($request->password, $userdata->password)){
                        return response()->json('error');
                    }
                    return response()->json('success');
                }
               
           }else{
                return response()->json('error');
           }
           
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
