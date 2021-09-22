{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<style>
    #img-preview {
    display: none;
    width: 100%;
    border: 2px dashed #333;  
    margin-bottom: 20px;
  }
  #img-preview img {
    width: 100%;
    height: auto;
    display: block;
  }
  [type="file"] {
    height: 0;  
    width: 0;
    overflow: hidden;
  }
  [type="file"] + label {
    width: 100%;
    font-family: sans-serif;
    background: #f44336;
    padding: 10px 30px;
    border: 2px solid #f44336;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s;
  }
  [type="file"] + label:hover {
    background-color: #fff;
    color: #f44336;
  }
  
  /* -------------------------------------*/
  body {padding: 15px;}
  p {position:fixed; bottom:0; font-family: monospace; font-weight: bold; font-size:12px;}
  p a {color:#000;}
  
</style>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">แก้ไขข้อมูลร้านค้า</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                {{-- @dd($result) --}}
                <!--begin::Form-->
                <form action="{{ route('manage.insert.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT') }} --}}
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12"><b>ข้อมูลเจ้าของร้าน</b></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>ชื่อร้าน:</b></label>
                                <input type="text" class="form-control" name="S_NAME" value="{{$result->S_NAME}}">
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>คำนำหน้า:</b></label>
                                <select class="form-control" id="exampleSelect1" name="S_OWNER_PREFIX">
                                    <option value="{{$result->S_OWNER_PREFIX}}">{{$result->S_OWNER_PREFIX}}</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>ชื่อ-นามสกุลเจ้าของร้าน:</b></label>
                                <input type="text" class="form-control" name="S_OWNER_NAME" value="{{$result->S_OWNER_NAME}}">
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>เบอร์ติดต่อ:</b></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="" name="S_PHONE" value="{{$result->S_PHONE}}">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>ที่อยู่เลขที่:</b></label>
                                <input type="text" class="form-control" name="S_NUMBER" value="" value="{{$result->S_NUMBER}}">
                            </div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>หมู่:</b></label>
                                <input type="text" class="form-control"  name="S_VILLAGE" value="{{$result->S_VILLAGE}}">
                            </div>
                            <div class="col-lg-8">
                                <label style="margin-top: 10px"><b>ตำบล/อำเภอ/จังหวัด:</b></label>
                                <span class="text-danger">*</span></label>
                                <select id="pro" class="js-example-basic-multiple" name="S_SUB_DISTRICT" style="width: 100%;" required>
                                    <option value="" selected>-- จังหวัด --</option>
                                    @foreach ($resultDistricts as $item => $value)
                                        <option value="{{ $value->id_districts }}" @if($result->S_SUB_DISTRICT == $value->id_districts) selected @endif>ตำบล{{ $value->name_districts }}  >>  อำเภอ{{ $value->name_amphures }}  >>  จังหวัด{{ $value->name_provinces }}  >> {{ $value->zip_code_districts }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>lat:</b></label>
                                <input type="text" class="form-control"  name="S_LAT" value="{{$result->S_LAT}}">
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>long:</b></label>
                                <input type="text" class="form-control"  name="S_LONG" value="{{$result->S_LONG}}">
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-3">
                                        รูปเดิม
                                        <img src="{{$result->file}}" alt="" style="width: 100%">
                                        {{-- <button type="button" class="btn btn-danger btn-sm btn-block" >ลบรูป</button> --}}
                                        <input type="file" id="choose-file" name="choose-file" accept="image/*" />
                                        <label for="choose-file">เลือกไฟล์ใหม่</label>
                                    </div>
                                    <div class="col-lg-4">
                                         
                                      <div>
                                        <div id="img-preview"></div>
                                        
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="row">
                                    @foreach ($result->file_multiple as $key => $value)
                                      <div class="col-lg-3" id="{{$key}}">
                                          <img src="{{$value}}" alt="" style="width: 100%; margin-top: 5px">
                                          <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction({{$key}})">ลบรูป</button>
                                      </div>
                                    @endforeach
                                  </div>
                                <div class="field" align="left">
                                    <input type="file" style="display:none" id="upload-images" name="file_multiples[]" multiple="multiple"></input>
                                    <label for="choose-file" id="uploads" class="drop-areas">
                                        เพิ่มรูปภาพดอกไม้ทั้งหมด +
                                    </label>
                                    <div id="thumbnails"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Select2 CSS -->
                        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
                        {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <div class="form-group row">
                            <div class="col-lg-12"><b>ข้อมูลการขายดอกไม้</b></div>
                            <div class="col-lg-6">
                                <label style="margin-top: 10px"><b>ดอกไม้ที่ขาย:</b></label><br>
                                <select id="single_f" class="js-example-basic-multiple" name="S_FLOWER[]" style="width: 100%;margin-top: 5px" multiple="multiple" required>
                                    @foreach ($flowers as $item)
                                        @foreach ($result->S_FLOWER as $value)
                                            <option value="{{ $item->id }}" @if($value == $item->id) selected @endif>{{ $item->F_NAME }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label style="margin-top: 10px"><b>กลุ่มลูกค้า:</b></label>
                                <select id="single_c" class="js-example-basic-multiple" name="S_CUSTOMER_GROUP[]"  style="width: 100%" multiple="multiple">
                                    @php $data = __S_CUSTOMER_GROUP()  @endphp
                                    @foreach ($data as $item)
                                        @foreach ($result->S_CUSTOMER_GROUP as $value)
                                            <option value="{{$item}}" @if($value == $item) selected @endif>{{$item}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label style="margin-top: 10px"><b>แหล่งที่มาของดอกไม้:</b></label>
                                <div class="checkbox-list">
                                    <div class="radio-list">
                                        <label class="checkbox">
                                            <input type="checkbox" disabled="disabled" checked="checked" >
                                            <span></span>จังหวัด/อำเภอ
                                        </label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <select id="single_pa" class="js-example-basic-multiple" name="S_SOURCE[1][PROVINCE]" style="width: 100%;" >
                                                    <option>-- จังหวัด --</option>
                                                    @foreach ($resultProvinces as $item => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name_th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select id="single_da" class="js-example-basic-multiple" name="S_SOURCE[1][DISTRICT]" style="width: 100%;" >
                                                    <option>-- อำเภอ --</option>
                                                    @foreach ($resultAmphures as $item => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name_th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <label class="checkbox">
                                            <input type="checkbox" name="S_SOURCE[2]" value="ปากคลองตลาด">
                                            <span></span>ปากคลองตลาด
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="S_SOURCE[3]" value="มาเลเซีย">
                                            <span></span>มาเลเซีย
                                        </label>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div id="boxesse">
                                                    <input type="text" class="form-control" name="S_SOURCE[4]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-2">
                                                <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonse" style="margin-top: 5px">+</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ทำเลที่ตั้งร้านมีผลต่อยอดขายหรือไม่:</b></label>
                                <div class="checkbox-list">
                                    <div class="radio-list">
                                        @php $data = __S_LOCATION_AFFECT_SALE()  @endphp
                                        @foreach ($data as $item)
                                            <label class="radio">
                                                <input type="radio" value="{{$item}}" name="S_LOCATION_AFFECT_SALE"  @if($result->S_LOCATION_AFFECT_SALE == $item) checked @endif>
                                                <span></span>{{$item}}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ภาวการณ์แข่งขันในปัจจุบัน:</b></label>
                                <div class="radio-list">
                                    @php $data = __S_COMPETE()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_COMPETE"  @if($result->S_COMPETE == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="radio-list">
                                    <label style="margin-top: 10px"><b>รูปแบบการส่ง:</b></label>
                                    @php $data = __S_SEND()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_SEND"  @if($result->S_SEND == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxess">
                                                @foreach ($result->S_SEND_OTHER as $key =>$value)
                                                    <input type="text" class="form-control" name="S_SEND_OTHER[{{ $key }}]" style="margin-top: 5px" placeholder="อื่น ๆ" value="{{$value}}">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8"></div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>รูปแบบการขาย:</b></label>
                                <div class="radio-list">
                                    @php $data = __S_SELL()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_SELL"  @if($result->S_SELL == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>เงื่อนไขในการขายดอกไม้:</b></label>
                                <div class="radio-list">
                                    @php $data = __S_CONDITION_SELL()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_CONDITION_SELL"  @if($result->S_CONDITION_SELL == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxesc">
                                                @foreach ($result->S_CONDITION_SELL_OTHER as $key =>$value)
                                                    <input type="text" class="form-control" name="S_CONDITION_SELL_OTHER[{{ $key }}]" style="margin-top: 5px" placeholder="อื่น ๆ" value="{{$value}}">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>วิธีการจ่ายเงินของลูกค้า:</b></label>
                                <div class="radio-list">
                                    @php $data = __S_CUSTOMER_PAYS()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_CUSTOMER_PAYS"  @if($result->S_CUSTOMER_PAYS == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxesp">
                                                @foreach ($result->S_CUSTOMER_PAYS_OTHER as $key =>$value)
                                                    <input type="text" class="form-control" name="S_CUSTOMER_PAYS_OTHER[{{ $key }}]" style="margin-top: 5px" placeholder="อื่น ๆ" value="{{$value}}">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>การส่งเสริมการขาย(โปรโมชัน):</b></label>
                                <div class="radio-list">
                                    @php $data = __S_PROMOTION()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_PROMOTION"  @if($result->S_PROMOTION == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxespr">
                                                @foreach ($result->S_PROMOTION_OTHER as $key =>$value)
                                                    <input type="text" class="form-control" name="S_PROMOTION_OTHER[{{ $key }}]" style="margin-top: 5px" placeholder="อื่น ๆ" value="{{$value}}">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>จำนวนแรงงานที่ใช้ในร้าน:</b></label>
                                <div class="radio-list">
                                    @php $data = __S_LABOR()  @endphp
                                    @foreach ($data as $item)
                                        <label class="radio">
                                            <input type="radio" value="{{$item}}" name="S_LABOR"  @if($result->S_LABOR == $item) checked @endif>
                                            <span></span>{{$item}}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                        </div>
                       
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <button class="btn btn-primary mr-2">บันทึก</button>
                                <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->      
        </div>
    </div>
    
@endsection

{{-- Scripts Section --}}
@section('scripts')

<script>
    function myFunction(data) {
    document.getElementById(data).style.display = "none";
}
</script>
<script>
    const chooseFile = document.getElementById("choose-file");
    const imgPreview = document.getElementById("img-preview");

    chooseFile.addEventListener("change", function () {
    getImgData();
    });

    function getImgData() {
        const files = chooseFile.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function () {
            imgPreview.style.display = "block";
            imgPreview.innerHTML = 'รูปใหม่<img src="' + this.result + '" />';
            });    
        }
    }
</script>
<script>
    let addbutton = document.getElementById("addbutton");
    addbutton.addEventListener("click", function() {
    let boxes = document.getElementById("boxes");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttong = document.getElementById("addbuttong");
    addbuttong.addEventListener("click", function() {
    let boxes = document.getElementById("boxesg");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonse = document.getElementById("addbuttonse");
    addbuttonse.addEventListener("click", function() {
    let boxes = document.getElementById("boxesse");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttons = document.getElementById("addbuttons");
    addbuttons.addEventListener("click", function() {
    let boxes = document.getElementById("boxess");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonc = document.getElementById("addbuttonc");
    addbuttonc.addEventListener("click", function() {
    let boxes = document.getElementById("boxesc");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonp = document.getElementById("addbuttonp");
    addbuttonp.addEventListener("click", function() {
    let boxes = document.getElementById("boxesp");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });

    let addbuttonpr = document.getElementById("addbuttonpr");
    addbuttonpr.addEventListener("click", function() {
    let boxes = document.getElementById("boxespr");
    let clone = boxes.firstElementChild.cloneNode(true);
    boxes.appendChild(clone);
    });
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

    {{-- <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/datatable/sc_datatable.js') }}" type="text/javascript"></script> --}}
    
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/crud/datatables/data-sources/html.js') }}" type="text/javascript"></script>
    <!--end::Page Scripts-->
    {{-- <script src="{{ asset('js/pages/crud/forms/widgets/select.js') }}" type="text/javascript"></script> --}}
    
    <!-- upload file -->
    <script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
    <!-- upload file -->
@endsection
