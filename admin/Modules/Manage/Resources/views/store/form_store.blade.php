{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- @dd($result['result']) --}}
    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">แบบสอบถามร้านค้า</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{ route('manage.insert.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT') }} --}}
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12"><b>ข้อมูลเจ้าของร้าน</b></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>ชื่อร้าน:</b></label>
                                <input type="text" class="form-control" name="S_NAME"/>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>คำนำหน้า:</b></label>
                                <select class="form-control" id="exampleSelect1" name="S_OWNER_PREFIX">
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>ชื่อ-นามสกุลเจ้าของร้าน:</b></label>
                                <input type="text" class="form-control" name="S_OWNER_NAME" />
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>เบอร์ติดต่อ:</b></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" name="S_PHONE"/>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>ที่อยู่เลขที่:</b></label>
                                <input type="text" class="form-control" name="S_NUMBER" />
                            </div>
                            <div class="col-lg-2">
                                <label style="margin-top: 10px"><b>หมู่:</b></label>
                                <input type="text" class="form-control"  name="S_VILLAGE"/>
                            </div>
                            {{-- @dd($resultDistricts['result']) --}}
                            <div class="col-lg-6">
                                <label style="margin-top: 10px"><b>ตำบล/อำเภอ/จังหวัด:</b></label>
                                <span class="text-danger">*</span></label>
                                <select id="pro" class="js-example-basic-multiple" name="S_SUB_DISTRICT" style="width: 100%;" required>
                                    <option selected>-- จังหวัด --</option>
                                    @foreach ($resultDistricts['result'] as $item => $value)
                                        <option value="{{ $value->id_districts }}">ตำบล{{ $value->name_districts }} อำเภอ{{ $value->name_amphures }} จังหวัด{{ $value->name_provinces }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>อำเภอ:</b></label>
                                <span class="text-danger">*</span></label>
                                <select class="form-control" id="dis" name="S_DISTRICT">
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>ตำบล:</b></label>
                                <span class="text-danger">*</span></label>
                                <select class="form-control" id="exampleSelect1" name="S_PROVINCE">
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                            </div> --}}
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>lat:</b></label>
                                <input type="text" class="form-control"  name="S_LAT"/>
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>long:</b></label>
                                <input type="text" class="form-control"  name="S_LONG"/>
                            </div>
                        </div>
                        <!-- Select2 CSS -->
                        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
                        {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <div class="form-group row">
                            <div class="col-lg-12"><b>ข้อมูลการขายดอกไม้</b></div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>ดอกไม้ที่ขาย:</b></label><br>
                                <select id="single_f" class="js-example-basic-multiple" name="S_FLOWER[]" style="width: 100%;margin-top: 5px" multiple="multiple">
                                    @foreach ($result['result'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->F_NAME }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 form-main-f" >
                                <label style="margin-top: 10px"><b>ดอกไม้ที่ขาย อื่น ๆ:</b></label>
                                <div id="boxes">
                                    <input id="file1" type="text" class="form-control" name="S_FLOWER_OTHER[]" style="margin-top: 5px"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>.</label><br>
                                <a class="btn btn-primary add-more-btn btn-sm" id="addbutton">+</a>
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>กลุ่มลูกค้า:</b></label>
                                <select id="single_c" class="js-example-basic-multiple" name="S_CUSTOMER_GROUP[]"  style="width: 100%" multiple="multiple">
                                    <option>ลูกค้ารายย่อย</option>
                                    <option>บุคคลทั่วไป</option>
                                    <option>โรงแรม</option>
                                    <option>สถาบันการศึกษา</option>
                                    <option>ร้านอาหาร</option>
                                    <option>บริษัท/ห้างร้าน</option>
                                    <option>หน่วยงานราชการ</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label style="margin-top: 10px"><b>กลุ่มลูกค้า อื่น ๆ:</b></label>
                                <div id="boxesg">
                                    <input type="text" class="form-control" name="S_CUSTOMER_GROUP_OTHER[]" style="margin-top: 5px"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>.</label><br>
                                <a class="btn btn-primary add-more-btn btn-sm" id="addbuttong">+</a>
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
                                                    @foreach ($resultProvinces['result'] as $item => $value)
                                                        <option value="{{ $value->id }}">{{ $value->name_th }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <select id="single_da" class="js-example-basic-multiple" name="S_SOURCE[1][DISTRICT]" style="width: 100%;" >
                                                    <option>-- อำเภอ --</option>
                                                    @foreach ($resultAmphures['result'] as $item => $value)
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
                                        <label class="radio">
                                        <input type="radio" value="1" name="S_LOCATION_AFFECT_SALE">
                                        <span></span>ไม่มี</label>
                                        <label class="radio">
                                        <input type="radio" value="2" name="S_LOCATION_AFFECT_SALE">
                                        <span></span>มีน้อย</label>
                                        <label class="radio">
                                        <input type="radio" value="3" name="S_LOCATION_AFFECT_SALE">
                                        <span></span>มีปานกลาง</label>
                                        <label class="radio">
                                        <input type="radio" value="4" name="S_LOCATION_AFFECT_SALE">
                                        <span></span>มีมาก</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ภาวการณ์แข่งขันในปัจจุบัน:</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_COMPETE">
                                    <span></span>ไม่มี</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_COMPETE">
                                    <span></span>มีน้อย</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_COMPETE">
                                    <span></span>มีปานกลาง</label>
                                    <label class="radio">
                                    <input type="radio" value="4" name="S_COMPETE">
                                    <span></span>มีมาก</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="radio-list">
                                    <label style="margin-top: 10px"><b>รูปแบบการส่ง:</b></label>
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_SEND">
                                    <span></span>รถยนต์</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_SEND">
                                    <span></span>รถไฟ</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxess">
                                                <input type="text" class="form-control" name="S_SEND_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            {{-- <label>.</label><br> --}}
                                            <a class="btn btn-primary add-more-btn btn-sm" id="addbuttons" style="margin-top: 5px">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8"></div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>รูปแบบการขาย:</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_SELL">
                                    <span></span>ขายหน้าร้านโดยตรง</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_SELL">
                                    <span></span>ลูกค้าโทรศัพท์สั่งซื้อ</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_SELL">
                                    <span></span>ขายออนไลน์ เพจร้าน</label>
                                    <label class="radio">
                                    <input type="radio" value="4" name="S_SELL">
                                    <span></span>ทั้ง 3 วิธี</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>เงื่อนไขในการขายดอกไม้:</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_CONDITION_SELL">
                                    <span></span>ขายเงินสด</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_CONDITION_SELL">
                                    <span></span>ขายเงินเชื่อ</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_CONDITION_SELL">
                                    <span></span>ทั้งขายเงินสดและขายเงินเชื่อ</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxesc">
                                                <input type="text" class="form-control" name="S_CONDITION_SELL_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            {{-- <label>.</label><br> --}}
                                            <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonc" style="margin-top: 5px">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>วิธีการจ่ายเงินของลูกค้า:</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_CUSTOMER_PAYS">
                                    <span></span>ขายเงินสด</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_CUSTOMER_PAYS">
                                    <span></span>ขายเงินเชื่อ</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_CUSTOMER_PAYS">
                                    <span></span>ทั้งขายเงินสดและขายเงินเชื่อ</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxesp">
                                                <input type="text" class="form-control" name="S_CUSTOMER_PAYS_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            {{-- <label>.</label><br> --}}
                                            <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonp" style="margin-top: 5px">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>การส่งเสริมการขาย(โปรโมชัน):</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_PROMOTION">
                                    <span></span>ไม่มี</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_PROMOTION">
                                    <span></span>มีการให้ส่วนลด</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_PROMOTION">
                                    <span></span>มีการแถม</label>
                                    <label class="radio">
                                    <input type="radio" value="4" name="S_PROMOTION">
                                    <span></span>Social Media</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxespr">
                                                <input type="text" class="form-control" name="S_PROMOTION_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonpr" style="margin-top: 5px">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <label style="margin-top: 10px"><b>จำนวนแรงงานที่ใช้ในร้าน:</b></label>
                                <div class="radio-list">
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_LABOR">
                                    <span></span>1-3 คน</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_LABOR">
                                    <span></span>4-6 คน</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_LABOR">
                                    <span></span>7 คนขึ้นไป</label>
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
@endsection
