<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crossroads</title>

    <!-- Css Files -->
    <link href="{{asset('logo/logo.png')}}" rel="icon">
    <link href="{{asset('logo/logo.png')}}" rel="apple-touch-icon">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-slider.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/prettyphoto.css')}}" rel="stylesheet">
    <link href="{{asset('build/mediaelementplayer.css')}}" rel="stylesheet">
    
    <link href="{{asset('style.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/color.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-two.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-three.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-four.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <style>
   
    .countdown {
      display: flex;
      justify-content: center;
      gap: 20px;
    }
    .countdown .time-box {
      background-color: #06388f;
      border-radius: 8px;
      width: 80px;
      height: 100px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 36px;
      font-weight: bold;
      color: #fff;
    }
    .countdown .time-box::before,
    .countdown .time-box::after {
      content: '';
      position: absolute;
      background-color: #1d7c34;
      /* height: 5px; */
      width: 100%;
      top: 50%;
      transform: translateY(-50%);
    }
    .countdown .time-box span {
      font-size: 12px;
      text-transform: uppercase;
      font-weight: normal;
    }
    </style>
    
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
   
        @include('frontend/layouts/header')

        @yield('content')
        
        @include('frontend/layouts/footer')
	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="{{asset('script/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('script/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.prettyphoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/fitvideo.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/skills.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/waypoints-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('build/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{asset('script/functions.js')}}"></script>

    <script>
    const targetDate = new Date("February 1, 2025 17:00:00").getTime();

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = targetDate - now;

      if (distance > 0) {
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = String(days).padStart(2, "0");
        document.getElementById("hours").textContent = String(hours).padStart(2, "0");
        document.getElementById("minutes").textContent = String(minutes).padStart(2, "0");
        document.getElementById("seconds").textContent = String(seconds).padStart(2, "0");
      } else {
        clearInterval(countdownInterval);
        document.querySelector(".countdown").innerHTML = "<h2>The event has started!</h2>";
      }
    }

    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown(); // Initialize immediately
  </script>
  </body>

<!--  15:20  -->
</html>