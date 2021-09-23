@extends('layouts.master')

@section('content')

<section class="" style="background-color: #f1f1f1">
    <div class = "card-wrapper margin-card">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "http://127.0.0.1:8000/storage/flowers/pONkC_LQ6Iq.jpg" alt = "shoe image">
                <img src = "http://127.0.0.1:8000/storage/flowers/8tQwn_gtqEL.jpg" alt = "shoe image">
                <img src = "http://127.0.0.1:8000/storage/flowers/HClvZ_ie6BT.jpg" alt = "shoe image">
                <img src = "http://127.0.0.1:8000/storage/flowers/vGjLO_Ls7g8.jpg" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = "http://127.0.0.1:8000/storage/flowers/pONkC_LQ6Iq.jpg" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = "http://127.0.0.1:8000/storage/flowers/8tQwn_gtqEL.jpg" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = "http://127.0.0.1:8000/storage/flowers/HClvZ_ie6BT.jpg" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = "http://127.0.0.1:8000/storage/flowers/vGjLO_Ls7g8.jpg" alt = "shoe image">
                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">ณัฐนันท์ดอกไม้สด</h2>
                <div class = "product-detail">
                    <h3>ที่อยู่ร้าน: ที่อยู่: ตลาดสด เทศบาล เมือง ยะลา อ เมือง ยะลา 95000 </h3>
                    
                <h3>ข้อมูลร้าน: </h3>
                <p>รับจัดดอกไม้สด ,แห้ง ในงานพิธีต่างๆทั้งในและนอกสถานที่ 0889595596, ,0809785356, 073-221-897 เทศบาลนครยะลา</p>

                <h3>ข้อมูลติดต่อ : </h3>
                <p>
                    <b>เบอร์โทรศัพท์ : </b>  0889595596 <br>
                    <b>facebook : </b>  ณัฐนันท์ดอกไม้สด <br>
                    <b>line : </b>  @lapatrada3911 <br>
                    <b>website : </b>  - <br>
                </p>

                <h3>ดอกไม้ในร้าน: </h3>
                <p>
                    - ดาวเรือง <br>
                    - เบญจมาศ <br>
                    - แกลดิโอลัส <br>
                </p>
                </div>
        
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f1f1f1">
    <div class="container">
        <div style="background-color: #ffff; padding : 10px">
    
            <h4 class = "product-title">รูปภาพเพิ่มเติม:</h4>
             <!--Gallery -->
            <div id="gallery" class="Gallery">
            {{-- <div class="container-fluid margin-r-l"> --}}
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-12 thumb">
                        <div class="Gallery-box">
                            <figure>
                                <a href="http://127.0.0.1:8000/storage/flowers/pONkC_LQ6Iq.jpg" class="fancybox" rel="ligthbox">
                                <img  src="http://127.0.0.1:8000/storage/flowers/pONkC_LQ6Iq.jpg" class="zoom img-fluid "  alt="">
                                </a>
                                <span class="hoverle">
                                <a href="http://127.0.0.1:8000/storage/flowers/pONkC_LQ6Iq.jpg" class="fancybox" rel="ligthbox">View</a>
                                </span>  
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-12 thumb">
                        <div class="Gallery-box">
                            <figure>
                                <a href="http://127.0.0.1:8000/storage/flowers/8tQwn_gtqEL.jpg" class="fancybox" rel="ligthbox">
                                <img  src="http://127.0.0.1:8000/storage/flowers/8tQwn_gtqEL.jpg" class="zoom img-fluid "  alt="">
                                </a>
                                <span class="hoverle">
                                <a href="http://127.0.0.1:8000/storage/flowers/8tQwn_gtqEL.jpg" class="fancybox" rel="ligthbox">View</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 thumb">
                        <div class="Gallery-box">
                            <figure>
                                <a href="http://127.0.0.1:8000/storage/flowers/HClvZ_ie6BT.jpg" class="fancybox" rel="ligthbox">
                                <img  src="http://127.0.0.1:8000/storage/flowers/HClvZ_ie6BT.jpg" class="zoom img-fluid "  alt="">
                                </a>
                                <span class="hoverle">
                                <a href="http://127.0.0.1:8000/storage/flowers/HClvZ_ie6BT.jpg" class="fancybox" rel="ligthbox">View</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-12 thumb">
                        <div class="Gallery-box">
                            <figure>
                                <a href="http://127.0.0.1:8000/storage/flowers/vGjLO_Ls7g8.jpg"" class="fancybox" rel="ligthbox">
                                <img  src="http://127.0.0.1:8000/storage/flowers/vGjLO_Ls7g8.jpg"" class="zoom img-fluid "  alt="">
                                </a>
                                <span class="hoverle">
                                <a href="http://127.0.0.1:8000/storage/flowers/vGjLO_Ls7g8.jpg"" class="fancybox" rel="ligthbox">View</a>
                                </span> 
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
     <!-- end Gallery -->
    
        </div>
    </div>
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