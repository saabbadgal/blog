@extends('admin.layouts.app')
@section('content')
<style>

</style>
{{--   @if(Session::has('msg')) --}}
@php
// dd(old('categories'));s
@endphp
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="row">
<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" class="needs-vaidation" novalidate>
@csrf

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Create Post</h5>
</div>
<div class="card-body">
<div class="row">
   
            
        
            
            <div class="col-md-8 d-block">
                <div class="form-group">
                    <label class="">Title </label>
                    <input type="text" name="title" value="{{old('title')}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('title')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-8 d-block">
                <div class="form-group">
                    <label>Subtitle</label>
                    <input type="text" value="{{old('subtitle')}}" name="subtitle" class="form-control" placeholder="Enter Subtitle">
                    @error('subtitle')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4"></div>
            
            <div class="col-md-12 ">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Body</label>
                       <textarea name="body">{{old('body')}}</textarea>
                        @error('body')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 d-block">
                
            </div>
            <div class="col-md-6"></div>
            
            <div class="col-md-8 d-block">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Choose Categories</label>
                    <select class="js-example-basic-multiple form-control " name="categories[]" multiple="multiple">
                        @foreach($categories as $category)
                        
                        <option value="{{$category->id}}"  {{in_array($category->id, old("categories") ? : [] ) ? "selected": ""}}>{{$category->name}}</option>
                        
                        @if(in_array($category->id, old("categories") ? : [] ) ))
                        @continue
                        
                        <option value="{{$category->id}}" {{ old('categories->id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('categories')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-8 d-block">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Choose Tags</label>
                    <select  class="js-example-basic-multiple form-control " name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}"  {{in_array($tag->id, old("tags") ? : [] ) ? "selected": ""}}>{{$tag->name}}</option>                                      @if(in_array($tag->id, old("tags") ? : [] ) ))
                        @continue
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('tags')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-3 d-block">
                <div class="form-group">
                    <label for="inputState">Status</label>
                    <select name="status" id="inputState" class="form-control">
                        <option value="1" selected="">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 d-block">
                <div class="form-group">
                    <label>Sort</label>
                    <input type="" value="{{old('sort')}} " name="sort" class="form-control" placeholder="Sort">
                    @error('sort')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 d-block">
                <div class="form-group">
                    <label>Reading Time</label>
                    <input type="text" value="{{old('reading_time')}}" name="reading_time" class="form-control" placeholder="In Minutes">
                    @error('reading_time')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2"></div>
            
            
            {{--  <div class="col-md-8">
                <div class="form-group">
                    <label for="inputState">Choose Image</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Image</span>
                        </div>
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                        </div>
                    </div>
                </div>
            </div> --}}
            
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
            
            <div class="col-md-6 d-block">
                <div class="form-group">
                    <label class="">Image Alt Name </label>
                    <input type="tesxt" name="image_alt" value="{{old('image_alt')}} " class="form-control" placeholder="Image Alt Name"  required>
                    @error('image_alt')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
 <div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Seo</h5>
</div>
<div class="card-body">
<div class="row">
            <div class="col-md-8 d-block">
                <div class="form-group">
                    <label class="">Meta Title </label>
                    <input type="text" name="meta_title" value="{{old('title')}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_title')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>  
            <div class="col-md-8 d-block">
                 <div class="form-group">
                    <label class="">Meta Description </label>
                    <input type="text" name="meta_description" value="{{old('meta_description')}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_description')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>  
            <div class="col-md-8 d-block">
                
                 <div class="form-group">
                    <label class="">Meta Keywords </label>
                    <input type="text" name="meta_keywords" value="{{old('meta_keywords')}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_keywords')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-8 d-block">
        <button type="submit" name="submit" class="btn  btn-success mt-2">Save</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="form-group">
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