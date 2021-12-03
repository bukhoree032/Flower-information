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
                        <div class="plants-box" style="cursor: pointer;">
                            <figure><img src="{{ $value->file ?? asset('storage/app/public/icon/img.png')}}" alt="img" style="height: 150px"></figure>
                            <h3> {{ $value->F_NAME }}</h3>
                            @php $value->F_OVERALL_APPEARANCE = __substr($value->F_OVERALL_APPEARANCE,'65') @endphp
                            <p><b>ลักษณะ :</b> {{ $value->F_OVERALL_APPEARANCE }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


 
@endsection
