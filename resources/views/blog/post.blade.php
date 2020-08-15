@extends('blog.layouts.app')

@section('meta') 
<title>{{   $post->meta_title ?? ''  }}</title>
<meta name="description" content="{{ $post->meta_description ?? '' }}">
<meta name="keywords" content="{{ $post->meta_keywords ?? '' }}">
   
@endsection 
 







@section('content')
@include('blog.layouts.header')
 
<section class="site-section bg-s">
	<div class="container ">
		<div class="row blog-entries element-animate">
			<div class="col-md-12 col-lg-8 main-content bg-white pt-4">
				
				<div class="post-content-body">
					<div class="media">
						<div class="post-format-icon post-format-standar">
							<i class="fa fa-pencil"></i>
						</div>
						<div class="media-body">
							<h2 class="post-h">{{$post->title}} </h2> 
							
							<div class="post-meta mb-0 clearfix">
								<ul><li class="text-dark"><i class="fa fa-user"></i><a class="text-dark">{{$post->user->name}} </a></li><li class="text-dark"><i class="fa fa-clock-o"></i><time class="entry-date published" datetime="2019-01-30T14:30:51+00:00"> {{ date_format($post->created_at,"M d,Y")}}</time>{{" · ". $post->reading_time}} read</li> </ul> </div>
							</div>
						</div>
						<hr>
						<div class="row mb-2 mt-1  justify-content-center">
							<div class="col-sm-12 mb-2  text-center">
								<img src="{{ asset('uploads/'.$post->image) }}" alt="{{$post->image_alt}} " class="img-fluid rounde"  style="width: {{$post->width}}px !important; height: {{$post->height}}px !important; ">
							</div>
					
						
						</div>

						
						<p class="p-s-s">{!! $post->body !!}</p>
						@if($post->paragraphs)
						@foreach($post->paragraphs as $paragraph)
						<hr>
						<div class="row mb-2 mt-1 justify-content-center">
							<div class="col-sm-9 mb-2 text-center">
								<img src="{{ asset('uploads/'.$paragraph->image) }}" alt="{{$post->image_alt}} " class="img-fluid rounde" style="width: {{$paragraph->width}}px !important ; height: {{$paragraph->height}}px !important;">
							</div>
						</div>
						<h2 class="post-h">{{$paragraph->title}}</h2>
						<p class="p-s-s">{!!$paragraph->body!!}</p>
						@endforeach
						@endif
						<hr>
						<div class="card mb-2">
							<div class="card-header py-1">
								 					<button type="button" class="btn btn-sm btn-fb"><i class="fab fa-facebook-f"></i></button>
					 						<button type="button" class="btn btn-sm btn-tw"><i class="fab fa-twitter"></i></button>
					 
						<button type="button" class="btn btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></button>
						<button type="button" class="btn btn-sm btn-li"><i class="fab fa-linkedin-in"></i></button>
					 
							</div>
						</div>
						<div class="card mb-2">
							<div class="card-header">
								Categories :
								
								@foreach($post->categories as $categor)
								<a class="badge badge-primary p-2" href="{{$categor->path()}} ">{{ $categor->name }} </a>
								@endforeach
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								Tags :
								@foreach($post->tags as $ta)
								<a class="badge badge-primary p-2" href="{{$ta->path()}}">{{ $ta->name }} </a>
								@endforeach
							</div>
						</div>
						<!--Light blue-->
						
					</div>
					
				</div>
				<div class="col-lg-1"></div>
		  @include('blog.postsidebar') 
			</div>
		</div>
	</section>
	@include('blog.layouts.footer')
	@endsection