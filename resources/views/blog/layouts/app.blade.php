<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        @yield('meta')
        <link rel="icon" 
         type="image/png" 
          href="{{ asset('uploads/'.$profile->logo) }} ">
        <script src="https://kit.fontawesome.com/2d95c1d2c3.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        {{-- <link href="//db.onlinewebfonts.com/c/0cecd60fae341384bc8d47975a6206eb?family=" rel="stylesheet" type="text/css"/> --}}
        <link rel="stylesheet" href="{{ asset('assetsUser/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsUser/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsUser/css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsUser/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsUser/css/swiper.css') }}"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
        <style>
        body{
        font-size: 14px;
        }
        .bg-s{
        background-image: url(' {{ asset('raw/bg-s.png') }}  ');
        background-repeat: repeat;
        }
        .nav-item{
        /*font-size: 14px;*/
        }
        .dropdown .dropdown-menu .dropdown-item{
        font-size: 14px;
        }
            .navbar{

        box-shadow: none ;
}   

body{
    color: #292929 !important; 
}
p{
    font-size: 18px !important;
    line-height: : 29px !important;
    text-align : justify;
    word-wrap: break-word;
}

.muted, .entry2 p{

    color: #111;
    font-size: 18px;
    line-height: 27px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
}
        </style>
    </head>
    <body>
        
        
        
        @yield('content')
        
        
      
 
<script src="{{ asset('assetsUser/js/swiper.js') }}" type="text/javascript"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{ asset('assetsUser/js/popper.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script> 
<script src="{{ asset('assetsUser/js/mdb.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script>
<script src="{{ asset('assetsUser/js/bootstrap.min.js') }}" type="b52386749c15614db8b655e0-text/javascript"></script>
 
<script>
    $(document).ready(function(){
    $("#my-btn-s").click(function(){
    // alert('saab');
    $("#basicExampleNav").toggleClass("show");
    });
    });
    $("#navbardrop").hover(function(){
    $("#drop-menu").addClass("show");
    },function(){
    $("#drop-menu").removeClass("show");
    });
    $("#navbardrop2").hover(function(){
    $("#drop-menu2").addClass("show");
    }, function(){
    $("#drop-menu2").removeClass("show");
    });

    var swiper = new Swiper('.swiper-container', {
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    });
    // new WOW().init();
</script>
        
    </body>
</html>