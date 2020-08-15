	<div class="col-lg-3  pt-lg-4">

		<div class="card mb-4">
			<!-- Card header -->
			<div class="card-header text-center">Categories</div>
			<!--Card content-->
			<div class="card-body">
				<ul class="list-group">
					@php
					$cats = $categories->count();
					 
					@endphp
					@foreach($categories as $category)
					@php
					// dd($category->slug)
					@endphp
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href= "{{$category->path()}} " class="text-dark">{{ $category->name }}</a>
						<span class="badge btn-deep-orange badge-pill">{{$category->posts()->count()}} </span>
					</li>
					@endforeach
					
				</ul>
			</div>
			
		</div>
		<div class="card mb-4">
			<!-- Card header -->
			<div class="card-header text-center">Tags</div>
			<!--Card content-->
			<div class="card-body">
				@foreach($tags as $tag)
				<a href="{{$tag->path()}} " class="badge btn-deep-orange mr-2 p-2 mb-2">{{$tag->name}} </a>
				@endforeach
			</div>
		</div>
		
	</div>