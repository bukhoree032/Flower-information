@extends('home::layouts.master')

@section('content')

<section style="background-color: #faeaea">
    <!-- plant -->
    <div id="plant" class="plants" style="margin-top: 170px">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>ข้อมูลเกษตรกร</h2>
                    <span>looking at its layout. The point of using Lorem Ipsumletters, as opposed to usingl</span>
                </div>
            </div>
        </div>
        </div>
        <style>
            .img_store{
                width: 100%;
                height: 160px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.farmer.detail') }}'">
                    <div class="plants-box">
                        <figure><img src="https://ออกแบบร้าน.com/wp-content/uploads/2019/12/024-5-1024x683.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ...</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://ออกแบบร้าน.com/wp-content/uploads/2019/12/024-5-1024x683.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                    <h3> ชื่อกลุ่ม</h3>
                    <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                    <h3> ชื่อกลุ่ม</h3>
                    <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.flower.detail') }}'">
                    <div class="plants-box">
                        <figure><img src="https://ออกแบบร้าน.com/wp-content/uploads/2019/12/024-5-1024x683.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ...</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://ออกแบบร้าน.com/wp-content/uploads/2019/12/024-5-1024x683.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                        <h3> ชื่อกลุ่ม</h3>
                        <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="https://pbs.twimg.com/media/EDcQxByUwAAE8SE.jpg" alt="img" class="img_store"/></figure>
                    <h3> ชื่อกลุ่ม</h3>
                    <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="https://iconsiam-aws-s3-prod.s3.ap-southeast-1.amazonaws.com/assets/JS2VVWW0UKLM0_02.jpg" alt="img" class="img_store"/></figure>
                    <h3> ชื่อกลุ่ม</h3>
                    <p><b>ที่อยู่ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
@endsection
