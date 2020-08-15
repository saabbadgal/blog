<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

use Illuminate\Support\Str;

class TagController extends Controller
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
        $tags = Tag::all(); 

        return view('admin.tag.index',compact('tags'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
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
        // dd($request->all());
         $tag = new Tag;
         $tag->name = $request->get('name');
         $tag->slug = Str::slug($request->name, '-'); 
         $tag->save();
         
         return redirect()->route('tag.index');
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
        
        $tag= Tag::find($id);

        return view('admin.tag.edit',compact('tag'));
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
        // dd($request->all());
        $tag = Tag::find($id);
        $tag->name = $request->name;
         $tag->slug = Str::slug($request->get('name'), '-'); 
        $tag->save();

        return redirect()->route('tag.index')->with('msg','Tag Sucessfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $tag = Tag::find($id);
              $tag->delete();
              // $tag->posts()->delete();

        return redirect()->back()->with('msg','Tag Successfully Deleted');
    }
}
