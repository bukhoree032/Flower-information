@extends('layouts.master')

@section('content')

<section >
   <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#main_slider" data-slide-to="0" class="active"></li>
          <li data-target="#main_slider" data-slide-to="1"></li>
          <li data-target="#main_slider" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>ไม้ดอกเมืองหนาว </h1><h3><strong class="color">โครงการไม้ดอกเมืองหนาวอันเนื่องมาจากพระราชดำริ</strong></h3><h3><strong> อำเภอเบตง จังหวัดยะลา</strong></h3>
                         <a class="btn btn-lg btn-primary" href="#" role="button">เกี่ยวกับ</a>
                         <a class="btn btn-lg btn-primary" href="#" role="button">ติดต่อเรา</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box">
                         <figure><img src="{{ asset('fonend/images/gyufyufyu.png') }}" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>Welcome To The <strong class="color">Nutrients Plants</strong></h1>
                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                         <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                         <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box ">
                         <figure><img src="{{ asset('fonend/images/gyufyufyu.png') }}" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="row marginii">
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="carousel-caption ">
                         <h1>Welcome To The <strong class="color">Nutrients Plants</strong></h1>
                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                         <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                         <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="img-box">
                         <figure><img src="{{ asset('fonend/images/gyufyufyu.png') }}" alt="img"/></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
       <i class='fa fa-angle-left'></i></a>
       <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
       <i class='fa fa-angle-right'></i>
       </a>
   </div>
 </section>
 <!-- plant -->
 <div id="plant" class="plants">
    <div class="container">
       <div class="row">
          <div class="col-md-12 ">
             <div class="titlepage">
                <h2>ข้อมูลดอกไม้</h2>
                <span>looking at its layout. The point of using Lorem Ipsumletters, as opposed to usingl</span>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          @foreach($result as $key => $value)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
               <div class="plants-box"  style="cursor: pointer;">
                  <figure><img src="{{ $value->file }}" alt="img" style="height: 150px"/></figure>
                  <h3>{{ $value->F_NAME }}</h3>
                  @php $value->F_OVERALL_APPEARANCE = __substr($value->F_OVERALL_APPEARANCE,'65') @endphp
                  <p><b>ลักษณะ :</b> {{ $value->F_OVERALL_APPEARANCE }}</p>
               </div>
            </div>
          @endforeach
       </div>
    </div>
 </div>

 <section>
<section style="background-color: #f1f1f1">
   <!-- plant -->
   <div id="" class="plants">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2>ข่าวสารดอกไม้เมืองหนาว</h2>
                  <span></span>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="card1" style="width: 100%; hight: 100%;">
                  <img src="http://www.banrae.go.th/album/picture/b_0070815_120559.JPG" alt="Avatar" style="width:100%">
                  <div class="container" style="background-color: #fff">
                     @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                     @php $data = __substr($data,'50') @endphp
                     <h4><b>{{ $data }}</b></h4> 
                     @php $data = 'เมื่อวันที่ 8 เมษายน 2564 ศูนย์ส่งเสริมและพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฎยะลา ได้ลงพื้นที่ติดตามกิจกรรม การเลี้ยงไก่เบตงเพื่อสร้างอาชีพ ประจำปี 2564 เพื่อติดตามกิจกรรมไก่เบตง พร้อมให้ความรู้เพิ่มเติมเกี่ยวกับการบำรุ่งไก่เบตง ในโครงการพัฒนาคุณภาพชีวิตและยกระดับรายได้ให้กับคนในชุมชนฐานราก ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                     @php $data = __substr($data,'155') @endphp
                    <p>{{ $data }}</p> 
                  </div>
                </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="blog-card">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://image.komkhaotuathai.com/uploads/images/contents/2021/05/iZVa6WPLUUDy2SgK_160719.jpg)"></div>
                        <ul class="details">
                           @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <li class="author"><a href="#">{{ $data }}</a></li>
                           <li class="date">Aug. 24, 2015</li>
                           <li class="tags">
                              <ul>
                              <li><a href="#">Learn</a></li>
                              <li><a href="#">Code</a></li>
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                              </ul>
                           </li>
                        </ul>
                        </div>
                        <div class="description">
                           @php $data = 'ลงพื้นที่ฝึกอบรม พร้อมทั้งให้ความรู้ในการปลูกดอกไม้ ณ ศูนย์การเรียนรู้นาขั้นบันได ตำบลมาโมง อำเภอสุคิริน จังหวัดนราธิวาส' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <h1>{{ $data }}</h1>
                           @php $data = 'เมื่อวันที่ 18-21 มีนาคม 2564 ผู้ช่วยศาสตราจารย์สุพร สุนทรนนท์ อาจารย์ผู้รับผิดชอบกิจกรรมการแปรรูปของที่ระลึกเพื่อการท่องเที่ยว พร้อมด้วยเจ้าหน้าที่ศูนย์ส่งเสริมและพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฏยะลา ลงพื้นที่ฝึกอบรม พร้อมทั้งให้ความรู้ในการเขียนว่าวบุหลันและกลองบานอแก่ครัวเรือนเป้าหมายในพื้นที่ กิจกรรมพัฒนาคุณภาพชีวิตและยกระดับรายได้ให้กับคนในชุมชนฐานราก ด้านการเฝึกอบรมการแปรรูปของที่ระลึกเพื่อการท่องเที่ยว ภายใต้โครงการยุทธศาสตร์มหาวิทยาลัยราชภัฏเพื่อการพัฒนาท้องถิ่น ณ ศูนย์การเรียนรู้นาขั้นบันได  ตำบลมาโมง อำเภอสุคิริน จังหวัดนราธิวาส' @endphp
                           @php $data = __substr($data,'100') @endphp
                           <p>{{ $data }}</p> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="blog-card">
                        <div class="meta">
                        <div class="photo" style="background-image: url(http://www.banrae.go.th/album/picture/b_2070815_120600.JPG)"></div>
                        <ul class="details">
                           @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <li class="author"><a href="#">{{ $data }}</a></li>
                           <li class="date">Aug. 24, 2015</li>
                           <li class="tags">
                              <ul>
                              <li><a href="#">Learn</a></li>
                              <li><a href="#">Code</a></li>
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                              </ul>
                           </li>
                        </ul>
                        </div>
                        <div class="description">
                           @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <h1>{{ $data }}</h1>
                           @php $data = 'เมื่อวันที่ 8 เมษายน 2564 ศูนย์ส่งเสริมและพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฎยะลา ได้ลงพื้นที่ติดตามกิจกรรม การเลี้ยงไก่เบตงเพื่อสร้างอาชีพ ประจำปี 2564 เพื่อติดตามกิจกรรมไก่เบตง พร้อมให้ความรู้เพิ่มเติมเกี่ยวกับการบำรุ่งไก่เบตง ในโครงการพัฒนาคุณภาพชีวิตและยกระดับรายได้ให้กับคนในชุมชนฐานราก ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'70') @endphp
                           <p>{{ $data }}</p> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="blog-card">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://thainews.prd.go.th/dc/transcode/image/2563/11/5/a1ff622a64edc1dabad036ce7b526d54_small.jpg)"></div>
                        <ul class="details">
                           @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <li class="author"><a href="#">{{ $data }}</a></li>
                           <li class="date">Aug. 24, 2015</li>
                           <li class="tags">
                              <ul>
                              <li><a href="#">Learn</a></li>
                              <li><a href="#">Code</a></li>
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                              </ul>
                           </li>
                        </ul>
                        </div>
                        <div class="description">
                           @php $data = 'ลงพื้นที่ติดตามกลุ่มเษตรกร ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'20') @endphp
                           <h1>{{ $data }}</h1>
                           @php $data = 'เมื่อวันที่ 8 เมษายน 2564 ศูนย์ส่งเสริมและพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฎยะลา ได้ลงพื้นที่ติดตามกิจกรรม การเลี้ยงไก่เบตงเพื่อสร้างอาชีพ ประจำปี 2564 เพื่อติดตามกิจกรรมไก่เบตง พร้อมให้ความรู้เพิ่มเติมเกี่ยวกับการบำรุ่งไก่เบตง ในโครงการพัฒนาคุณภาพชีวิตและยกระดับรายได้ให้กับคนในชุมชนฐานราก ณ เทศบาลตำบลบุดี อำเภอเมือง จังหวัดยะลา' @endphp
                           @php $data = __substr($data,'70') @endphp
                           <p>{{ $data }}</p> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>
   </div>
   <!-- end plant -->
