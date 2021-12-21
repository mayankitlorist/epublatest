<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookPreference;
use App\Models\Ebook;
use App\Models\School;
use App\Models\Tag;
use App\Models\Language;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;
use lywzx\epub\EpubParser;
class BookController extends Controller
{
    public function index()
    {   
        $book = DB::table('books')->join('book_category', 'books.book_category_id', '=' , 'book_category.id')->select('books.id as bookid','books.book_category_id','books.book_name as bookname','books.discription','books.thumbnail_image','books.epub_file_path','book_category.book_name as bookcatname')->get();
        return view('admin.pages.book.index', compact('book'));
    }

    public function addBook()
    {
        $books = BookCategory::all();
        $tag = Tag::all();
        $language = Language::all();
        return view('admin.pages.book.add', compact('books','tag','language'));
    }

    public function addallbook(Request $request)
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

            if ($request->file('thumbnail_image')) {

                $covers = $request->thumbnail_image;    
                $coverPic = $covers->getClientOriginalName();
                $covers->move(public_path('bookImage'), $coverPic);
                $requestData['image'] = $coverPic;  
           }else{      
                $requestData['image'] = null;
           }

           if ($request->file('epub_file_path')) {

                $covers = $request->epub_file_path;    
                $coverPic = $covers->getClientOriginalName();
                $covers->move(public_path('book'), $coverPic);
                $requestData['epubfile'] = $coverPic;  
            }else{      
                $requestData['epubfile'] = null;
            }

            $tagid = implode(',', $requestData['tag_id']);
            
            foreach($request->grade as $grades){
                $obj = [
                    'book_category_id' => $requestData['book_category_id'],
                    'book_name' => $requestData['book_name'],
                    'thumbnail_image' => $requestData['image'],
                    'epub_file_path' => $requestData['epubfile'],
                    'discription' => $requestData['Discription'],
                    'tag_id' => $tagid,
                    'language_id' => $requestData['language_id'],
                    'grade'=> $grades,
                ];
                Ebook::insert($obj); 
            }
            
            return redirect('admin/book');
        }
    }

    public function updatesinglebook($id)
    {   
        $books = BookCategory::all();
        $bookdetail = Ebook::where('id',$id)->first();
        $bookdetail->tagall = explode(',' , $bookdetail->tag_id);
        // $tagname = Tag::whereIn('id', $tagids)->get();
        // $bookdetail->tagall = $tagname;
        $tag = Tag::all();
        // print_r($bookdetail); die;
        return view('admin.pages.book.edit', compact('books','bookdetail','tag'));
    }

    public function updateallbook(Request $request)
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

            $currentbook = Ebook::where('id',$request->bookid)->first();
            if ($request->file('thumbnail_image')) {
                $covers = $request->thumbnail_image;    
                $coverPic = $covers->getClientOriginalName();
                $covers->move(public_path('bookImage'), $coverPic);
                $requestData['image'] = $coverPic;  
           }else{      
                $requestData['image'] = $currentbook->thumbnail_image;
           }

           if ($request->file('epub_file_path')) {
                $covers = $request->epub_file_path;    
                $coverPic = $covers->getClientOriginalName();
                $covers->move(public_path('book'), $coverPic);
                $requestData['epubfile'] = $coverPic;  
            }else{   
                $requestData['epubfile'] = $currentbook->epub_file_path;
            }

            $tagid = implode(',', $requestData['tag_id']);
            $obj1 = [
                'book_category_id' => $requestData['book_category_id'],
                'book_name' => $requestData['book_name'],
                'thumbnail_image' => $requestData['image'],
                'epub_file_path' => $requestData['epubfile'],
                'discription' => $requestData['Discription'],
                'tag_id' => $tagid,
                'grade'=> $request->grade,
            ];

            Ebook::where('id',$request->bookid)->update($obj1); 
            return redirect('admin/book');
        }
    }

    public function deletesinglebook($id)
    {   
        Ebook::where('id',$id)->delete();
        return Redirect::back();
    }
}
