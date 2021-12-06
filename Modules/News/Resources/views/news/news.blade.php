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
                    <h2>ข่าวกิจกรรม</h2>
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
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="plants-box" style="cursor: pointer;" onclick="window.location='{{ route('admin.news.detail',$value->id) }}'">
                            <figure><img src="{{ $value->file ?? null}}" alt="img" style="height: 150px"></figure>
                            <p style="font-size: 15px">
                                @php $value->n_title = __substr($value->n_title,'55') @endphp
                                <b> {{ $value->n_title ?? null}}</b>
                                <br>
                                {{-- @php $value->n_details = __substr($value->n_details,'65') @endphp
                                {{ $value->n_details }} --}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


 
@endsection
