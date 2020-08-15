@extends('blog.layouts.app')
@section('meta')
<meta name="description" content="{{ $meta->description ?? '' }}">
<meta name="keywords" content="{{ $meta->keywords ?? '' }}">
<title>{{ $meta->title ??  'Blog' }}</title>
@endsection

@section('content')
@include('blog.layouts.header')
 @php
// dd($posts->posts);
 @endphp
 
<div class="container">
	<div class="row mt-lg-3">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					
					<h5>Category : {{$cat}}  </h5>
				</div>
			</div>
		</div>
		<span class="animate-border ml-3 tw-mt-20"></span>
	</div>

	<div class="row">
		@if(count($posts) < 1)
		<div class="container">
			<h2>No Results Found</h2>
		</div>
		@endif
		<div class="col-lg-9 mb-4">
			@foreach($posts as $post)
			<div class="row pt-lg-4 mb-lg-4">
				<div class="col-lg-5">
					<a href="{{$post->path()}}"><img src="{{ asset('uploads/'.$post->image) }}" alt="{{$post->image_alt}}" class="img-fluid rounded pt-md-4"></a>
				</div>
				<div class="col-lg-7">
					<div class="entry2">
						
						<div class="excerp">
							@foreach($post->categories as $category)
							<span class="post-category text-white warning-color-dark mb-1">{{$category->name}} </span>
							@endforeach
							<h2 class="pt-2 mb-2 p-h text-dark"><a class="p-h"  href="{{$post->path()}} ">{{$post->title}} </a></h2>
							
							<p class="p-s">{{Str::limit($post->body, $limit = 240, $end = '..')}} <a href="{{$post->path()}} ">...Read more</a> </p>
							<div class="post-meta align-items-center text-left clearfix">
							<figure class="author-figure mb-0 mr-3 float-left"></figure>
							<span class="d-inline-block mt-1"><i class="fas fa-user text-dark"></i> &nbsp;<a href="#">{{$post->user->name}} </a></span>
							{{-- 	@php
							$newDateFormat2 = date('d/m/Y', strtotime($post->created_at));
							dd($newDateFormat2);
							@endphp --}}
							<span class="text-dark">&nbsp;&nbsp; {{date("h:i a"). " "  . date_format($post->created_at,"M d,y") }} </span>
						</div>
	{{-- 					<a href="{{$post->path()}}" type="button float-left" class="btn btn-sm btn-elegant waves-effect waves-light">Read More</a> --}}
		 
						
					</div>
				</div>
			</div>
		</div>
			@endforeach
					<div class="row justify-content-end pt-5">
  {{ $posts->links() }}
</div>
	</div>

  @include('blog.postsidebar')
</div>

 </div>
{{-- <div class="row text-center pt-5">
<div class="col-md-12">
<div class="custom-pagination">
	<span>1</span>
	<a href="#">2</a>
	<a href="#">3</a>
	<a href="#">4</a>
	<span>...</span>
	<a href="#">15</a>
</div>
</div>
</div>  --}}
 
 
 
@include('blog.layouts.footer')
@endsection