<?php

namespace App\Http\Controllers\admin;

use App\Tag;
use App\Post;
use App\Category;
use App\Subscriber;
use App\Mail\NewPostMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{   
   

  


     public function __construct()
    {  
        $this->middleware('auth:admin');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::with(['categories','tags'])->get();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        
           $validatedData = $request->validate([
                'title' => 'required',
                'subtitle' => 'required',
                'body' => 'required',
                'sort' => 'required',
                'categories' => 'required',
                'tags' => 'required',
                'reading_time' => 'required',
                'image' => 'nullable|mimes:jpeg,bmp,png', 
                'image_alt' => 'required', 
                'meta_title' => ['required','max:60'] ,
                'meta_description' =>  ['required','max:160'] ,
                'meta_keywords' =>  ['required'] 
            ], [
                'title.required' => 'Title is required',
                'subtitle.required' => 'Subtitle is required',
                'categories.required' => 'Choose Atleast one Category',
                'tags.required' => 'Choose Atleast one Tag',
              
                
            ]);
         
           

         

         if($request->image){
          
     

          if(isset($request->width) and isset($request->height)){
           
            $width = $request->width;

            $height = $request->height;
              
            }else{

              list($width, $height, $type, $attr) = getimagesize($request->image); 

              $width = '';

              $height = '';
            }
          // dd($request->image);
          $imageName = time().'.' . $request->image->extension();

          $imageNameFinal = $request->image->storeAs('/', $imageName,'public');

       

         }else{

           $imageNameFinal = 'empty';
           $width = '';
           $height = '';
         }


            $post = [
           'title' => addslashes($request->title),
           'subtitle' => addslashes($request->subtitle),
           'slug'  => Str::slug($request->title, '-'),
           'body' => addslashes($request->body), 
           'sort' =>  $request->sort,
           'reading_time' => $request->reading_time,
           'status' =>  $request->status,
           'user_id' => Auth::user()->id,
           'posted_by' => Auth::user()->id,
           'image' => $imageNameFinal,
           'width' => $width,
           'height' => $height,
           'image_alt' =>$request->image_alt,
           'meta_title' =>$request->meta_title,
           'meta_description' =>$request->meta_description,
           'meta_keywords' =>$request->meta_keywords,
           ];
    

        $post = Post::create($post);  
        
        $post_id = $post->id;
       
       if($post){
        
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        $subscribers = Subscriber::all(); //Retrieving all subscribers
         
         

       if($request->submit == 'add_paragraph'){

         return view('admin.paragraph.create',compact('post_id'));
      }else{
       
        
         
       return redirect()->route('post.show',$post_id);
      }


    }
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        $post = Post::with(['paragraphs','Categories','tags'])->where('id',$post->id)->first();
        return view('admin.post.post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit',compact('categories','tags','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {       
      // dd($request->file('image')->isValid());
    // dd($request->all());
         $request->validate([
                'title' => 'required',
                'subtitle' => 'required',
                'body' => 'required',
                'sort' => 'required',
                'categories' => 'required',
                'tags' => 'required',
                'reading_time' => 'required',
                'image' => 'nullable|mimes:jpeg,bmp,png', 
                'image_alt' => 'required', 
                'meta_title' => ['required','max:60'] ,
                'meta_description' =>  ['required','max:160'] ,
                'meta_keywords' =>  ['required'] 
            ], [
                'title.required' => 'Title is required',
                'subtitle.required' => 'Password is required',
                'categories.required' => 'Choose Atleast one Category',
                'tags.required' => 'Choose Atleast one Tag',
                
            ]);
            
             if($request->image){

              if(isset($request->width) and isset($request->height)){
           
                $width = $request->width;

                $height = $request->height;
              
                }else{

              $width =  '' ;

              $height = '';
              
              }
                 
             }else{

              $imageNameFinal = 'empty';
 
              $width = $post->width ;

              $height = $post->height;
              }

            
           
 
        if($request->image){

              if(Storage::disk('public')->exists($post->image)){
           
                 Storage::disk('public')->delete($post->image);
               }

          
            $imageName = time().'.' . $request->image->extension();

            $imageNameFinal = $request->file('image')->storeAs('/', $imageName,'public');
          

         }else{
             
             $imageNameFinal =  $post->image;

         }
          
        $postU = [
           'title' => addslashes($request->title),
           'subtitle' => addslashes($request->subtitle),
           'slug'  => Str::slug($request->title, '-'),
           'body' => addslashes($request->body),
           'sort' =>  $request->sort,
           'reading_time' => $request->reading_time,
           'status' =>  $request->status,
           'user_id' => Auth::user()->id,
           'posted_by' => Auth::user()->id,
           'image' => $imageNameFinal,
           'width' => $width,
           'height' => $height,
           'image_alt' =>$request->image_alt,
           'meta_title' =>$request->meta_title,
           'meta_description' =>$request->meta_description,
           'meta_keywords' =>$request->meta_keywords,

           ];

        $postU = Post::where('id',$post->id)->update($postU);  

       
       if($postU){
        if($request->categories){
          $post->categories()->sync($request->categories);
         }
         if($request->tags){
            $post->tags()->sync($request->tags);
         }

       } 

       return redirect()->route('post.index');
 }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {   
      // dd($post->paragraphs);
        if(Storage::disk('public')->exists($post->image)){
           
          Storage::disk('public')->delete($post->image);
        }

        $post->categories()->detach();
        $post->tags()->detach();

        foreach ($post->paragraphs as $paragraph) {
             
              if(Storage::disk('public')->exists($paragraph->image)){
           
              Storage::disk('public')->delete($paragraph->image);
              }
          }

        $post->paragraphs()->delete(); 
        $post->delete();
        return redirect()->route('post.index');
    }

    public function test($id){
        
      $post =  Post::where('id',$id)->get();

       if(Storage::disk('public')->exists($post[0]->image)){
           
           dd(Storage::disk('public')->delete($post[0]->image));
       }
        }
 
  
}
