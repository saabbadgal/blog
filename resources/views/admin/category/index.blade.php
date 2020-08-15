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
                              <h5>Create Category</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <form method="post" action="{{route('category.store')}} ">
                                       @csrf
                                       <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                           @error('name')
                                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                    @enderror
                                          <button type="submit" name="submit" class="btn btn-sm btn-success mt-2">Save</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                          <div class="col-xl-12 col-md-12">
                           <div class="card">
                              <div class="card-header">
                                 <h5>All Categories</h5>
                              </div>
                              <div class="card-body table-border-style">
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Slug</th>
                                             <th>Total Posts</th>
                                             <th>Edit</th>
                                             <th>Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                             @foreach($categories as $category)
                                          <tr>
                                             <td>{{ $category->id}}  </td>
                                             <td>{{ $category->name}}</td>
                                             <td>{{ $category->slug}}</td>
                                             <td>{{ $category->posts->count()}}</td>
                                             <td><a href="{{route('category.edit',$category->id)}} "><button type="button" class="btn btn-sm btn-warning"><i class="feather icon-delete"></i>Edit</button></a></td>
                                             <td>
                                             <form action="{{route('category.destroy',$category->id)}}" method="post">
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