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
      <title>{{ $system[0]->sys_nameweb_th ?? 'ชื่อระบบ' }}</title>
      <link rel = "icon" href ="{{ $system[0]->file_icon ?? null}}" type = "image/x-icon">
      {{-- @dd($system) --}}
      {{-- http://127.0.0.1:8000/storage/flowers/KQBGB_TFWat.png --}}
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
      {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ asset('fonend/images/loading.gif') }}" alt="#" /></div>
      </div> --}}
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
                              <a href="{{ route('home.index') }}"><img src="{{ $system[0]->file_logo ?? null }}" alt="#" style="width: 150px"></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 {{-- <li class="active"> <a href="{{ route('home.index') }}">หน้าแรก</a> </li> --}}
                                 <li><a href="{{ route('home.index') }}">หน้าแรก</a> </li>
                                 {{-- <li> <a href="#about">เกี่ยวกับ</a> </li> --}}
                                 <li><a href="{{ route('home.flower.flowers') }}">ดอกไม้</a></li>
                                 <li><a href="{{ route('home.stores') }}">ร้านค้า</a></li>
                                 <li><a href="{{ route('home.farmer') }}">เกษตกร</a></li>
                                 <li><a href="{{ route('admin.news.index') }}">ข่าวกิจกรรม</a></li>
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
                              <h3>ติดต่อเรา</h3>
                              <span><b>{{$system[0]->sys_name_th}}</b></span>
                              <span>{{$system[0]->sys_name_en}}</span>
                              <span>{{$system[0]->sys_address_th}}</span>
                              <p>( {{$system[0]->sys_phon}} )</p>
                           </div>
                           <ul class="location_icon">
                              <li> <a href="{{$system[0]->sys_facebook_link ?? '#'}}"><img src="{{ asset('storage/icon/facebook.png'); }}"></a></li>
                              <li> <a href="#"><img src="{{ asset('storage/icon/Twitter.png'); }}"></a></li>
                              <li> <a href="#"><img src="{{ asset('storage/icon/line.png'); }}"></a></li>
                              <li> <a href="#"><img src="{{ asset('storage/icon/instagram.png'); }}"></a></li>
                           </ul>
                           {{-- <div class="menu-bottom">
                              <ul class="link">
                                 <li> <a href="#">Home</a></li>
                                 <li> <a href="#">About</a></li>
                                 <li> <a href="#"> Plant</a></li>
                                 <li> <a href="#">Gallery</a></li>
                                 <li> <a href="#"> Contact us</a></li>
                              </ul>
                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     {{-- <p>Copyright 2019 All Rights Reserved Design By  <a href="https://html.design/">Free Html Templates</a></p> --}}
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
