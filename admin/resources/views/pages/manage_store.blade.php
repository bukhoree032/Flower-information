{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-favourite text-primary"></i>
                        </span>
                        <h3 class="card-label">ข้อมูลร้านค้า</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i>รายงาน</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="nav flex-column nav-hover">
                                    <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-print"></i>
                                            <span class="nav-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-copy"></i>
                                            <span class="nav-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-excel-o"></i>
                                            <span class="nav-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-text-o"></i>
                                            <span class="nav-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-pdf-o"></i>
                                            <span class="nav-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder">
                        <i class="la la-plus"></i>เพิ่มร้านค้า</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>ที่อยู่</th>
                                <th>ดอกไม้ที่ขาย</th>
                                <th>กลุ่มลูกค้า</th>
                                <th>เวลาเพิ่ม</th>
                                <th>เวลาแก้ไข</th>
                                <th>สถานะ</th>
                                <th>ประเภท</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>นายกูรอบาฮา ลานง</td>
                                <td>12 ม.10 ต.สะเตง อ.เมือง จ.ยะลา 95000</td>
                                <td>São Félix do Xingu</td>
                                <td>698 Oriole Pass</td>
                                <td>10/15/2017</td>
                                <td>10/15/2017</td>
                                <td>ปกติ</td>
                                <th>1</th>
                                <td nowrap="nowrap"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>นายสมชาย ลานง</td>
                                <td>12 ม.10 ต.สะเตง อ.เมือง จ.ยะลา 95000</td>
                                <td>Bình Minh</td>
                                <td>8998 Delaware Court</td>
                                <td>4/24/2016</td>
                                <td>10/15/2017</td>
                                <td>ปกติ</td>
                                <th>1</th>
                                <td nowrap="nowrap"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>นายแดง ลานง</td>
                                <td>12 ม.10 ต.สะเตง อ.เมือง จ.ยะลา 95000</td>
                                <td>Palagao Norte</td>
                                <td>91796 Sutteridge Road</td>
                                <td>7/11/2017</td>
                                <td>10/15/2017</td>
                                <td>ปกติ</td>
                                <th>1</th>
                                <td nowrap="nowrap"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->                 
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/datatable/sc_datatable.js') }}" type="text/javascript"></script>
    
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
@endsection
