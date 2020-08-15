 

<!-- Swiper -->
<div class="swiper-container">
	<div class="swiper-wrapper">
		{{-- <div class="swiper-slide"> </div>  --}}
		@foreach($sliders as $slider)
		<div class="swiper-slide"><img class="img-fluid" src="{{ asset('uploads/'.$slider->slider)}}" alt=""></div> 
		@endforeach
	</div>
	<!-- Add Arrows -->
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
<style>
	
.swiper-container {
	max-height: 600px;
}
.swiper-slide {
text-align: center;
font-size: 18px;
background: #fff;
/* Center slide text vertically */
display: -webkit-box;
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
-webkit-justify-content: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
-webkit-align-items: center;
align-items: center;
}
</style>
 