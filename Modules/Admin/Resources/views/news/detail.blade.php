@extends('layouts.master')

@section('content')
<section style="background-color: #faeaea">
    <!-- plant -->
    <div id="plant" class="plants" style="margin-top: 170px">
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage">
                    <h2>ข่าวกิจกรรม</h2>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="plants-box">
                        <div class="container">
                            <h3>{{ $result->n_title ?? null }}</h3>
                            <br><br>
                            <center><figure><img src="{{ $result->file ?? null }}" alt="img" style="width : 40%"></figure></center>
                            <br><br>
                            <p>{{ $result->n_details ?? null }} </p>
                            <div class="row">
                                @if($result->file_multiple != '')
                                    @foreach($result->file_multiple as $key => $value)
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <img src="{{ $value }}"  style="width : 100%">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
@endsection
