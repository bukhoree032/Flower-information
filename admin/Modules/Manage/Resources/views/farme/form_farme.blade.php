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
                    <h3 class="card-title">3 Columns Form Layout</h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">Please enter your email</span>
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
                        <!-- begin: Example Code-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html_3" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
                                            <code class="language-html">
                                                &lt;form class="form"&gt;
                                                &lt;div class="card-body"&gt;
                                                &lt;div class="form-group row"&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Full Name:&lt;/label&gt;
                                                    &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Email:&lt;/label&gt;
                                                    &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your email&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Username:&lt;/label&gt;
                                                    &lt;div class="input-group"&gt;
                                                    &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-user"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                    &lt;input type="text" class="form-control" placeholder=""/&gt;
                                                    &lt;/div&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your username&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Contact:&lt;/label&gt;
                                                    &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your contact&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Fax:&lt;/label&gt;
                                                    &lt;div class="input-group"&gt;
                                                    &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-info-circle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                    &lt;input type="text" class="form-control" placeholder="Fax number"/&gt;
                                                    &lt;/div&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter fax&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Address:&lt;/label&gt;
                                                    &lt;div class="input-group"&gt;
                                                    &lt;input type="text" class="form-control" placeholder="Enter your address"/&gt;
                                                    &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your address&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;Postcode:&lt;/label&gt;
                                                    &lt;div class="input-group"&gt;
                                                    &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-bookmark-o"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                    &lt;input type="text" class="form-control" placeholder="Enter your postcode"/&gt;
                                                    &lt;/div&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please enter your postcode&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;label&gt;User Group:&lt;/label&gt;
                                                    &lt;div class="radio-inline"&gt;
                                                    &lt;label class="radio radio-solid"&gt;
                                                    &lt;input type="radio" name="example_2" checked="checked" value="2"/&gt;
                                                    &lt;span&gt;&lt;/span&gt;
                                                    Sales Person
                                                    &lt;/label&gt;
                                                    &lt;label class="radio radio-solid"&gt;
                                                    &lt;input type="radio" name="example_2" value="2"/&gt;
                                                    &lt;span&gt;&lt;/span&gt;
                                                    Customer
                                                    &lt;/label&gt;
                                                    &lt;/div&gt;
                                                    &lt;span class="form-text text-muted"&gt;Please select user group&lt;/span&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="card-footer"&gt;
                                                &lt;div class="row"&gt;
                                                &lt;div class="col-lg-4"&gt;&lt;/div&gt;
                                                &lt;div class="col-lg-8"&gt;
                                                    &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
                                                    &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;/form&gt;
                                                </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Example Code-->
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