</section>
 </section>
 <!-- end plant -->
 <!-- about -->
 {{-- <div id="about" class="about">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Satisfaction</span> 
                   </div>
                </div>
             </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Free Delivery</span> 
                   </div>
                </div>
             </div>
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="about-box">
                   <h2>50</h2>
                   <div class="white-bg">
                      <span>Store Locators</span> 
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
             <div class="about-box">
                <div class="titlepage">
                   <h2>About US</h2>
                   <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web pageweb page</span> 
                   <div class="read-more">
                      <a  href="#">Read More</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- end about -->
 <!--Gallery -->
 {{-- <div id="gallery" class="Gallery">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="titlepage">
             <h2>Our Gallery </h2>
          </div>
       </div>
    </div>
 </div> --}}
 {{-- <div class="container-fluid margin-r-l">
    <div class="row">
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/1.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/1.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/1.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span>  
             </figure>
          </div>
       </div>
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/2.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/2.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/1.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span>
             </figure>
          </div>
       </div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 thumb">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/3.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/3.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/3.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span>
             </figure>
          </div>
       </div>
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/4.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/4.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/4.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span> 
             </figure>
          </div>
       </div>
       <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/5.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/5.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/5.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span> 
             </figure>
          </div>
       </div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="Gallery-box">
             <figure>
                <a href="{{ asset('fonend/images/6.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset('fonend/images/6.jpg') }}" class="zoom img-fluid "  alt="">
                </a>
                <span class="hoverle">
                <a href="{{ asset('fonend/images/6.jpg') }}" class="fancybox" rel="ligthbox">View</a>
                </span>
             </figure>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- end Gallery -->
 <!--contact -->
 {{-- <div id="contact" class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 paddimg-right">
             <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                   <form>
                      <div class="row">
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="Name" type="text" name="Name">
                         </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                         </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                         </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <textarea class="textarea>" placeholder="Message" type="text" name="Message"></textarea>
                         </div>
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <a href="#">Read More</a>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                   <div class="map_section">
                      <figure><img src="{{ asset('fonend/images/map.jpg') }}"></figure>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 paddimg-left">
             <div class="Nursery-img">
                <figure>
                   <img src="{{ asset('fonend/images/contactimg.jpg') }}" alt="img"/>
                   <div class="text-box">
                      <h3>Best Green Nursery</h3>
                   </div>
                </figure>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- end contact -->
@endsection
