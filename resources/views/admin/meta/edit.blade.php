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
                              <h5>Edit meta</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <form method="post" action="{{route('meta.update',$meta->id)}} ">
                                       @csrf
                                       @method('PATCH')
                                       <div class="form-group">
                                          <label>Title</label>
                                          <input value="{{$meta->title}} "  type="text" name="title" class="form-control" placeholder="Title">
                                           @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div> 
                                       <div class="form-group">
                                          <label>Description</label>
                                          <input value="{{$meta->description}} " type="text" name="description" class="form-control" placeholder="Description">
                                           @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div> 
                                        <div class="form-group">
                                          <label>Keywords</label>
                                          <input value="{{$meta->keywords}} "  type="text" name="keywords" class="form-control" placeholder="Keywords">
                                           @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div> 
                                        <div class="form-group">
                                          <label>Author</label>
                                          <input value="{{$meta->author}} "  type="text" name="author" class="form-control" placeholder="Author">
                                           @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleFormControlSelect1">Example select</label>
                                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                                             <option value="" selected="">Disable</option> 
                                             <option value="1">Enable</option>
                                          </select>
                                       </div>
                                          <button type="submit" name="submit" class="btn btn-sm btn-success mt-2">Save</button>
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