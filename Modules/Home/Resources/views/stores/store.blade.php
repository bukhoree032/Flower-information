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
{{-- @dd($result) --}}
<section style="background-color: #faeaea">

    <div id="plant" class="plants" style="margin-top: 170px">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>ข้อมูลร้านค้า</h2>
                    {{-- <span>looking at its layout. The point of using Lorem Ipsumletters, as opposed to usingl</span> --}}
                        <!-- plant -->
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
                @foreach ($result as $key => $value)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.stores.detail',$value->id) }}'">
                    <div class="plants-box">
                        <figure><img src="{{ $value->file }}" alt="img" class="img_store"/></figure>
                        {{-- <p style="font-size: 20px" style="margin-top: 5px"><b>{{ $value->S_NAME }}</b></p> --}}
                        <p style="font-size: 17px" style="margin-top: 10px">
                            <b>{{ $value->S_NAME }}</b><br>
                            <b>ที่อยู่ :</b> ต.{{ $ProvinceJoin[$key][0]->name_districts }} อ.{{ $ProvinceJoin[$key][0]->name_amphures }} จ.{{ $ProvinceJoin[$key][0]->name_provinces }}
                            
                        </p>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
