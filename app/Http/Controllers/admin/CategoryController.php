<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

   

     public function __construct()
    {  
        $this->middleware('auth:admin');
        
    }



    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
           $request->validate([
                'name' => 'required',
            ]
        );

         $category = new category;
         $category->name = $request->get('name');
         $category->slug = Str::slug($request->get('name'), '-'); 
         $category->save();
         
         return redirect()->route('category.index');
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
    public function edit($id)
    {   
        

        $category= Category::find($id);
 
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
          $request->validate([
                'name' => 'required',
            ]
        );
        $category = Category::find($id);
        $category->name = $request->name;
         $category->slug = Str::slug($request->get('name'), '-'); 
        $category->save();

        return redirect()->route('category.index')->with('msg','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category = Category::find($id);
               $category->delete();

        return redirect()->back()->with('msg','Category Successfully Deleted');
    }
}
