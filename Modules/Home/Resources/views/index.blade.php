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
         @if(isset($banner[0]))
            @foreach($banner as $key => $value)
               <li data-target="#main_slider" data-slide-to="{{$key}}" class="@if($key == 0) active @endif"></li>
            @endforeach
         @endif
       </ol>
      <div class="carousel-inner">
         @if(!isset($banner[0]))
            <div class="carousel-item active">
               <div class="container">
                  <div class="row marginii">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="carousel-caption ">
                           {{-- <h1>{ไม้ดอกเมืองหนาว} </h1><h3><strong class="color">โครงการไม้ดอกเมืองหนาวอันเนื่องมาจากพระราชดำริ</strong></h3><h3><strong> อำเภอเบตง จังหวัดยะลา</strong></h3> --}}
                           <h1>หัวข้อแบนเนอร์</h1>
                           <div class="col-sm-10">
                              <h3><strong class="color">รายละเอียดแบนเนอร์</strong></h3>
                           </div>
                           <a class="btn btn-lg btn-primary" href="#" role="button">เกี่ยวกับ</a>
                           <a class="btn btn-lg btn-primary" href="#contact" role="button">ติดต่อเรา</a>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                           <figure><img src="{{ asset('storage/icon/img.png')}}" alt="img" style="width: 350px"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         @else
            @foreach($banner as $key => $value)
               <div class="carousel-item @if($key == 0) active @endif">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              {{-- <h1>{ไม้ดอกเมืองหนาว} </h1><h3><strong class="color">โครงการไม้ดอกเมืองหนาวอันเนื่องมาจากพระราชดำริ</strong></h3><h3><strong> อำเภอเบตง จังหวัดยะลา</strong></h3> --}}
                              <h1>{{ $value->ban_title_th ?? 'หัวข้อแบนเนอร์'}} </h1>
                              <div class="col-sm-10">
                                 <h3><strong class="color">{{ $value->ban_detail_th ?? 'รายละเอียดแบนเนอร์'}}</strong></h3>
                              </div>
                              <a class="btn btn-lg btn-primary" href="#" role="button">เกี่ยวกับ</a>
                              <a class="btn btn-lg btn-primary" href="#contact" role="button">ติดต่อเรา</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="{{ $value->file ?? asset('storage/icon/img.png')}}" alt="img" style="width: 450px"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
         @endif
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
                  <figure><img src="{{ $value->file ?? asset('storage/icon/img.png')}}" alt="img" style="height: 160px"/></figure>
                  @php $value->F_NAME = __substr($value->F_NAME,'12') @endphp
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
            @foreach($news as $key => $value)
               @if($key == 0)
                  <div class="col-md-6">
                     <div class="card1" style="width: 100%">
                        <div style="cursor: pointer;"  onclick="window.location='{{ route('admin.news.detail',$value->id) }}'">
                           <img src="{{$value->file ?? asset('storage/icon/img.png')}}" alt="Avatar" style="width:100%">
                           <div class="container" style="background-color: #fff">
                              @php $data = __substr($value->n_title,'50') @endphp
                              <h4><b>{{ $data }}</b></h4> 
                              @php $data = __substr($value->n_details,'200') @endphp
                              <p>{{ $data }}</p> 
                           </div>
                        </div>
                     </div>
                  </div>
               @endif
            @endforeach
            <div class="col-md-6">
               <div class="row">
                  @foreach($news as $key => $value)
                     @if($key >= 1 && $key <= 3)
                        <div class="col-sm-12">
                           <div class="blog-card" style="cursor: pointer;"  onclick="window.location='{{ route('admin.news.detail',$value->id) }}'">
                              <div class="meta">
                              <div class="photo" style="background-image: url({{$value->file ?? asset('storage/icon/img.png')}})"></div>
                              <ul class="details">
                                 @php $data = __substr($value->n_title,'20') @endphp
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
                                 @php $data = __substr($value->n_title,'20') @endphp
                                 <h1>{{ $data }}</h1>
                                 @php $data = __substr($value->n_details,'100') @endphp
                                 <p>{{ $data }}</p> 
                              </div>
                           </div>
                        </div>
                     @endif
                  @endforeach
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
