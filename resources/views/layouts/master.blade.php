<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ดอกไม้เมืองหนาว</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('fonend/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('fonend/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('fonend/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('fonend/images/fevicon.png" type="image/gif') }}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('fonend/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <link rel="stylesheet" href="{{ asset('fonend/css/custom.css') }}">

      <link href="{{ asset('prompt/css/fonts.css') }}" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         body {
            font-family: 'Prompt', 'Helvetica Neue', Helvetica, Arial, sans-serif;
         }
		   html {
            font-size: 14px;
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('fonend/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> 
                              <a href="index.html"><img src="https://static.vecteezy.com/system/resources/previews/001/190/578/non_2x/flower-icon-png.png" alt="#" style="width: 70px"><b> ดอกไม้เมืองหนาว</b> </a> 

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="#">หน้าแรก</a> </li>
                                 <li> <a href="#about">เกี่ยวกับ</a> </li>
                                 <li><a href="{{ route('home.flower.flowers') }}">ดอกไม้</a></li>
                                 <li><a href="{{ route('home.stores') }}">ร้านค้า</a></li>
                                 <li><a href="{{ route('home.farmer') }}">เกษตกร</a></li>
                                 <li><a href="#contact">ติดต่อเรา</a></li>
                                 {{-- <li class="last"><a href="#"><img src="{{ asset('fonend/images/search_icon.png') }}" alt="icon"/></a></li> --}}
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
        @yield('content')
        <footer>
            <div id="contact" class="footer">
               <div class="container">
                  <div class="row pdn-top-30">
                     <div class="col-md-12 ">
                        <div class="footer-box">
                           <div class="headinga">
                              <h3>Address</h3>
                              <span>Demo Store .New York  United States</span>
                              <p>(+71 98765348)</p>
                           </div>
                           <ul class="location_icon">
                              <li> <a href="#"><img src="icon/facebook.png"></a></li>
                              <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                              <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                              <li> <a href="#"><img src="icon/instagram.png"></a></li>
                           </ul>
                           <div class="menu-bottom">
                              <ul class="link">
                                 <li> <a href="#">Home</a></li>
                                 <li> <a href="#">About</a></li>
                                 <li> <a href="#"> Plant</a></li>
                                 <li> <a href="#">Gallery</a></li>
                                 <li> <a href="#"> Contact us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2019 All Rights Reserved Design By  <a href="https://html.design/">Free Html Templates</a></p>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
         <!-- Javascript files-->
         <script src="{{ asset('fonend/js/jquery.min.js') }}"></script>
         <script src="{{ asset('fonend/js/popper.min.js') }}"></script>
         <script src="{{ asset('fonend/js/bootstrap.bundle.min.js') }}"></script>
         <script src="{{ asset('fonend/js/jquery-3.0.0.min.js') }}"></script>
         <script src="{{ asset('fonend/js/plugin.js') }}"></script>
         <!-- sidebar -->
         <script src="{{ asset('fonend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
         <script src="{{ asset('fonend/js/custom.js') }}"></script>
         <!-- javascript --> 
         <script src="{{ asset('fonend/js/owl.carousel.js') }}"></script>
         <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
         <script>
            $(document).ready(function(){
            $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
         </script> 
      </body>
   </html>
