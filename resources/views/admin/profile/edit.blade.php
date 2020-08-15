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
<h5>Edit Profile</h5>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-12">
<form method="post" action="{{route('main.profile.update',$profile->id)}} "  enctype="multipart/form-data">
    @csrf 
    @method('PATCH')
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                   @if($profile->logo)
                <div class="col-md-4">
                    <span>Old Logo</span>
                    <div class="file-preview-thumbnails clearfi">
                        <div class="file-preview-frame krajee-default  kv-preview-thumb" id="thumb-input-b1-194449_11.jpg" data-fileindex="0" data-fileid="194449_11.jpg" data-template="image"><div class="kv-file-content">
                            <img src="{{ asset('uploads/'.$profile->logo) }} " class="file-preview-image kv-preview-data" title="11.jpg" alt="11.jpg" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ml-md-5">
                <div class="form-group">
                    <label for="inputState">Choose Logo</label>
                    
                    <input id="input-b1" value="{{ asset('uploads/'.$profile->image) }}"  name="image" type="file" class="file" data-browse-on-zone-click="true">
                    
                </div>
            </div>
            @endif
                <div class="col-md-12 d-block">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" value="{{$profile->facebook}}" name="facebook" class="form-control" placeholder="Enter Facebook">
                        @error('facebook')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 d-block">
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" value="{{$profile->instagram}}" name="instagram" class="form-control" placeholder="Enter Instagram">
                        @error('instagram')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div> 
                <div class="col-md-12 d-block">
                    <div class="form-group">
                        <label>Linked In</label>
                        <input type="text" value="{{$profile->linked}}" name="linked" class="form-control" placeholder="Enter Linked In ">
                        @error('linked')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 d-block">
                    <div class="form-group">
                        <label>Gmail</label>
                        <input type="text" value="{{$profile->gmail}}" name="gmail" class="form-control" placeholder="Enter Gmail">
                        @error('gmail')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 d-block">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" value="{{$profile->phone}}" name="phone" class="form-control" placeholder="Enter Phone">
                        @error('phone')
                        <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                        @enderror
                    </div>
                </div>
                  <div class="col-md-6 d-block mt-3">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn  btn-success mt-2" title="" data-toggle="tooltip" data-original-title="btn btn-gradient-success">Update Profile</button>
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
</div>
</div>
</div>
</div>
</div>
</div>
@endsection