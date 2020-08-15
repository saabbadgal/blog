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
                            
<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
                              <h4 class="text-white">Main Post</h4>
                          </div>
                      </div>

			<div class="row pt-2">
				<div class="col-md-4">
					<img class="img-fluid card-img-top" src="{{  url('uploads/'.$post->image) }} " alt="Card image cap">
				</div>
				<div class="col-md-8">
					<div class="card-body">
				<h3 class="card-title">{{$post->subtitle}} </h3>
				<h5 class="card-title">{{$post->subtitle}} </h5>
				<p class="card-text">{{$post->body}} </p>
				
					<div class="d-inline-flex ">
				 
						<a class="d-inline" href="{{route('post.edit',$post->id)}} "><button type="button" class="btn btn-sm btn-info d-inline">Edit</button></a>
				 
						
				<form action="{{route('post.destroy',$post->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="submit" class="btn btn-sm btn-danger">Delete</button>
               </form>
  
						<a href="{{route('paragraph.make',['post_id' => $post->id ])}} "><button class="btn btn-sm btn-primary">Add Paragraph</button></a> 
					</div>
 
				</div>
				
				
			</div>
				</div>
		 
  <div class="card w-100">
			  <div class="card-header bg-primary">
                              <h4 class="text-white">All Paragraphs</h4>
                          </div>
                      </div>

 
	<div class="card-columns">
		@foreach($post->paragraphs as $paragraph)
		
		<div class="card">
			<img class="img-fluid card-img-top" src="{{ asset('uploads/'.$paragraph->image) }}" alt="Card image cap">
			
			<div class="card-body">
				<h5 class="card-title">{{$paragraph->title}} </h5>
				<p class="card-text"> {{ $paragraph->body}}</p>
				<a href="{{route('paragraph.edit',$paragraph->id)}} "><button class="btn btn-primary">Edit</button></a>
				<form action="{{route('paragraph.destroy',$paragraph->id)}} " method="post" class="d-inline">
					@csrf
					@method('DELETE')
					<button name="submit" class="btn btn-danger">Delete</button>
				</form>
			<button class="btn btn-info">Sort : {{$paragraph->sort}} </button>
			</div>
		</div>
		@endforeach
		
	</div>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 
@endsection