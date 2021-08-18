@extends('home::layouts.master')

@section('content')

<section class="" style="background-color: #f1f1f1">
    <div class = "card-wrapper margin-card">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "{{ asset('fonend/images/1.jpg') }}" alt = "shoe image">
                <img src = "{{ asset('fonend/images/2.jpg') }}" alt = "shoe image">
                <img src = "{{ asset('fonend/images/3.jpg') }}" alt = "shoe image">
                <img src = "{{ asset('fonend/images/4.jpg') }}" alt = "shoe image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = "{{ asset('fonend/images/1.jpg') }}" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = "{{ asset('fonend/images/2.jpg') }}" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = "{{ asset('fonend/images/3.jpg') }}" alt = "shoe image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = "{{ asset('fonend/images/4.jpg') }}" alt = "shoe image">
                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">ชื่อดอกไม้</h2>
                <div class = "product-detail">
                    <h3>ชื่อวิทยาศาสตร์: Rhynchospora nervosa (Vahl) Boeckeler </h3>

                    <h3>ชื่อสามัญ: Star grass </h3>
                    
                    <h3>ชื่ออื่น: – </h3>
                    
                    <h3>วงศ์: CYPERACEAE </h3>
                <h3>ลักษณะทางพฤกษศาสตร์: </h3>
                <p><b>ต้น</b> ไม้น้ำ อายุหลายปี สูง 30-50 เซนติเมตร มีเหง้าเล็กๆ ใต้ดิน ลำต้นเหนือดินเป็นเหลี่ยมที่เกิดจากกาบใบซ้อนกันแน่น แตกเป็นกอ</p>
                <p><b>ใบ</b> ใบเดี่ยว เรียงสลับ รูปใบหอกแคบ กว้าง 2-3 เซนติเมตร ยาว 20-25 เซนติเมตร ปลายเรียวแหลม โคนตัด ขอบเรียบ แผ่นใบสีเขียว</p>
                <p><b>ดอก</b> ดอกเป็นช่อแบบช่อกระจุก ออกตามปลายยอด ดอกย่อยขนาดเล็ก ดอกสีขาว มีกาบรองช่อดอกเรียวแหลมสีขาวปลายสีเขียว ออกดอกตลอดปี</p>

                <h3>ข้อมูลทั่วไป: </h3>
                <p><b>ต้น</b> ไม้น้ำ อายุหลายปี สูง 30-50 เซนติเมตร มีเหง้าเล็กๆ ใต้ดิน ลำต้นเหนือดินเป็นเหลี่ยมที่เกิดจากกาบใบซ้อนกันแน่น แตกเป็นกอ</p>
                <p><b>ใบ</b> ใบเดี่ยว เรียงสลับ รูปใบหอกแคบ กว้าง 2-3 เซนติเมตร ยาว 20-25 เซนติเมตร ปลายเรียวแหลม โคนตัด ขอบเรียบ แผ่นใบสีเขียว</p>
                <p><b>ดอก</b> ดอกเป็นช่อแบบช่อกระจุก ออกตามปลายยอด ดอกย่อยขนาดเล็ก ดอกสีขาว มีกาบรองช่อดอกเรียวแหลมสีขาวปลายสีเขียว ออกดอกตลอดปี</p>
                </div>
        
            </div>
        </div>
    </div>
</section>
<section style="background-color: #f1f1f1">
    <div class="container">
        <div style="background-color: #ffff; padding : 10px">
            <h3>การปลูกเลี้ยงและการใช้ประโยชน์</h3>
    
            <h3>การปลูกเลี้ยง</h3>
            <p>ดินร่วนและดินเหนียว ปลูกในระดับน้ำ 10-15 เซนติเมตร ชอบแสงแดดปานกลางถึงแดดจัด </p>
    
            <h3>การขยายพันธุ์</h3>
            <p>แยกกอ</p>
    
            <h3>การใช้ประโยชน์</h3>
            <p>ปลูกประดับสวนน้ำ ริมบ่อน้ำ น้ำตก หรือปลูกในกระถาง</p>
    
            <h4 class = "product-title">รูปภาพเพิ่มเติม:</h4>
             <!--Gallery -->
            <div id="gallery" class="Gallery">
            {{-- <div class="container-fluid margin-r-l"> --}}
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