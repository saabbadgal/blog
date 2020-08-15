<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;
use App\Paragraph;
use App\Meta;
use App\Subscriber;
use App\Slider;

class BlogController extends Controller
{
   
    public function index()
    {   
        $meta = Meta::where('status',1)->first();
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $paragraphs = Paragraph::all();
        $sliders = Slider::all();
        // dd($meta);
        return view('blog.index',compact('posts','categories','tags','paragraphs','meta','sliders'));
    }

    public function category($id , $slug)
    {    
        $meta = Meta::where('status',1)->first();
        $posts = Category::find($id)->posts()->orderBy('id','DESC')->paginate(10); 
        $cat = Category::find($id)->name;
        $categories = Category::all();
        $tags = Tag::all();
        // dd($posts);
        return view('blog.category',compact('posts','categories','tags','cat','meta'));
    } 
   

    public function tag($id, $slug)
    {    
         $meta = Meta::where('status',1)->first();
        $posts = Tag::find($id)->posts()->orderBy('id','DESC')->paginate(10); 
        $tag = Tag::find($id)->name;
        $categories = Category::all();
        $tags = Tag::all(); 
       // dd($posts);
         return view('blog.tag',compact('posts','categories','tags','tag','meta'));
    }

 

    public function search(Request $request){
    

    $input = $request->search;
    $posts = Post::where('title','LIKE','%'.$input.'%')->with('categories','tags','paragraphs')->paginate(10);
      $categories = Category::all();
        $tags = Tag::all(); 
         $meta = Meta::where('status',1)->first();
    if(count($posts) > 0)
        return view('blog.search',compact('posts','categories','tags','input','meta'));
    else return  redirect()->route('blog.index')->with(['msg' => 'No Details found. Try to search again !']);

    }

 
    public function show($id, $slug)
    {   
        
        $post = Post::where('id',$id)->with('categories','tags','paragraphs')->first(); 
        // dd($post_relations);
        $categories = Category::all();
        $tags = Tag::all();
        return view('blog.post',compact('post','categories','tags'));
    }

    public function about(){

        return view('blog.pages.about');
    }
    public function contact(){

        return view('blog.pages.contact');
    } 
     public function subscriber(Request $request){
          
 
           $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
           
            ]);

         $subscriber = new Subscriber;
         $subscriber->name = $request->name;
         $subscriber->email = $request->email;
         $subscriber->save();

         return redirect()->route('blog.index');

    }

    public function subscriberDestroy($email){
          
           
         $subscriber = Subscriber::where('email',$email)->first();
         if(empty($subscriber)){

            return redirect()->route('blog.index');
         }
         $subscriber->delete(); 
         return redirect()->back();

    }


 
}
