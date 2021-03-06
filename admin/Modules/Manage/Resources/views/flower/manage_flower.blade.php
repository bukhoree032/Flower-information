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
                        <h3 class="card-label">ข้อมูลดอกไม้</h3>
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
                        <a href="{{ route('manage.create.flower') }}" class="btn btn-primary font-weight-bolder">
                        <i class="la la-plus"></i>เพิ่มดอกไม้</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อดอกไม้</th>
                                <th>ชื่อสามัญ</th>
                                <th>ชื่อวิทยาศาสตร์</th>
                                <th>ชื่ออื่นๆ</th>
                                <th>ประเภทดอกไม้</th>
                                {{-- <th>ลักษณะ</th> --}}
                                {{-- <th>เวลาเพิ่ม</th>
                                <th>เวลาแก้ไข</th> --}}
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item => $value)
                            <tr>
                                <td>{{ $item+1 }}</td>
                                <td>{{ $value->F_NAME }}</td>
                                @php $value->F_COMMON_NAME = __substr($value->F_COMMON_NAME,'30') @endphp
                                <td>{{ $value->F_COMMON_NAME }}</td>
                                @php $value->F_SCIENTIFIC_NAME = __substr($value->F_SCIENTIFIC_NAME,'30') @endphp
                                <td>{{ $value->F_SCIENTIFIC_NAME }}</td>
                                @php $value->F_OTHER_NAME = __substr($value->F_OTHER_NAME,'40') @endphp
                                <td>{{ $value->F_OTHER_NAME }}</td>
                                <td>{{ $value->F_TYPE }}</td>
                                {{-- <td>{{ $value->F_OVERALL_APPEARANCE }}</td> --}}
                                {{-- <td>{{ $value->created_at }}</td>
                                <th>{{ $value->updated_at }}</th> --}}
                                <td><i class="fas fa-eye pointer" onclick="window.location='{{ route('manage.page.detail_flower',$value->id) }}'"></i> <i class="fas fa-edit pointer" onclick="window.location='{{ route('manage.page.edit_flower',$value->id) }}'" style="margin-left: 15px"></i><i class="far fa-trash-alt" style="margin-left: 15px"></i></td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->                 
        </div>
    </div>
    {{-- @dd($result) --}}
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
