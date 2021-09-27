@extends('layouts.master')

@section('content')
{{-- @dd($result) --}}
<section class="" style="background-color: #f1f1f1">
  <div class = "card-wrapper margin-card">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            @foreach ($result->file_multiple as $key => $value)
                <img src = "{{ $value }}" alt = "shoe image">
            @endforeach
          </div>
        </div>
        <div class = "img-select">
          @foreach ($result->file_multiple as $key => $value)
            @if ($key < 6)
              <div class = "img-item">
                <a href = "#" data-id = "{{$key + 1}}">
                  <img class="img_detale" src = "{{ $value }}" alt = "shoe image">
                </a>
              </div>     
            @endif
          @endforeach
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">{{ $result->S_NAME }}</h2>
        <div class = "product-detail">
          <h3>ที่อยู่ร้านเลขที่: {{ $result->S_NUMBER }} ม.{{ $result->S_VILLAGE }} ต.{{ $result->S_SUB_DISTRICT[0]->name_districts }} อ.{{ $result->S_SUB_DISTRICT[0]->name_amphures }} จ.{{ $result->S_SUB_DISTRICT[0]->name_provinces }}</h3>
                
          <h3>ข้อมูลร้าน: </h3>
          <p>{{ $result->S_DETAIL }}</p>

          <h3>ข้อมูลติดต่อ : </h3>
          <p>
              <b>เบอร์โทรศัพท์ : </b>  {{ $result->S_PHONE }} <br>
              <b>facebook : </b>  {{ $result->S_FACEBOOK }} <br>
              <b>line : </b>  {{ $result->S_LINE }} <br>
              <b>website : </b>  {{ $result->S_WEBSITE }} <br>
          </p>

          <h3>ดอกไม้ในร้าน: </h3>
          <p>
            @foreach ($FlowerStor as $key => $value)
              - {{ $FlowerStor[$key][0]->F_NAME }} <br>  
            @endforeach
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 20px">
    <div style="background-color: #ffff; padding : 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <h4 class="product-title">รูปภาพเพิ่มเติม:</h4>
      <div id="gallery" class="Gallery">
        <div class="row">
          @foreach ($result->file_multiple as $key => $value)
            <div class="col-xl-4 col-lg-3 col-md-3 col-sm-12 thumb">
              <div class="Gallery-box">
                  <figure>
                      <a href="@php echo $value @endphp" class="fancybox" rel="ligthbox">
                      <img  src="@php echo $value @endphp" class="zoom img-fluid"  alt="">
                      </a>
                      <span class="hoverle">
                      <a href="@php echo $value @endphp" class="fancybox" rel="ligthbox">View</a>
                      </span>  
                  </figure>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<section style="background-color: #f1f1f1"> 
<br><br>
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