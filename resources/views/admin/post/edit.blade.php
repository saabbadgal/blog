@extends('admin.layouts.app')
@section('content'){{--
@php
dd($post);
@endphp --}}
{{--   @if(Session::has('msg')) --}} 
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                           <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edig Post</h5>
                                    </div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
         
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 d-block">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{$post->title}} " name="title" class="form-control" placeholder="Enter Title">
                                    @error('title')
                                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 d-block">
                                <div class="form-group">
                                    <label>Subtitle</label>
                                    <input type="text" value="{{$post->title}}"  name="subtitle" class="form-control" placeholder="Enter Subtitle">
                                    @error('subtitle')
                                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                           @if($post->image)
                <div class="col-md-4">
                    <div class="file-preview-thumbnails clearfi">
                        <div class="file-preview-frame krajee-default  kv-preview-thumb" id="thumb-input-b1-194449_11.jpg" data-fileindex="0" data-fileid="194449_11.jpg" data-template="image"><div class="kv-file-content">
                            <img src="{{ asset('uploads/'.$post->image) }} " class="file-preview-image kv-preview-data" title="11.jpg" alt="11.jpg" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
            @endif 
                
                
                
                <div class="col-md-12 ">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Body</label>
                             <textarea name="body">{{old('body')}} {{$post->body}}</textarea>
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
                            @foreach($post->categories as $pcat)
                            <option value="{{$pcat->id}} "selected="">{{$pcat->name}} </option>
                            
                            @foreach($categories as $category)
                            @if($pcat->id == $category->id)
                            @continue
                            @endif
                            <option value="{{$category->id}} ">{{$category->name}}</option>
                            
                            @endforeach
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
                         
                             <select class="js-example-basic-multiple form-control " name="tags[]" multiple="multiple">
                            @foreach($post->tags as $ptag)
                            <option value="{{$ptag->id}} "selected="">{{$ptag->name}} </option>
                            
                            @foreach($tags as $tag)
                            @if($ptag->id == $tag->id)
                            @continue
                            @endif
                            <option value="{{$tag->id}} ">{{$tag->name}}</option>
                            
                            @endforeach
                            @endforeach
                        </select> 
                        @error('tags')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 d-block">
                    <div class="form-group">
                        <label for="inputState">Status</label>
                        <select name="status" id="inputState" class="form-control">
                            <option value="1" selected="">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 d-block">
                    <div class="form-group">
                        <label>Sort</label>
                        <input type=""  value="{{$post->sort}}" name="sort" class="form-control" placeholder="Sort">
                        @error('sort')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 d-block">
                    <div class="form-group">
                        <label>Reading Time</label>
                        <input type="text" value="{{$post->reading_time}}" name="reading_time" class="form-control" placeholder="In Minutes">
                        
                        @error('reading_time')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                
                
         
            
            
            <div class="col-md-6 d-block">
                <div class="form-group">
                    <label for="inputState">Choose Image</label>
                    
                    <input id="input-b1" value="{{ asset('uploads/'.$post->image) }}"  name="image" type="file" class="file" data-browse-on-zone-click="true">
                    
                </div>
            </div>
               <div class="col-md-4 row align-items-end">

            <div class="form-group">
                <label for="inputState">Default Size (1366 X 768)</label>
            <div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text bg-primary text-white">Size in Pixels</span>
</div>
<input type="text" name="width" value="" class="form-control">
<input type="text" name="height" value="" class="form-control">
</div>
        </div>
    </div>
            <div class="col-md-2"></div>
            
            
               <div class="col-md-6 d-block">
                                <div class="form-group">
                                     <label class="">Image Alt Name </label>
                                    <input type="tesxt" name="image_alt" value="{{$post->image_alt}} " class="form-control" placeholder="Image Alt Name"  required>
                                </div>
                            </div>
          
            
            
            
            
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
                    <input type="text" name="meta_title" value="{{$post->meta_title}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_title')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>  
            <div class="col-md-8 d-block">
                 <div class="form-group">
                    <label class="">Meta Description </label>
                    <input type="text" name="meta_description" value="{{$post->meta_description}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_description')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>  
            <div class="col-md-8 d-block">
                
                 <div class="form-group">
                    <label class="">Meta Keywords </label>
                    <input type="text" name="meta_keywords" value="{{$post->meta_keywords}} " class="form-control" placeholder="Enter Title"arial-invalid="false" required>
                    @error('meta_keywords')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                </div>
            </div>
             <div class="col-md-6 d-block mt-3">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn  btn-success mt-2" title="" data-toggle="tooltip" data-original-title="btn btn-gradient-success">Update Post</button>
                </div>
            </div>
        </div>
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
<script>
     CKEDITOR.replace( 'body' );
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
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



