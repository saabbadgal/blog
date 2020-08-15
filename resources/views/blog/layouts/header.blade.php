<!--Navbar-->
<nav class="navbar grey navbar-expand-lg navbar-light  p-0 lighten-3 d-block" style="color: white">

  <div class="container">

  

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse mb-1"  >

      <!-- Links -->
      <ul class="navbar-nav mr-auto text-uppercase font-weight-normal" style="font-size: 20px;">

        <li class="nav-item">
          <a href="{{$profile->facebook}}" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li> 


        <li class="nav-item">
          <a href="{{$profile->linked}}" class="nav-link waves-effect" target="_blank">
           <i class="fab fa-linkedin-in"></i>
          </a>
        </li> 
        <li class="nav-item">
          <a href="{{$profile->instagram}}" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li> 
         <li class="nav-item">
          <a href="{{'https://wa.me/' . $profile->phone}}" class="nav-link waves-effect" target="_blank">
           <i class="fab fa-whatsapp"></i>
          </a>
        </li> 
      </ul>
      <!-- Links -->
      
 
      
      <ul class="navbar-nav ml-auto nav-flex-icons">
         <li class="nav-item">
          <a href="mailto:{{$profile->gmail}}" class="nav-link waves-effect"
             target="_blank">
         <i class="far fa-envelope"></i>
            {{$profile->gmail}}
          </a>
        </li>

        <li class="nav-item">
          <a href="tel:{{$profile->phone}}" class="nav-link waves-effect"
             target="_blank">
<i class="fas fa-mobile-alt"></i>
           +91-{{$profile->phone}}
          </a>
        </li> 
      </ul>

    </div>
    <!-- Collapsible content -->

  </div>
  
  <hr class="w-80 m-0">
  
 
</nav>
<!--/.Navbar-->
 
<nav class="navbar navbar-expand-lg navbar-light white p-lg-0">

  

    <a class="navbar-brand pl-md-3" href="{{route('blog.index')}} ">
      <img src="{{ asset('uploads/'.$profile->logo) }} " height="70" alt="logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" id="my-btn-s" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
   </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Left -->
      <ul class="navbar-nav mx-auto">
         <li class="nav-item">
          <a class="nav-link waves-effect" href="{{route('blog.index')}} "> Home </a>
        </li>
        <li class="nav-item dropdown" id="navbardrop">
      <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
        Marketing
      </a>
      <div class="dropdown-menu" id="drop-menu"  style="width: 220px">
         @foreach($categories as $category)

          @if($category->slug == "learn-marketing")
          <a href= "{{$category->path()}} " class="text-dark dropdown-item">{{ $category->name }}</a>
          @elseif($category->slug == "tips-and-tricks")
          <a href= "{{$category->path()}} " class="text-dark dropdown-item">{{ $category->name }}</a>

 

          @endif
 
        
          

          @endforeach 
      </div>
    </li>  
     <li class="nav-item dropdown"   id="navbardrop2">
      <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
       Digital Marketing
      </a>
      <div class="dropdown-menu" id="drop-menu2"  style="width: 200px">
         @foreach($categories as $category)

          @if($category->slug == "tips-and-tricks-dm")
          <a href= "{{$category->path()}} " class="text-dark dropdown-item">{{ $category->name }}</a>
          @elseif($category->slug == "learn-digital-marketing")
          <a href= "{{$category->path()}} " class="text-dark dropdown-item">{{ $category->name }}</a>

 

          @endif
 
        
          

          @endforeach 
      </div>
    </li>

        <li class="nav-item">
          <a class="nav-link waves-effect" href="{{route('blog.about')}} ">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="{{route('blog.contact')}} ">Contact</a>
        </li>
      </ul>

      <!-- Right -->
<ul class="navbar-nav nav-flex-icons pt-md-4 ">
  <li class="nav-item">
    <!-- Search form -->
    <div class="active-pink-4 mb-4 d-inline-flex ml-lg-2 pr-md-3">
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

        <ul class="navbar-nav nav-flex-icons d-block  d-sm-none"> 
    

          <li class="nav-item">
          <a href="{{$profile->facebook}}" class="btn btn-fb py-1"><i class="fab fa-facebook-f pr-1"></i> Facebook
          </a>


        </li> 
        <li class="nav-item">
          <a href="{{$profile->instagram}}" class="btn btn-ins py-1"><i class="fab fa-instagram pr-1"></i> Instagram
          </a>
        </li>
          <li class="nav-item">
          <a href="mailto:{{$profile->gmail}}" class="nav-link waves-effect"
             target="_blank">
         <i class="far fa-envelope"></i>
            {{$profile->gmail}}
          </a>
        </li>
         <li class="nav-item">
          <a href="tel:{{$profile->phone}}" class="nav-link waves-effect"
             target="_blank">
<i class="fas fa-mobile-alt"></i>
           {{$profile->phone}}
          </a>
        </li> 
      </ul>
      
    </div>

 

</nav>
<!--/.Navbar-->
 

 <hr class="w-80 m-0">



 
<script>

</script>