@extends('admin.layouts.app')
@section('content')
{{--   @if(Session::has('msg')) --}}
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
                              <h5>Create meta</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <form method="post" action="{{route('meta.store')}} ">
                                       @csrf
                                       <div class="form-group">
                                          <label>Title</label>
                                          <input type="text" name="title" class="form-control" placeholder="Title">
                                          @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div>
                                       <div class="form-group">
                                          <label>Description</label>
                                          <input type="text" name="description" class="form-control" placeholder="Description">
                                          @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div>
                                       <div class="form-group">
                                          <label>Keywords</label>
                                          <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                                          @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div>
                                       <div class="form-group">
                                          <label>Author</label>
                                          <input type="text" name="author" class="form-control" placeholder="Author">
                                          @error('name')
                                          <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                          @enderror
                                       </div>
                                       <div class="form-group">
                                          <label for="exampleFormControlSelect1">Example select</label>
                                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                                             <option value="0" selected="">Disable</option> 
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
                     <div class="col-xl-12 col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h5>All metas</h5>
                           </div>
                           <div class="card-body table-border-style">
                              <div class="table-responsive">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Title</th>
                                          <th>Status</th>
                                          <th>Description</th>
                                          <th>Author</th>
                                          <th>Keywords</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($metas as $meta)
                                       <tr>
                                          <td>{{ $meta->id}}  </td>
                                          <td>{{ $meta->title}}</td>
                                          @if($meta->status == 1)
                                          <td><button type="button" class="btn btn-sm btn-success">Active</button> </td>
                                          @else
                                          <td></td>
                                          @endif
                                           
                                          <td>{{ $meta->description}}</td>
                                          <td>{{ $meta->author}}</td>
                                          <td>{{ $meta->keywords}}</td>
                                          <td><a href="{{route('meta.edit',$meta->id)}} "><button type="button" class="btn btn-sm btn-warning"><i class="feather icon-delete"></i>Edit</button></a></td>
                                          <td>
                                             <form action="{{route('meta.destroy',$meta->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                             <button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="feather icon-slash"></i>Delete</button></form></td>
                                             
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
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
   
   
   
   <script>
   window.setTimeout(function() {
   $("#success-alert").fadeTo(500, 0).slideUp(500, function(){
   $(this).remove();
   });
   }, 2000);
   </script>
   <!--end container-->
   @endsection