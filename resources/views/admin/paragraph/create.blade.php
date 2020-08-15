@extends('admin.layouts.app')
@section('content')
 

 








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
            <h4 class="text-white">Create Paragraph for the post</h4>
        </div>
        <div class="row pt-2">
            <div class="col-md-4">
                <img class="img-fluid card-img-top" src="{{  asset('uploads/'.$post_id->image) }} " alt="Card image cap">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{$post_id->subtitle}} </h3>
                    <h5 class="card-title">{{$post_id->subtitle}} </h5>
                    {{-- <p class="card-text">{{$post_id->body}} </p> --}}
                </div>
            </div>
        </div>
        
    </div>
</div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Create Paragraph</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
<form method="post" action="{{route('paragraph.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="post_id" value="{{$post_id->id}} ">
    <div class="form-group">
        <label class="">Title </label>
        <input type="text" name="title" value="{{old('title')}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
        @error('title')
        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Body</label>
        <textarea name="body">{{old('body')}}</textarea>
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
                <input type="" name="sort" maxlength="5" class="form-control" placeholder="Sort">
                @error('sort')
                <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                @enderror
            </div>
        </div>
        <div class="col-md-4 d-block">
            
        </div>
        <div class="col-md-6 d-block">
            <div class="form-group">
                <label for="inputState">Choose Image</label>
               <input name="image" id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
                
            </div>
        </div>
          <div class="col-md-5 row align-items-end">

            <div class="form-group">
                <label for="inputState">Default Size (1366 X 768)</label>
            <div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary text-white">Size in Pixels</span>
</div>
<input type="text" name="width" placeholder="Width" class="form-control">
<input type="text" name="height" placeholder="Height" class="form-control">
</div>
        </div>
    </div>
         <div class="col-md-1"></div>
            <div class="col-md-6 d-block">
                                <div class="form-group">
                                     <label class="">Image Alt Name </label>
                                    <input type="tesxt" name="image_alt" value="{{old('image_alt')}} " class="form-control" placeholder="Image Alt Name"  required>
                                </div>
                            </div>
        <div class="col-md-2 d-flex align-items-end">
            <div class="form-group">
                <label>&nbsp;</label>
                <button type="submit" class="form-control btn  btn-success" value="{{$post_id->id}} " name="submit" >Save</button>
                
            </div>
        </div>
       {{--  <div class="col-md-2  d-flex align-items-end">
            <div class="form-group">
                <label>&nbsp;</label>
                <button value="add_paragraph" type="submit" class="form-control btn  btn-success" name="submit" >Add More</button>
                
            </div>
        </div> --}}
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