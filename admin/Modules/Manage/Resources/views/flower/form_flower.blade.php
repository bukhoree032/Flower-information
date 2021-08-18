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
                    <h2 class="card-title">เพิ่มข้อมูลดอกไม้</h2>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>ชื่อดอกไม้ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อดอกไม้" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อสามัญ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อสามัญ" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อสามัญของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อวิทยาศาสตร์ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อวิทยาศาสตร์" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อทางวิทยาศาสตร์ของดอกไม้</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>ชื่ออื่นๆ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อดอกไม้" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อสามัญ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อสามัญ" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อสามัญของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อวิทยาศาสตร์ :</label>
                                <input type="email" class="form-control" placeholder="ใส่ชื่อวิทยาศาสตร์" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อทางวิทยาศาสตร์ของดอกไม้</span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>ชื่อดอกไม้:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อสามัญ:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อสามัญของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Username:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                                <span class="form-text text-muted">Please enter your username</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Contact:</label>
                                <input type="email" class="form-control" placeholder="Enter contact number" />
                                <span class="form-text text-muted">Please enter your contact</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Fax:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-info-circle"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Fax number" />
                                </div>
                                <span class="form-text text-muted">Please enter fax</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Address:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your address" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your address</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Postcode:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-bookmark-o"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter your postcode" />
                                </div>
                                <span class="form-text text-muted">Please enter your postcode</span>
                            </div>
                            <div class="col-lg-4">
                                <label>User Group:</label>
                                <div class="radio-inline">
                                    <label class="radio radio-solid">
                                    <input type="radio" name="example_2" checked="checked" value="2" />
                                    <span></span>Sales Person</label>
                                    <label class="radio radio-solid">
                                    <input type="radio" name="example_2" value="2" />
                                    <span></span>Customer</label>
                                </div>
                                <span class="form-text text-muted">Please select user group</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
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
