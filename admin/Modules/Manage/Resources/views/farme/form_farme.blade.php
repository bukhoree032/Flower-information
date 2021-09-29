{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

{{-- Dashboard 1 --}}
<div class="row">
    <div class="col-lg-6 col-xxl-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">เพิ่มข้อมูลดอกไม้กลุ่มเกษตรกร และฟาร์ม</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('manage.insert.farme') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>ชื่อกลุ่มเกษตรกร (สวนดอกไม้):</label>
                            <input type="text" class="form-control" name="FA_GROUPNAME" placeholder="ป้อนชื่อกลุ่มเกษตรกร" />
                            <span class="form-text text-muted">กรุณาป้อนชื่อกลุ่มเกษตรกร/สวนดอกไม้</span>
                        </div>
                        <div class="col-lg-4">
                            <label>ชื่อหัวหน้ากลุ่มเกษตรกร:</label>
                            <input type="text" class="form-control" name="FA_NAME" placeholder="ป้อนชื่อหัวหน้ากลุ่มเกษตรกร" />
                            <span class="form-text text-muted">กรุณาป้อนชื่อหัวหน้ากลุ่มเกษตรกร/ผู้ดูแล</span>
                        </div>
                        <div class="col-lg-4">
                            <label>บ้านเลขที่:</label>
                            <input type="text" class="form-control" name="FA_HOUSENUMBER" placeholder="ป้อนบ้านเลขที่" />
                            <span class="form-text text-muted">กรุณาป้อนบ้านเลขที่</span>
                        </div>
                        <div class="col-lg-4">
                            <label>หมู่:</label>
                            <input type="text" class="form-control" name="FA_MOO" placeholder="ป้อนหมู่" />
                            <span class="form-text text-muted">กรุณาป้อนหมู่ที่</span>
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-top: 10px"><b>ตำบล/อำเภอ/จังหวัด:</b></label>
                            <span class="text-danger">*</span></label>
                            <select id="pro" class="js-example-basic-multiple" name="FA_SUB_DISTRICT" style="width: 100%;" required>
                                <option selected>-- จังหวัด --</option>
                                @foreach ($resultDistricts as $item => $value)
                                    <option value="{{ $value->id_districts }}">ตำบล{{ $value->name_districts }}  >>  อำเภอ{{ $value->name_amphures }}  >>  จังหวัด{{ $value->name_provinces }}  >> {{ $value->zip_code_districts }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-lg-4">
                            <label>รหัสไปรษณีย์:</label>
                            <input type="text" class="form-control" name="FA_ZIPCODE" placeholder="ป้อนรหัสไปรษณีย์" />
                            <span class="form-text text-muted">กรุณาป้อนรหัสไปรษณีย์</span>
                        </div> --}}
                        <div class="col-lg-4">
                            <label>เบอร์ติดต่อ:</label>
                            <input type="text" class="form-control" name="FA_PHONE" placeholder="ป้อนเบอร์ติดต่อ" />
                            <span class="form-text text-muted">กรุณาป้อนเบอร์ติดต่อ</span>
                        </div>
                        <div class="col-lg-4">
                            <label>พิกัด (ละติจูด):</label>
                            <input type="text" class="form-control" name="FA_LAT" placeholder="ป้อนพิกัด (ละติจูด)" />
                            <span class="form-text text-muted">กรุณาป้อนพิกัด (ละติจูด)</span>
                        </div>
                        <div class="col-lg-4">
                            <label>พิกัด (ลองติจูด):</label>
                            <input type="text" class="form-control" name="FA_LONG" placeholder="พิกัด (ลองติจูด)" />
                            <span class="form-text text-muted">กรุณาพิกัด (ลองติจูด)</span>
                        </div>
                        <div class="col-lg-12" style="margin-top: 20px">
                            <div class="field" align="left">
                                <input type="file" style="display:none" id="upload-image" name="files"></input>
                                <div id="upload" class="drop-area">
                                    อัปโหลดรูปหน้าปก +
                                </div>
                                <div id="thumbnail"></div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-top: 20px">
                            <div class="field" align="left">
                                <input type="file" style="display:none" id="upload-images" name="file_multiples[]" multiple="multiple"></input>
                                <div id="uploads" class="drop-areas">
                                    เพิ่มรูปภาพดอกไม้ทั้งหมด +
                                </div>
                                <div id="thumbnails"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12"><b>ข้อมูลการขายดอกไม้</b></div>
                    <div class="col-lg-4">
                        <label style="margin-top: 10px"><b>ดอกไม้ที่ผลิต:</b></label><br>
                        <select id="single_f" class="js-example-basic-multiple" name="FA_FLOWER[]" style="width: 100%;margin-top: 5px" multiple="multiple" required>
                            @foreach ($result as $item)
                                <option value="{{ $item->id }}">{{ $item->F_NAME }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-4">
                        <label style="margin-top: 10px"><b>กลุ่มลูกค้า:</b></label>
                        <select id="single_c" class="js-example-basic-multiple" name="FA_CUSTOMER_GROUP[]"  style="width: 100%" multiple="multiple">
                            <option>ลูกค้ารายย่อย</option>
                            <option>บุคคลทั่วไป</option>
                            <option>โรงแรม</option>
                            <option>สถาบันการศึกษา</option>
                            <option>ร้านอาหาร</option>
                            <option>บริษัท/ห้างร้าน</option>
                            <option>หน่วยงานราชการ</option>
                        </select>
                    </div>
                    <div class="col-lg-5">
                        <div class="radio-list">
                            <label style="margin-top: 10px"><b>รูปแบบการส่ง:</b></label>
                            <label class="radio">
                            <input type="radio" value="รถยนต์" name="FA_SEND">
                            <span></span>รถยนต์</label>
                            <label class="radio">
                            <input type="radio" value="รถไฟ" name="FA_SEND">
                            <span></span>รถไฟ</label>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div id="boxess">
                                        <input type="text" class="form-control" name="FA_SEND_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    {{-- <label>.</label><br> --}}
                                    {{-- <a class="btn btn-primary add-more-btn btn-sm" id="addbuttons" style="margin-top: 5px">+</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8"></div>
                    <div class="col-lg-12">
                        <label style="margin-top: 10px"><b>รูปแบบการขาย:</b></label>
                        <div class="radio-list">
                            <label class="radio">
                            <input type="radio" value="ขายหน้าร้านโดยตรง" name="FA_SELL">
                            <span></span>ขายหน้าร้านโดยตรง</label>
                            <label class="radio">
                            <input type="radio" value="ลูกค้าโทรศัพท์สั่งซื้อ" name="FA_SELL">
                            <span></span>ลูกค้าโทรศัพท์สั่งซื้อ</label>
                            <label class="radio">
                            <input type="radio" value="ขายออนไลน์ เพจร้าน" name="FA_SELL">
                            <span></span>ขายออนไลน์ เพจร้าน</label>
                            <label class="radio">
                            <input type="radio" value="ทั้ง 3 วิธี" name="FA_SELL">
                            <span></span>ทั้ง 3 วิธี</label>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <label style="margin-top: 10px"><b>เงื่อนไขในการขายดอกไม้:</b></label>
                        <div class="radio-list">
                            <label class="radio">
                            <input type="radio" value="ขายเงินสด" name="FA_CONDITION_SELL">
                            <span></span>ขายเงินสด</label>
                            <label class="radio">
                            <input type="radio" value="ขายเงินเชื่อ" name="FA_CONDITION_SELL">
                            <span></span>ขายเงินเชื่อ</label>
                            <label class="radio">
                            <input type="radio" value="ทั้งขายเงินสดและขายเงินเชื่อ" name="FA_CONDITION_SELL">
                            <span></span>ทั้งขายเงินสดและขายเงินเชื่อ</label>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div id="boxesc">
                                        <input type="text" class="form-control" name="FA_CONDITION_SELL_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    {{-- <label>.</label><br> --}}
                                    {{-- <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonc" style="margin-top: 5px">+</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7"></div>
                    <div class="col-lg-5">
                        <label style="margin-top: 10px"><b>วิธีการจ่ายเงินของลูกค้า:</b></label>
                        <div class="radio-list">
                            <label class="radio">
                            <input type="radio" value="ขายเงินสด" name="FA_CUSTOMER_PAYS">
                            <span></span>ขายเงินสด</label>
                            <label class="radio">
                            <input type="radio" value="ขายเงินเชื่อ" name="FA_CUSTOMER_PAYS">
                            <span></span>ขายเงินเชื่อ</label>
                            <label class="radio">
                            <input type="radio" value="ทั้งขายเงินสดและขายเงินเชื่อ" name="FA_CUSTOMER_PAYS">
                            <span></span>ทั้งขายเงินสดและขายเงินเชื่อ</label>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div id="boxesp">
                                        <input type="text" class="form-control" name="FA_CUSTOMER_PAYFA_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    {{-- <label>.</label><br> --}}
                                    {{-- <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonp" style="margin-top: 5px">+</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7"></div>
                    <div class="col-lg-5">
                        <label style="margin-top: 10px"><b>การส่งเสริมการขาย(โปรโมชัน):</b></label>
                        <div class="radio-list">
                            <label class="radio">
                            <input type="radio" value="ไม่มี" name="FA_PROMOTION">
                            <span></span>ไม่มี</label>
                            <label class="radio">
                            <input type="radio" value="มีการให้ส่วนลด" name="FA_PROMOTION">
                            <span></span>มีการให้ส่วนลด</label>
                            <label class="radio">
                            <input type="radio" value="มีการแถม" name="FA_PROMOTION">
                            <span></span>มีการแถม</label>
                            <label class="radio">
                            <input type="radio" value="Social Media" name="FA_PROMOTION">
                            <span></span>Social Media</label>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div id="boxespr">
                                        <input type="text" class="form-control" name="FA_PROMOTION_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    {{-- <a class="btn btn-primary add-more-btn btn-sm" id="addbuttonpr" style="margin-top: 5px">+</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7"></div>
                    <div class="col-lg-5">
                        <label style="margin-top: 10px"><b>จำนวนแรงงานที่ใช้ในร้าน:</b></label>
                        <div class="radio-list">
                            <label class="radio">
                            <input type="radio" value="1-3 คน" name="FA_LABOR">
                            <span></span>1-3 คน</label>
                            <label class="radio">
                            <input type="radio" value="4-6 คน" name="FA_LABOR">
                            <span></span>4-6 คน</label>
                            <label class="radio">
                            <input type="radio" value="7 คนขึ้นไป" name="FA_LABOR">
                            <span></span>7 คนขึ้นไป</label>
                        </div>
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
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

{{-- Scripts Section --}}
@section('scripts')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

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
<!-- upload file -->
<script src="{{ asset('js/upload_file/upload_file.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/upload_file/upload_file_multiples.js') }}" type="text/javascript"></script>
<!-- upload file -->
@endsection