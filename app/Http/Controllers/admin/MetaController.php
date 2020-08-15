<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meta;

class MetaController extends Controller
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

        $metas = Meta::all(); 
        return view('admin.meta.index',compact('metas'));
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
      // dd($request->all());
         $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]
        );

         $meta = new Meta;
         $meta->title = $request->get('title');
         $meta->description = $request->get('description');
         $meta->author = $request->get('author');
         $meta->keywords = $request->get('keywords'); 
         $meta->status = $request->get('status');
         $meta->save();
         if($meta){

            if($request->status == 1){

                $m = Meta::whereNotIn('id',[$meta->id])->get();
                foreach($m as $v){
                 $v->status = 0;
                 $v->save();
                }
            }
         }
         // dd($meta);
         return redirect()->route('meta.index');
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
         $meta= Meta::find($id);
 
        return view('admin.meta.edit',compact('meta'));
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
                'title' => 'required',
                'description' => 'required',
            ]
        );

         $meta = Meta::find($id);
         $meta->title = $request->get('title');
         $meta->description = $request->get('description');
         $meta->author = $request->get('author');
         $meta->keywords = $request->get('keywords');
         $meta->status = $request->get('status');
         $meta->save();

          if($meta){

            if($request->status == 1){

                $m = Meta::whereNotIn('id',[$meta->id])->get();
                foreach($m as $v){
                 $v->status = 0;
                 $v->save();
                }
            }
         }
         
         return redirect()->route('meta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $meta = Meta::find($id);
               $meta->delete();

        return redirect()->back()->with('msg','Meta Successfully Deleted');    }
}
