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
<section style="background-color: #faeaea">
    <!-- plant -->
    <div id="plant" class="plants" style="margin-top: 170px">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>ข้อมูลเกษตรกร</h2>
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
        <style>
            .img_store{
                width: 100%;
                height: 160px;
            }
        </style>
        <div class="container">
            <div class="row">
                @foreach($result as $key => $value)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.farmer.detail') }}'">
                        <div class="plants-box">
                            <figure><img src="{{ $value->file }}" alt="img" class="img_store"/></figure>
                            <h3> {{ $value->FA_GROUPNAME }}</h3>
                            <p><b>ที่อยู่ :</b> ต.{{$value->FA_SUB_DISTRICT[0]->name_districts}} อ.{{$value->FA_SUB_DISTRICT[0]->name_amphures}} จ.{{$value->FA_SUB_DISTRICT[0]->name_provinces}}</p>
                        </div>
                    </div>
                @endforeach
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://www.paiduaykan.com/travel/wp-content/uploads/2019/01/1-SON00796-800x533.jpg" alt="img" class="img_store"/></figure>
                        <h3> บ้านปิยะมิตร2</h3>
                        <p><b>ที่อยู่ :</b> ต.ตาเนาะแมเราะ อ.เบตง จ.ยะลา   </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="http://127.0.0.1:8000/storage/flowers/UJdrM_Xo83B.jpg" alt="img" class="img_store"/></figure>
                        <h3> กลุ่มขยายผลบ้านธารโต</h3>
                        <p><b>ที่อยู่ :</b> ต.ธารโต อ.ธารโต จ.ยะลา </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="plants-box">
                        <figure><img src="https://cbtthailand.dasta.or.th/upload-file-api/Resources/Community/Images/CM1095001/1.jpg" alt="img" class="img_store"/></figure>
                        <h3> จุฬาภรณ์พัฒนา 10</h3>
                        <p><b>ที่อยู่ :</b> ต.อัยเยอร์เวง อ.เบตง จ.ยะลา </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
@endsection
