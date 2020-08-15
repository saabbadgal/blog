@extends('blog.layouts.app')




@section('content')

@include('blog.layouts.header')
 
 
<div class="container my-5">

	<style>
    .border-top {
      border-top: 5px solid #33b5e5 !important;
      border-top-left-radius: .25rem!important;
    	border-top-right-radius: .25rem!important;
    }
  </style>

  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">

    <div class="card">
      <div class="card-body rounded-top border-top p-5">
        
        <!-- Section heading -->
        <h3 class="font-weight-bold my-4">Contact Us</h3>
        <!-- Section description -->
        <p class="font-weight-light mx-auto mb-4 pb-2">Lorem ipsum dolor, sit amet consectetur<br> adipisicing elit. Id quam sapiente molestiae.</p>

        <form class="mb-4 mx-md-5" action="{{route('subscribe.store')}} " method="post">
         @csrf
          <div class="row">
            <div class="col-md-6 mb-4">

              <!-- Name -->
              <input name="name" type="text" id="name" class="form-control" placeholder="Name">

            </div>
            <div class="col-md-6 mb-4">

              <!-- Email -->
              <input name="email" type="email" id="email" class="form-control" placeholder="Email">

            </div>
          </div>

       {{--    <div class="row">
            <div class="col-md-12 mb-4">

              <!-- Subject -->
              <input type="text" id="subject" class="form-control" placeholder="Subject">

            </div>
          </div> --}}

          <div class="row">
            <div class="col-md-12">
{{-- 
              <div class="form-group mb-4">
                <textarea class="form-control rounded" id="message" rows="3" placeholder="How can we help?"></textarea>
              </div> --}}

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-md">Submit</button>
              </div>

            </div>
          </div>

        </form>
        
      </div>
    </div>

  </section>
  <!--Section: Content-->

</div>
 
 
@include('blog.layouts.footer')
@endsection