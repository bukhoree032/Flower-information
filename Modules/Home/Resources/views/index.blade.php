@extends('layouts.master')

@section('content')

<style>
   /* Styles for wrapping the search box */

.main {
   width: 50%;
   /* margin: 50px auto; */
}

/* Bootstrap 3 text input with search icon */

.has-search .form-control-feedback {
   right: initial;
   left: 0;
   color: #ccc;
}

.has-search .form-control {
   padding-right: 12px;
   padding-left: 34px;
}

</style>
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
                <center>
                    <div class="main">
                        <!-- Actual search box -->
                        <div class="form-group has-feedback has-search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="ค้นหา">
                        </div>
                    </div>
                </center>
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
               <div class="card1" style="width: 100%">
                  <div style="cursor: pointer;"  onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
                     <img src="https://lpdc.yru.ac.th/backend/web/file-uploads/x0k7AzJRnvZKEVNK-WncgU/thumbnail/706d9d14175a4fc88670ec911d8f1e81.jpg" alt="Avatar" style="width:100%">
                     <div class="container" style="background-color: #fff">
                        @php $data = 'อบรมปฏิบัติการพัฒนาบรรจุภัณฑ์และตราสัญลักษณ์เชิงพาณิชย์ ในกิจกรรมพัฒนาขับเคลื่อนการดำเนินงานโครงการไม้ดอกเมืองหนาวอันเนื่องมาจากพระราชดำริ อำเภอเบตง จังหวัดยะลา ภายใต้โครงการตามรอยพระราชดำริจังหวัดยะลา' @endphp
                        @php $data = __substr($data,'50') @endphp
                        <h4><b>{{ $data }}</b></h4> 
                        @php $data = 'เมื่อวันที่ 17 – 18 มีนาคม 2564 ณ สวนหมื่นบุปผา โครงการไม้ดอกเมืองหนาว อันเนื่องมาจากพระราชดำริตำบลตาเนาะแมเราะ อำเภอเบตง จังหวัดยะลา ผู้ช่วยศาสตราจารย์ ดร.สมบัติ โยธาทิพย์ อธิการบดีมหาวิทยาลัยราชภัฏยะลา มอบหมายให้ อาจารย์ ดร.นิรันดิ์เกียรติ ลิ่วคุณูปการ รองอธิการบดีฝ่ายนโยบายและแผน ดำเนินการจัดอบรมปฏิบัติการพัฒนาตราสัญลักษณ์และบรรจุภัณฑ์เชิงพาณิชย์ ในกิจกรรมพัฒนาขับเคลื่อนการดำเนินงานโครงการไม้ดอกเมืองหนาวอันเนื่องมาจากพระราชดำริ อำเภอเบตง จังหวัดยะลา ภายใต้โครงการตามรอยพระราชดำริจังหวัดยะลา จำนวน 8 กลุ่ม มีเกษตรกรผู้เข้าร่วมฝึกอบรม ในพื้นที่อำเภอเบตง และอำเภอธารโต จังหวัดยะลา จำนวน 35 ราย
                        โดย นายวรเชษฐ พรมโอภาษ รองผู้ว่าราชการจังหวัดยะลา เป็นประธานในพิธีเปิดการอบรมปฏิบัติการพัฒนาบรรจุภัณฑ์และตราสัญลักษณ์เชิงพาณิชย์ และกล่าวขอบคุณคณะผู้ขับเคลื่อนกิจกรรมดังกล่าวจากมหาวิทยาลัยราชภัฏยะลา และกล่าวให้โอวาทแก่ผู้เข้าร่วมฝึกอบรม โดยมีวัตถุประสงค์ เพื่อให้กลุ่มเกษตรกรผู้ปลูกไม้ดอกเมืองหนาวมีส่วนร่วมออกแบบตราสัญลักษณ์ ที่มีอัตลักษณ์มีมาตรฐานตามหลักสากล ของไม้ดอกเมืองหนาวในพื้นที่จังหวัดยะลา สอดคล้องกับความต้องการของกลุ่มเกษตรกรผู้ปลูกไม้ดอกเมืองหนาว ช่วยสร้างรายได้ให้แก่กลุ่มเกษตรกรนำไปสู่การพึ่งตนเองได้อย่างยั่งยืน โดยให้ความสำคัญต่อเพิ่มความเชื่อมั่นในตัวแบรนด์ เพื่อสะท้อนถึงคุณภาพของผลิตภัณฑ์ และช่วยให้ผู้บริโภค รู้สึกเชื่อมั่น เข้าใจ และยอมรับในตัวสินค้า รวมทั้งการพัฒนาบรรจุภัณฑ์ที่เหมาะสมแก่การขนส่ง ที่สามารถเก็บรักษาผลิตภัณฑ์ไม่ให้ได้รับความเสียหายระหว่าง การขนส่ง และเพื่อกระจายผลผลิต ไปสู่ตลาดภายนอกจังหวัด และในภูมิภาคอื่นๆ นำไปสู่การสร้างมูลค่าเพิ่มให้แก่ผลผลิตไม้ดอกเมืองหนาวในพื้นที่จังหวัดยะลา อันเป็นปัจจัยสำคัญต่อการสร้างงาน สร้างรายได้ และยกระดับคุณภาพชีวิตของประชาชนในพื้นที่ต่อไป' @endphp
                        @php $data = __substr($data,'155') @endphp
                        <p>{{ $data }}</p> 
                     </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="blog-card" style="cursor: pointer;"  onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://lpdc.yru.ac.th/backend/web/file-uploads/fdKtYbskPEOM9cp2zP6FAs/thumbnail/feb351275178514412fc55683e0773c7.jpg)"></div>
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
                           @php $data = 'เมื่อวันที่ 18-21 มีนาคม 2564 ลงพื้นที่ฝึกอบรม โครงการไม้ดอกเมืองหนาว อันเนื่องมาจากพระราชดำริตำบลตาเนาะแมเราะ อำเภอเบตง จังหวัดยะลา ผู้ช่วยศาสตราจารย์ ดร.สมบัติ โยธาทิพย์ อธิการบดีมหาวิทยาลัยราชภัฏยะลา มอบหมายให้ อาจารย์ ดร.นิรันดิ์' @endphp
                           @php $data = __substr($data,'100') @endphp
                           <p>{{ $data }}</p> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="blog-card" style="cursor: pointer;"  onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://lpdc.yru.ac.th/backend/web/file-uploads/NrFWbsWg-W-8h6fFgWe5f4/thumbnail/24eb3b95ae9a7233b80b489918f444b2.jpg)"></div>
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
                     <div class="blog-card" style="cursor: pointer;" onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
                        <div class="meta">
                        <div class="photo" style="background-image: url(https://lpdc.yru.ac.th/backend/web/file-uploads/uDi1lLHbVEiWH_ynT-LX77/thumbnail/2da55c364c6a10c0dfb830eb5b77b95d.jpg)"></div>
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
                           @php $data = 'เมื่อวันที่ 14 เมษายน 2564 ศูนย์ส่งเสริมและพัฒนาท้องถิ่น มหาวิทยาลัยราชภัฎยะลา ได้ลงพื้นที่ติดตามโครงการไม้ดอกเมืองหนาว อันเนื่องมาจากพระราชดำริตำบลตาเนาะแมเราะ อำเภอเบตง จังหวัดยะลา ผู้ช่วยศาสตราจารย์ ดร.สมบัติ โยธาทิพย์ อธิการบดีมหาวิทยาลัยราชภัฏยะลา มอบหมายให้ อาจารย์ ดร.นิรันดิ์' @endphp
                           @php $data = __substr($data,'70') @endphp
                           <p>{{ $data }}</p> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <a class="btn btn-lg btn-primary pull-right" href="{{ route('admin.news.index',$value->id) }}" role="button">เพิ่มเติม...</a>
            </div>
       </div>
   </div>
   <!-- end plant -->
</section>
 <!-- end plant -->
 <!-- about -->
 <!-- end contact -->
@endsection
