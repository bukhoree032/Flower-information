@extends('layouts.master')

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
                @foreach($result as $key => $value)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" onclick="window.location='{{ route('home.flower.detail',$value->id) }}'">
                        <div class="plants-box">
                            <figure><img src="{{ $value->file }}" alt="img" style="height: 150px"></figure>
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
