{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    
    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">แบบสอบถามร้านค้าส่วนที่ 2</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                {{-- @dd($result['id']) --}}
                <!--begin::Form-->
                <form action="{{ route('manage.insert.store2',$result['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('PUT') }} --}}
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-12"><b>ข้อมูลการขายดอกไม้</b></div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ปริมาณการขาย (ครั้ง/สัปดาห์/เดือน):</b></label>
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-hover table-checkable"  style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อดอกไม้</th>
                                            <th>ต่อครั้ง</th>
                                            <th>ต่อสัปดาห์</th>
                                            <th>ต่อเดือน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ดาวเรือง</td>
                                            <td>
                                                <input type="text" name="S_VOLUME[1][PER_TIME][QUANTITY]">
                                                <select name="S_VOLUME[1][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[1][PER_WEEK][QUANTITY]">
                                                <select name="S_VOLUME[1][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[1][PER_MONTH][QUANTITY]">
                                                <select name="S_VOLUME[1][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>เบญจมาศ</td>
                                            <td>
                                                <input type="text" name="S_VOLUME[2][PER_TIME][QUANTITY]">
                                                <select name="S_VOLUME[2][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[2][PER_WEEK][QUANTITY]">
                                                <select name="S_VOLUME[2][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[2][PER_MONTH][QUANTITY]">
                                                <select name="S_VOLUME[2][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>แกลดิโอสัส</td>
                                            <td>
                                                <input type="text" name="S_VOLUME[3][PER_TIME][QUANTITY]">
                                                <select name="S_VOLUME[3][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[3][PER_WEEK][QUANTITY]">
                                                <select name="S_VOLUME[3][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_VOLUME[3][PER_MONTH][QUANTITY]">
                                                <select name="S_VOLUME[3][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ปริมาณดอกไม้คงเหลือที่ใช้การไม่ได้ โดยเฉลี่ย (ครั้ง/สัปดาห์/เดือน):</b></label>
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-hover table-checkable"  style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อดอกไม้</th>
                                            <th>ต่อครั้ง</th>
                                            <th>ต่อสัปดาห์</th>
                                            <th>ต่อเดือน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ดาวเรือง</td>
                                            <td>
                                                <input type="text" name="S_REMAINING[1][PER_TIME][QUANTITY]">
                                                <select name="S_REMAINING[1][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[1][PER_WEEK][QUANTITY]">
                                                <select name="S_REMAINING[1][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[1][PER_MONTH][QUANTITY]">
                                                <select name="S_REMAINING[1][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>เบญจมาศ</td>
                                            <td>
                                                <input type="text" name="S_REMAINING[2][PER_TIME][QUANTITY]">
                                                <select name="S_REMAINING[2][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[2][PER_WEEK][QUANTITY]">
                                                <select name="S_REMAINING[2][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[2][PER_MONTH][QUANTITY]">
                                                <select name="S_REMAINING[2][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>แกลดิโอสัส</td>
                                            <td>
                                                <input type="text" name="S_REMAINING[3][PER_TIME][QUANTITY]">
                                                <select name="S_REMAINING[3][PER_TIME][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[3][PER_WEEK][QUANTITY]">
                                                <select name="S_REMAINING[3][PER_WEEK][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="S_REMAINING[3][PER_MONTH][QUANTITY]">
                                                <select name="S_REMAINING[3][PER_MONTH][UNIT]" id="cars">
                                                    <option value="">หน่วย</option>
                                                    <option value="ช่อ">ช่อ</option>
                                                    <option value="ดอก">ดอก</option>
                                                    <option value="กิโล">กิโล</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                            <div class="col-lg-4">
                                <div class="radio-list">
                                    <label style="margin-top: 10px"><b>สาเหตุที่ทำให้คงเหลือใช้การไม่ได้ คือ:</b></label>
                                    <label class="radio">
                                    <input type="radio" value="1" name="S_REMAINING_CAUSE">
                                    <span></span>จัดเก็บไม่ดี</label>
                                    <label class="radio">
                                    <input type="radio" value="2" name="S_REMAINING_CAUSE">
                                    <span></span>ขายปริมาณมากเกินไป</label>
                                    <label class="radio">
                                    <input type="radio" value="3" name="S_REMAINING_CAUSE">
                                    <span></span>คุณภาพดอกไม้ไม่ดี ขายไม่ได้</label>
                                    <label class="radio">
                                    <input type="radio" value="4" name="S_REMAINING_CAUSE">
                                    <span></span>การหีบห่อในการขนส่ง</label>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <div id="boxess">
                                                <input type="text" class="form-control" name="S_REMAINING_CAUSE_OTHER[]" style="margin-top: 5px" placeholder="อื่น ๆ"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            {{-- <label>.</label><br> --}}
                                            <a class="btn btn-primary add-more-btn btn-sm" id="addbuttons" style="margin-top: 5px">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>วิธีการตั้งราคา ในการขายโดยเฉลี่ย:</b></label>
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-hover table-checkable"  style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อดอกไม้</th>
                                            <th>ดอก</th>
                                            <th>ช่อ</th>
                                            <th>กิโล</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ดาวเรือง</td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[1][FLOWER]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[1][BOUQUET]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[1][KILO]"> บาท
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>เบญจมาศ</td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[2][FLOWER]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[2][BOUQUET]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[2][KILO]"> บาท
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>แกลดิโอสัส</td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[3][FLOWER]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[3][BOUQUET]"> บาท
                                            </td>
                                            <td>
                                                <input type="text" name="S_SET_PRICE[3][KILO]"> บาท
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                            <div class="col-lg-12">
                                <label style="margin-top: 10px"><b>ข้อจำกัด/ปัญหา:</b></label>
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-hover table-checkable"  style="margin-top: 13px !important">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อดอกไม้</th>
                                            <th>ข้อจำกัด/ปัญหา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ดอกไม้</td>
                                            <td>
                                                <textarea name="S_PROBLEM[FLOWER]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ไม้ใบ</td>
                                            <td>
                                                <textarea name="S_PROBLEM[FOLIAGE_PLANT]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>การจำหน่าย</td>
                                            <td>
                                                <textarea name="S_PROBLEM[SELL]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>ราคา</td>
                                            <td>
                                                <textarea name="S_PROBLEM[PRICE]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>ลูกค้า</td>
                                            <td>
                                                <textarea name="S_PROBLEM[CUSTOMER]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>อื่น</td>
                                            <td>
                                                <textarea name="S_PROBLEM[OTHER]" class="form-control" id="" cols="30" rows="3"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>
                        <!-- Select2 CSS -->
                        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> --}}
                        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
