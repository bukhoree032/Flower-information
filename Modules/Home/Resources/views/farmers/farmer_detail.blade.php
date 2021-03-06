@extends('layouts.master')

@section('content')

<section class="" style="background-color: #f1f1f1">
    <div class = "card-wrapper margin-card">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase" style="width: 50%;">
                <img src = "{{ $result->file ?? asset('storage/app/public/icon/img.png')}}" >
                @if($result->file_multiple != '')
                    @foreach($result->file_multiple as $key => $value)
                        @if($key < '5')
                            <img src = "{{ $value }}"  >
                        @endif
                    @endforeach
                @else
                    @for($i = 0; $i < 3; $i++)
                        <div class = "img-item">
                            <a href = "#" data-id = "{{ asset('storage/app/public/icon/img.png') }}">
                            <img src = "{{ asset('storage/app/public/icon/img.png') }}" >
                            </a>
                        </div>
                    @endfor
                @endif
              </div>
            </div>
            <div class = "img-select">
                <div class = "img-item">
                    <a href = "#" data-id = "1">
                        <img src = "{{ $result->file ?? asset('storage/app/public/icon/img.png')}}" >
                    </a>
                </div>
                @if($result->file_multiple != '')
                    @foreach($result->file_multiple as $key => $value)
                        @if($key < '4')
                            <div class = "img-item">
                                <a href = "#" data-id = "{{$key+2}}">
                                <img src = "{{ $value }}" >
                                </a>
                            </div>
                        @endif
                    @endforeach
                @else
                    @for($i = 0; $i < 3; $i++)
                        <div class = "img-item">
                            <a href = "#" data-id = "{{ asset('storage/app/public/icon/img.png') }}">
                            <img src = "{{ asset('storage/app/public/icon/img.png') }}" >
                            </a>
                        </div>
                    @endfor
                @endif
            </div>
          </div>
          <!-- card right -->
            <div class = "product-content">
                <h2 class = "product-title" style="font-size: 27px">{{ $result->FA_GROUPNAME ?? '?????????????????????????????????'}}</h2>
                <div class = "product-detail">
                    <h3>????????????????????????????????????: ???.{{ $DISTRICT[0]->name_districts ?? '?????????????????????????????????'}} ???.{{ $DISTRICT[0]->name_amphures ?? '?????????????????????????????????'}} ???.{{ $DISTRICT[0]->name_provinces ?? '?????????????????????????????????'}}</h3>
                    <p>
                        <h3>?????????????????????????????????: </h3>
                        {{ $result->FA_DETAIL ?? '?????????????????????????????????'}}
                    </p>

                    <h3>???????????????????????????????????????: </h3>
                    <p>
                        @if($result->FA_FLOWER != '')
                            @foreach($result->FA_FLOWER as $key => $value)
                                - {{ $value }}
                            @endforeach
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>
<section style="background-color: #f1f1f1">
    <div class="container">
        <div style="background-color: #ffff; padding : 10px">
    
            <h4 class = "product-title">?????????????????????????????????????????????:</h4>
             <!--Gallery -->
            <div id="gallery" class="Gallery">
            {{-- <div class="container-fluid margin-r-l"> --}}
                <div class="row">
                    @if($result->file_multiple != '')
                        @foreach($result->file_multiple as $key => $value)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
                                <div class="Gallery-box" style="width: 264px">
                                    <figure>
                                        <a href="{{ $value }}" class="fancybox" rel="ligthbox" style="width: 264px">
                                        <img  src="{{ $value }}" class="zoom img-fluid ">
                                        </a>
                                        <span class="hoverle">
                                        <a href="{{ $value }}" class="fancybox" rel="ligthbox">View</a>
                                        </span>  
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
                                <div class="Gallery-box" style="width: 264px">
                                    <figure>
                                        <a href="" class="fancybox" rel="ligthbox" style="width: 264px">
                                        <img  src="{{asset('storage/app/public/icon/img.png')}}" class="zoom img-fluid ">
                                        </a>
                                        <span class="hoverle">
                                        <a href="{{asset('storage/app/public/icon/img.png')}}" class="fancybox" rel="ligthbox">View</a>
                                        </span>  
                                    </figure>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
     <!-- end Gallery -->
    
        </div>
    </div>
    <br>
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