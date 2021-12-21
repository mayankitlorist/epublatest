<?php

namespace App\Http\Controllers;

use App\Models\BookPreference;
use App\Models\Ebook;
use App\Models\User;
use App\Models\BookReading;
use App\Models\BookCategory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;

use App\Imports\UsersImport;
use App\Imports\SchoolImport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function dashshow()
    {   
        $user_id = session('userid');
        $userdata = User::where('id',$user_id)->first();
        $books = DB::table('book_prefrence')->join('book_category', 'book_prefrence.book_category_id', '=' , 'book_category.id')->where('user_id',$user_id)->pluck('book_prefrence.book_category_id');
        
            $bookdata = Ebook::whereIn('book_category_id',$books)->where('language_id', $userdata->language_id)->take(3)->get();
            foreach( $bookdata as  $bookdatas){
                $bookname = BookCategory::where('id',$bookdatas->book_category_id)->first();
                $bookdatas->bookname =  $bookname->book_name; 
            }

            foreach($bookdata as $bookdatas){
                $booktype = explode('.', $bookdatas->epub_file_path);
                $bookdatas->type = $booktype[1];
                $bookreading = BookReading::where('book_id',$bookdatas->id)->where('user_id', $user_id)->first();
                if($bookreading){
                    $bookdatas->bookreading = $bookreading->book_page;
                }else{
                    $bookdatas->bookreading = null;
                }
            }
            $books = $bookdata;    
      
        return view('homedashboard', compact('books','userdata'));
    }

    public function addbookreader(Request $request)
    {
        $bookid = $request->bookid;
        $userid = $request->userid;

        $obj = [
            'book_id' => $bookid,
            'user_id' => $userid,
            'book_page' => 0,
            'is_book_completed' => null,
        ];
        $readingbook = BookReading::where('book_id',$bookid)->where('user_id',$userid)->first();
        
        if($readingbook){
            $addreading = BookReading::where('id',$readingbook->id)->update($obj);
            return response()->json('success');
        }else{     
            $addreading = BookReading::insert($obj);
            return response()->json('success');
        }
    }

    public function dashexp()
    {   
        $user_id = session('userid');
        $userdata = User::where('id',$user_id)->first();
      
        return view('exploredashboard', compact('userdata'));
    }

    public function dashnew()
    {   
        $user_id = session('userid');
        $userdata = User::where('id',$user_id)->first();
      
        return view('arrivedashboard', compact('userdata'));
    }

    public function dashsoon()
    {      
        $user_id = session('userid');
        $userdata = User::where('id',$user_id)->first();
        $bookcategory = BookCategory::all();
        foreach($bookcategory as $bookcategorys){
            $bookselected = BookPreference::where('user_id',  $user_id)->where('book_category_id',$bookcategorys->id)->first();
            if($bookselected){
                $bookcategorys->status = 1;
            }else{
                $bookcategorys->status = 0;

            }
        }
        
        return view('soondashboard', compact('userdata','bookcategory'));
    }


    public function categoryUpdate(Request $request)
    {

        $id = $request->id;
        $userid = $request->userid;

        $checkCategory = BookPreference::where('user_id', $userid)->where('book_category_id', $id)->first();
        if($checkCategory){
            BookPreference::where('id',$checkCategory->id)->delete();
        }else{
            $obj = [
                'user_id' => $userid,
                'book_category_id' => $id,
            ];
            BookPreference::insert($obj);
        }
        
        return response()->json('success');
    }

    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));
       
        return redirect()->back();
    }

    public function schoolimport()
    {
        Excel::import(new SchoolImport,request()->file('file'));
        
        return redirect()->back();
    }
    
}

