@extends('admin.layouts.app')

@section('content')
<div class="pcoded-main-container">
   <div class="pcoded-wrapper">
      <div class="pcoded-content">
         <div class="pcoded-inner-content">
            <div class="main-body">
               <div class="page-wrapper">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                              <h5>Edit Category</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <form method="post" action="{{route('category.update',$category->id)}} ">
                                       @csrf
                                       @method('PUT')
                                       <div class="form-group">
                                          <label>Name</label>
                                          <input value="{{$category->name}}" type="text" name="name" class="form-control">
                                            @error('name')
                                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                    @enderror
                                          <button type="submit" name="submit" class="btn btn-gradient-success mt-2">Update</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>
               </div>
             </div>
           </div>
         </div>

         


@endsection