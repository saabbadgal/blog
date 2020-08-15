<?php

namespace App\Http\Controllers\admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paragraph;
use App\Post;

use Illuminate\Support\Facades\Storage;
class ParagraphController extends Controller
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
 
        return view('admin.paragraph.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post_id)
    {     
        // dd($post_id);
         return view('admin.paragraph.create',compact('post_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

        
        // dd($request->all());
          $request->validate([
                'title' => 'required',
                'body' => 'required',
                'sort' => 'required',
            ]); 
            


           if(isset($request->width) and isset($request->height)){
           
            $width = $request->width;

            $height = $request->height;
              
            }else{


          
        

              $width = '';

              $height =  '';
            }

         if($request->image){

          $imageName = time().'.' . $request->image->extension();

          $imageNameFinal = $request->image->storeAs('/', $imageName,'public');

       

         }else{

           $imageNameFinal = 'empty';
         }


            $para = [
           'title' => addslashes($request->title),  
           'body' => addslashes($request->body),
           'sort' =>  $request->sort, 
           'status' =>  $request->status,
           'post_id' => $request->post_id, 
           'image' => $imageNameFinal,
           'width' => $width,
           'height' => $height,
           'image_alt' =>$request->image_alt,
           ];
    

        $para = Paragraph::create($para);  

        $post_id = $request->post_id;
        if($para){

            if($request->submit == "add_paragraph"){

                return view('admin.paragraph.create',compact('post_id'));
            }

        }
       

       return redirect()->route('post.show',$post_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paragraph $paragraph)
    {
         return view('admin.paragraph.edit',compact('paragraph'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Paragraph $paragraph)
    {
         $request->validate([
                'title' => 'required',
                'body' => 'required',
                'sort' => 'required',
            ]); 
            
            if($request->image){
                
                   if(isset($request->width) and isset($request->height)){
           
            $width = $request->width;

            $height = $request->height;

              
            }else{

            

              $width = '' ;

              $height = '';

              } 
            }else{

              $width = $paragraph->width ;

              $height = $paragraph->height;

              }
            

        if($request->image){
                 
              if(Storage::disk('public')->exists($paragraph->image)){
              
                 Storage::disk('public')->delete($paragraph->image);  
                  
             $imageName = time().'.' . $request->image->extension();

             $imageNameFinal = $request->image->storeAs('/', $imageName,'public');    
                  
              }
            
        }else{
             
             $imageNameFinal =  $paragraph->image;

         }

         


            $para = [
           'title' => addslashes($request->title),  
           'body' => addslashes($request->body),
           'sort' =>  $request->sort, 
           'status' =>  $request->status, 
           'image' => $imageNameFinal,
           'width' => $width,
           'height' => $height,
           'image_alt' =>$request->image_alt,
           ];
    

        $para = Paragraph::where('id',$paragraph->id)->update($para);  
         
         $post = $paragraph->post_id;

        
        if($para){ 
                    
           return redirect()->route('post.show',$post); 

        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paragraph $paragraph)
    {  

        if(Storage::disk('public')->exists($paragraph->image)){
           
          Storage::disk('public')->delete($paragraph->image);
        }
        // dd($paragraph);
        $paragraph->delete();

        return  redirect()->back();
    }

    public function upload(Request $request)
    {   

        // dd($request->all());
        if($request->hasFile('upload')) {
         
          
        $imageName = time().'.' . $request->upload->extension();
  
           $imageNameFinal = $request->upload->storeAs('images', $imageName,'public');

           return $imageNameFinal;
           
           $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$imageNameFinal); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum)</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;

         }
            
        }
    }

