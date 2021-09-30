@extends('layouts.master')

@section('content')

<section class="" style="background-color: #f1f1f1">
    <div class = "card-wrapper margin-card">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase" style="width: 50%;">
                <img src = "{{ $result->file ?? asset('storage/icon/img.png')}}" >
                @if($result->file_multiple != '')
                    @foreach($result->file_multiple as $key => $value)
                        @if($key < '5')
                            <img src = "{{ $value }}"  >
                        @endif
                    @endforeach
                @else
                    @for($i = 0; $i < 3; $i++)
                        <div class = "img-item">
                            <a href = "#" data-id = "{{ asset('storage/icon/img.png') }}">
                            <img src = "{{ asset('storage/icon/img.png') }}" >
                            </a>
                        </div>
                    @endfor
                @endif
              </div>
            </div>
            <div class = "img-select">
                <div class = "img-item">
                    <a href = "#" data-id = "1">
                        <img src = "{{ $result->file ?? asset('storage/icon/img.png')}}" >
                    </a>
                </div>
                @if($result->file_multiple != '')
                    @foreach($result->file_multiple as $key => $value)
                        @if($key < '4')
                            <div class = "img-item">
                                <a href = "#" data-id = "{{$key+2}}">
                                <img src = "{{ $value }}" >
                                </a>
                            </div>
                        @endif
                    @endforeach
                @else
                    @for($i = 0; $i < 3; $i++)
                        <div class = "img-item">
                            <a href = "#" data-id = "{{ asset('storage/icon/img.png') }}">
                            <img src = "{{ asset('storage/icon/img.png') }}" >
                            </a>
                        </div>
                    @endfor
                @endif
            </div>
          </div>
          <!-- card right -->
            <div class = "product-content">
                <h2 class = "product-title">{{ $result->F_NAME ?? 'ไม่มีข้อมูล'}}</h2>
                <div class = "product-detail">
                    <h3>ชื่อวิทยาศาสตร์: {{ $result->F_SCIENTIFIC_NAME ?? 'ไม่มีข้อมูล'}}</h3>

                    <h3>ชื่อสามัญ: {{ $result->F_COMMON_NAME ?? 'ไม่มีข้อมูล'}}</h3>
                    
                    <h3>ชื่ออื่น: {{ $result->F_OTHER_NAME ?? 'ไม่มีข้อมูล'}}</h3>
                    
                    <h3>ประเภทดอกไม้: {{ $result->F_TYPE ?? 'ไม่มีข้อมูล'}}</h3>
                    <h3>ลักษณะทางพฤกษศาสตร์: </h3>
                    <p><b>ต้น</b> {{ $result->F_NATURE_TRUNK ?? 'ไม่มีข้อมูล'}}</p>
                    <p><b>ใบ</b> {{ $result->F_NATURE_TRUNK ?? 'ไม่มีข้อมูล'}}</p>
                    <p><b>ดอก</b> {{ $result->F_NATURE_TRUNK ?? 'ไม่มีข้อมูล'}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f1f1f1">
    <br>
    <div class="container">
        <div style="background-color: #ffff; padding : 10px">
            <h3>ข้อมูลทั่วไป: </h3>
            <p><b>ลักษณะโดยรวม</b> {{ $result->F_OVERALL_APPEARANCE ?? 'ไม่มีข้อมูล'}}</p>
            <p><b>ข้อมูลทั่วไป</b> {{ $result->F_GENERAL_INFORMATION ?? 'ไม่มีข้อมูล'}}</p>
            
            <h3>การปลูกเลี้ยงและการใช้ประโยชน์ :</h3>
            
            <p><b>การปลูกเลี้ยง</b> {{ $result->F_PLANT ?? 'ไม่มีข้อมูล'}}</p>
    
            <p><b>การขยายพันธุ์</b> {{ $result->F_PROPAGATION ?? 'ไม่มีข้อมูล'}}</p>
    
            <p><b>การใช้ประโยชน์</b> {{ $result->F_UTILIZATION ?? 'ไม่มีข้อมูล'}}</p>
            <h4 class = "product-title">รูปภาพเพิ่มเติม:</h4>
             <!--Gallery -->
            <div id="gallery" class="Gallery">
            {{-- <div class="container-fluid margin-r-l"> --}}
                <div class="row">
                    @if($result->file_multiple != '')
                        @foreach($result->file_multiple as $key => $value)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
                                <div class="Gallery-box" style="width: 264px">
                                    <figure>
                                        <a href="{{ $value }}" class="fancybox" rel="ligthbox" style="width: 264px">
                                        <img  src="{{ $value }}" class="zoom img-fluid ">
                                        </a>
                                        <span class="hoverle">
                                        <a href="{{ $value }}" class="fancybox" rel="ligthbox">View</a>
                                        </span>  
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
                                <div class="Gallery-box" style="width: 264px">
                                    <figure>
                                        <a href="" class="fancybox" rel="ligthbox" style="width: 264px">
                                        <img  src="{{asset('storage/icon/img.png')}}" class="zoom img-fluid ">
                                        </a>
                                        <span class="hoverle">
                                        <a href="{{asset('storage/icon/img.png')}}" class="fancybox" rel="ligthbox">View</a>
                                        </span>  
                                    </figure>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
     <!-- end Gallery -->
        </div>
    </div>
    <br>
    <br>
</section>

<script>
      const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
  </script>
@endsection