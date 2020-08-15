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
                              <h5>Create SLider</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <form method="post" action="{{route('slider.store')}} "  enctype="multipart/form-data">
                                       @csrf

                                
                <div class="form-group">
                    <label for="inputState">Choose Image</label>
                    <input name="image" id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
                    
                </div>
        
                                       <div class="form-group">
                                        
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
                                 <h5>All sliders</h5>
                              </div>
                              <div class="card-body table-border-style">
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>ID</th> 
                                             <th>Image</th>
                                             <th>Delete</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                             @foreach($sliders as $slider)
                                          <tr>
                                             <td>{{ $slider->id}}  </td>
                                            <td><img class="rounded" style="width:60px;" src="{{ asset('uploads/'.$slider->slider)}}" alt="activity-user"></td>
          
                                         
                                             <td>
                                             <form action="{{route('slider.delete',$slider->id)}}" method="post">
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