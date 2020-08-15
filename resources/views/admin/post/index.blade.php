@extends('admin.layouts.app')
@section('content')
{{--   @if(Session::has('msg')) --}}
@php
// dd($posts);
@endphp
<div class="pcoded-main-container">
   <div class="pcoded-wrapper">
      <div class="pcoded-content">
         <div class="pcoded-inner-content">
            <div class="main-body">
               <div class="page-wrapper">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card Application-list table-card">
                           <div class="card-header">
                              <h5>All Posts</h5>
                              <a href="{{route('post.create')}} "><button class="btn btn-primary float-right mr-4">Create Post</button></a>
                              
                              <div class="card-header-right">
                                 <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                    </button>
<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
   <li class="dropdown-item full-card">
      <a href="#!">
         <span>
      <i class="feather icon-maximize"></i> maximize
       </span>
      <span style="display:none"><i class="feather icon-minimize"></i> Restore</span>
   </a></li>  
</ul>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body p-0">
                              <div class="table-responsive">
                                 <div class="app-scroll ps ps--active-y" style="position:relative;">
<table class="table table-hover m-0">
   <thead>
      <tr>
         <th>Image</th>
         <th>Title</th>
         <th>Paragraphs</th>
         <th>Status</th>
         {{-- <th>Body</th>  --}}
         <th>Sort</th>
         <th>Reading Time</th>
         <th>Edit</th>
         <th>Delete</th>
         <th>View</th>
      </tr></thead>
      <tbody>
         
         @foreach($posts as $post)
         @php
         // dd($post->image)
         @endphp
         <tr>
            <td><img class="rounded" style="width:60px;" src="{{ asset('uploads/'.$post->image)}}" alt="activity-user"></td>
            <td>
               <h6 style="white-space: nowrap;
overflow: hidden;
width: 160px;
height: 30px;
text-overflow: ellipsis; " class="mb-1">{{$post->title}} </h6> 
            </td>
            <td class="text-center">
               <a class="label label-primary f-12 text-white " href="{{route('post.show',$post->id)}} ">{{$post->paragraphs->count()}}</a>
               <p class="mb-1 text-center"></p> 
            </td>
            @if($post->status == 1 )
            <td><a class="label label-success f-12 text-white">Active</a></td>
            @else
            <td><a class="label label-danger f-12 text-white">Inactive</a></td>
            @endif
           {{--  <td>   <h6 style="white-space: nowrap;
overflow: hidden;
width: 180px;
height: 30px;
text-overflow: ellipsis; " class="mb-1">{{$post->body}} </h6> </td>  --}}
            <td> {{$post->sort}}</td>
            <td> {{$post->reading_time}}</td>
            <td>
              <a href="{{route('post.edit',$post->id)}} "><button type="button" class="btn btn-sm btn-rounded btn-info">Edit</button></a>

         </td>
            
            <td>
               <form action="{{route('post.destroy',$post->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
               </form>
            </td> 
            <td>
               <a href="{{route('post.show',$post->id)}} ">
                  <button type="submit" name="submit" class="btn btn-sm btn-rounded btn-primary">View</button>
                 </a>
            </td>
            
         </tr>
         @endforeach
      </tbody>
   </table>
                                       <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 365px; right: 0px;"><div class="" tabindex="0" style="top: 0px; height: 298px;"></div></div></div>
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