<!DOCTYPE html>
<html lang="en">
    <head>
@include('partials.all.css')

        <style>
        .bg-s{
        background-image: url(' {{ asset('raw/bg-s.png') }}  ');
        background-repeat: repeat;
        }
        .sticky-header .logo {
        position: static;
        top: 0;
        left: 0;
        width: 240px;
        z-index: 100;
        }
        .sticky-header .header-section {
        position: relative;
        
        }
        .sticky-header .right-notification {
        margin-right: 0px;
        }
        .sticky-header .header-section {
        position:static; }
        </style>
    </head>
    <body class="sticky-header bg-s">
        
        @include('auth.user.layouts.header')
        
              @yield('content')


        @include('auth.user.layouts.footer')
        
      @include('partials.all.js')


    </body>

    
</html>