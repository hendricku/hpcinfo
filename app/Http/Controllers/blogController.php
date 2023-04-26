<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        return view ('blogs.blogs',[
            'heading'=> 'blog Catalog',
         'blogs' => blog::paginate(5)
    
    ]);    
    }
    public function show(blog $blog){
  return view ('blogs.blog',[
    'blog'=> $blog

  ]);
    }
    public function create(){
return view ('blogs.create');

    }
    public function store(Request $request){
        $formFields=$request->validate([
       'unit' => 'required',
       'unitPrice'=>'required|decimal:0,2',
       'category'=>'required',
       'name'=>  'required|unique:blogs'
        ]);
        blog::create($formFields);
      
        return redirect('/')->with('success', 'A new blog has been saved.');
  
        
        }
}
