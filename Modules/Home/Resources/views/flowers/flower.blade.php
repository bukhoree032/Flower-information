@extends('home::layouts.master')

@section('content')

<section style="background-color: #faeaea">
    <!-- plant -->
    <div id="plant" class="plants" style="margin-top: 170px">
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.flower.detail') }}'">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant1.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ...</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant1.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                    <h3> ชื่อดอกไม้</h3>
                    <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                    <h3> ชื่อดอกไม้</h3>
                    <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.flower.detail') }}'">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant1.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ...</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant1.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                        <h3> ชื่อดอกไม้</h3>
                        <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by  </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="{{ asset('fonend/images/plant2.jpg') }}" alt="img"/></figure>
                    <h3> ชื่อดอกไม้</h3>
                    <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                    <figure><img src="{{ asset('fonend/images/plant3.jpg') }}" alt="img"/></figure>
                    <h3> ชื่อดอกไม้</h3>
                    <p><b>ลักษณะ :</b> It is a long established fact that a reader will be distracted by ฃ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
@endsection
