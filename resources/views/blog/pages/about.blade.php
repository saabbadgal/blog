@extends('blog.layouts.app')




@section('content')

@include('blog.layouts.header')
 <div class="container mb-4">
<section class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">

        <!-- Section heading -->
        <h1 class="text-center my-5 h1">Our work</h1>

        <!-- Section description -->
        <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
          do eiusmod tempor incididunt ut labore et dolore aliqua. Ut enim ad minim veniam.</p>

        <div class="row">
          <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox" data-pswp-uid="1">

              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" class="img-fluid z-depth-1">
                </a>
              </figure>

              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(40).jpg" data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(40).jpg" class="img-fluid z-depth-1">
                </a>
              </figure>

              <figure class="col-md-4">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" data-size="1600x1067">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" class="img-fluid z-depth-1">
                </a>
              </figure>

            </div>

          </div>

        </div>

      </section>
</div> 
 
@include('blog.layouts.footer')
@endsection