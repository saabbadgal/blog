@extends('admin.layouts.app')
@section('content')
{{--   @if(Session::has('msg')) --}}
@php
// $id = $post_id;
@endphp
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="text-white">Edit Paragraph for the post</h4>
        </div>
        <div class="row pt-2">
            <div class="col-md-3">
                <img class="img-fluid card-img-top" src="{{  asset('uploads/'.$paragraph->post->image) }} " alt="Card image cap">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h3 class="card-title">{{$paragraph->post->subtitle}} </h3>
                    <h5 class="card-title">{{$paragraph->post->subtitle}} </h5>
                    <p class="card-text">{{$paragraph->post->body}} </p>
                </div>
            </div>
        </div>
        
    </div>
</div>

                            
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edit Paragraph</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
<form method="post" action="{{route('paragraph.update',$paragraph->id)}}" enctype="multipart/form-data">
    @csrf
   @method('PATCH')
    <div class="form-group">
        <label class="">Title </label>
        <input type="text" name="title" value="{{$paragraph->title}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
        @error('title')
        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Body</label>
        <textarea name="body">{{$paragraph->body}}</textarea>
    </div>
    <div class="row">
        <div class="col-md-2 d-block">
            <div class="form-group">
                <label for="inputState">Status</label>
                <select name="status" id="inputState" class="form-control">
                    <option value="1" selected="">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 d-block">
            <div class="form-group">
                <label>Sort</label>
                <input value="{{$paragraph->sort}}" type="" name="sort" class="form-control" placeholder="Sort">
                @error('sort')
                <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        
        <div class="col-md-8"></div>
         <div class="col-md-2">
             <label for="inputState">Old Image</label>
            <img src="{{ asset('uploads/'.$paragraph->image) }} " alt="" class="img-thumbnail">
        </div>
        <div class="col-md-6 d-block">
            <div class="form-group">
                <label for="inputState">Choose Image</label>
               <input name="image" id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
                
            </div>
        </div>
             <div class="col-md-4 row align-items-end">

            <div class="form-group">
                <label for="inputState">Default Size (1366 X 768)</label>
            <div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary text-white">Size in Pixels</span>
</div>
<input type="text" name="width" value=" " class="form-control">
<input type="text" name="height" value=" " class="form-control">
</div>
        </div>
    </div>
          <div class="col-md-6 d-block">
                                <div class="form-group">
                                     <label class="">Image Alt Name </label>
                                    <input type="tesxt" name="image_alt" value="{{$paragraph->image_alt}}" class="form-control" placeholder="Image Alt Name"  required>
                                </div>
                            </div>
        <div class="col-md-2  d-flex align-items-end">
            <div class="form-group">
                <label>&nbsp;</label>
                <button type="submit" class="form-control btn  btn-success" name="submit" >Update</button>
                
            </div>
        </div> 
           
        </div>
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
<script>
     CKEDITOR.replace( 'body' );
</script>
<script>
window.setTimeout(function() {
$("#success-alert").fadeTo(500, 0).slideUp(500, function(){
$(this).remove();
});
}, 2000);
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>
<!--end container-->
@endsection

{{-- 
    <form method="post" action="{{route('paragraph.store')}}" enctype="multipart/form-data" class="needs-vaidation" novalidate>
            @csrf
            <div class="row">
                <div class="col-md-12 ">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Body</label>
                            <textarea name="editor1" class="form-control"></textarea>
                            <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
                            <script type="text/javascript">
                            CKEDITOR.replace('editor1', {
                            filebrowserUploadUrl: "{{ route('para.upload', ['_token' => csrf_token(),'enctype' => 'multipart' ] )}}",
                            filebrowserUploadMethod: 'form'
                            });
                            </script>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-gradient-success mt-2">Update</button>
                </div>
            </div>
        </form> --}}