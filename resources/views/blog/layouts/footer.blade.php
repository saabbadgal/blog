<div class="row d-block d-md-none text-center">
  <div class="container ">
  
 
      <ul class="navbar-nav nav-flex-icons pt-md-4">
        <li class="nav-item">
         <!-- Search form -->
<div class="active-pink-4 my-2 d-inline-flex ml-lg-2 pr-md-3">
  <form method="post" action="{{route('blog.search')}} ">
    @csrf
 
  <input class="form-control d-inline"  name="search" type="text" placeholder="Search Article" aria-label="Search">
  <button type="submit" class="btn btn-sm btn-mdb-color px-3 d-none"><i class="fas fa-search"></i></button>
  {{-- <button type="submit" name="submit" class="btn btn-sm btn-deep-orange d-inline"> Search </button> --}}
</form> 
</div>
<!-- Search form -->
        </li>
      </ul>
      </div>
</div>


<!-- Footer -->
<footer class="page-footer font-small info-color-dark py-lg-3">
  
  <!-- Footer Elements -->
  <div class="container">
    <!-- Grid row-->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-12 py-2">
        <div class=" flex-center">
          <div class="col-md-10">
            <section class="pr-1">
              <!-- Material form subscription -->
              <div class="card">
               {{--  <h5 class="card-header info-color-dark white-text text-center py-4">
                <strong>Subscribe</strong>
                </h5> --}}
                <!--Card content-->
                <div class="card-body px-lg-5">
                  <!-- Form -->
                  <form action="{{route('subscribe.store')}} " method="post" class="text-center" style="color: #757575;" action="#!">
                    @csrf
                     <div class="row justify-content-center">
                       <div class="col-md-4">
                        <div class="md-form md-outline m-0">
                <input type="text" name="name" id="username12" class="form-control"  placeholder="Name" > 
                @error('name')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror
                 </div>
                       </div> 
                       <div class="col-md-4">
                        <div class="md-form md-outline m-0">
                <input type="email" name="email" id="username12" class="form-control" placeholder="Email" value="{{old('email')}} ">
                  @error('email')
                    <span class=" error jquery-validation-error form-text text-danger">{{$message}} </span>
                    @enderror 
              </div>
                       </div>
                       <div class="col-md-4">
                         <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 waves-effect " type="submit">Subscribe</button>
                       </div>

                    

                       </div>
                         </form>
                     </div> 
                    
                    <!-- Sign in button -->
                
                  </form>
                  <!-- Form -->
                </div>
              </div>
              <!-- Material form subscription -->
            </section>
          </div>
          
        </div>
      </div>
      <!-- Grid column -->
      
      
    </div>
    <!-- Grid row-->
  </div>
  <!-- Footer Elements -->
  
</footer>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small info-color-dark">
  
  <!-- Footer Elements -->
  <div class="container">
    <!-- Grid row-->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-12 py-2">
        <div class="flex-center">
          <!-- Facebook -->
          <a class="fb-ic" href="{{$profile->facebook}} ">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="{{$profile->instagram}} ">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <a class="ins-ic" href="mailto:{{$profile->gmail}} ">
            <i class="far fa-envelope white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          
        </div>
      </div>
      <!-- Grid column -->
      
      
    </div>
    <!-- Grid row-->
  </div>
  <!-- Footer Elements -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a class="text-white" href="https://www.learnmarketing.org"> Learn Marketing Organization</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>