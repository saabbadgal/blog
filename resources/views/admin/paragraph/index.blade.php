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
                              <h5>All Paragraphs</h5>
                              <div class="card-header-right">
                                 <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                       <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                       <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                       <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                       <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
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
         <th>Subtitle</th>
         <th>Status</th>
         <th>Body</th>
         <th>Likes</th>
         <th>Dislikes</th>
         <th>Sort</th>
         <th>Reading Time</th>
         <th>Edit</th>
         <th>Delete</th>
      </tr></thead>
      <tbody>
         
     
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