<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\Slider;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{    
  public function __construct()
    {  
        $this->middleware('auth:admin');
        
    }
    
     public function edit(){

    	 $profile = Profile::first();

    	 return view('admin.profile.edit',compact('profile'));
    }

    public function update(Request $request, $id){
            



    	 $profile = Profile::find($id);

      if($request->image){


        if(Storage::disk('public')->exists($profile->logo)){
           
                 Storage::disk('public')->delete($profile->logo);
          }

      
        $imageName = time().'.' . $request->image->extension();

        $imageNameFinal = $request->file('image')->storeAs('/', $imageName,'public');
      }else{

        $imageNameFinal = $profile->logo;
      }

    	 $profile->facebook = $request->facebook;
    	 $profile->instagram = $request->instagram;
       $profile->linked = $request->linked;
    	 $profile->gmail = $request->gmail;
    	 $profile->phone = $request->phone;
       $profile->logo = $imageNameFinal;

    	 $profile->save();

    	 return redirect()->route('post.index');
    }

    public function sliderStore(Request $request){
       
       // dd($request->all());
        if($request->image){
            
          $imageName = time().'.' . $request->image->getClientOriginalExtension();

          $imageNameFinal = $request->image->storeAs('/', $imageName,'public');

        

           $slider = [

           'slider' => $imageNameFinal
           ];

             $slider = Slider::create($slider);  
             return redirect()->back();
        
         }else{

            return 'failed';
         }
    }

    public function sliderDelete($id){
      
      $slider = Slider::find($id);

      if(Storage::disk('public')->exists($slider->slider)){
           
          Storage::disk('public')->delete($slider->slider);
       }

      $slider->delete();

      return redirect()->route('slider.index');

    }

    public function sliderIndex(){

      $sliders = Slider::all();

      return view('admin.slider.index',compact('sliders'));
    }
}
