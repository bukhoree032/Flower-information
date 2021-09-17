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
                        
                    </div>
                </div>
                {{-- @dd($result['result'][0]) --}}
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 20%">เรื่อง</th>
                            <th scope="col" style="width: 80%">รายละเอียด</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th >ชื่อดอกไม้</th>
                            <td><textarea name="F_NAME" class="form-control" rows="1" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_NAME }} @endisset </textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ชื่อสามัญ</th>
                            <td><textarea name="F_COMMON_NAME" class="form-control" rows="1" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_COMMON_NAME }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ชื่อวิทยาศาสตร์</th>
                            <td><textarea name="F_SCIENTIFIC_NAME" class="form-control" rows="1" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_SCIENTIFIC_NAME }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ชื่ออื่นๆ</th>
                            <td><textarea name="F_OTHER_NAME" class="form-control" rows="1" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_OTHER_NAME }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ประเภทดอกไม้</th>
                            <td><textarea name="F_TYPE" class="form-control" rows="1" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_TYPE }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ลักษณะโดยรวม</th>
                            <td><textarea name="F_OVERALL_APPEARANCE" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_OVERALL_APPEARANCE }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ลักษณะต้น</th>
                            <td><textarea name="F_NATURE_TRUNK" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_NATURE_TRUNK }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ลักษณะใบ</th>
                            <td><textarea name="F_NATURE_LEAF" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_NATURE_LEAF }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ลักษณะดอก</th>
                            <td><textarea name="F_NATURE_FLOWER" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_NATURE_FLOWER }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >ข้อมูลทั่วไป</th>
                            <td><textarea name="F_GENERAL_INFMATION" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_GENERAL_INFORMATION }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >การปลูกเลี้ยง</th>
                            <td><textarea name="F_PLANT" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_PLANT }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >การขยายพันธุ์</th>
                            <td><textarea name="F_PROPAGATION" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_PROPAGATION }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >การใช้ประโยชน์</th>
                            <td><textarea name="F_UTILIZATION" class="form-control" rows="4" id="comment">@isset($result['result'][0]->F_NAME) {{ $result['result'][0]->F_UTILIZATION }} @endisset</textarea name=""> </td>
                          </tr>
                          <tr>
                            <th >รูปปก</th>
                            <td>
                              <div class="row">
                                <div class="col-lg-4">
                                    รูปเดิม
                                    <img src="https://tex1712.github.io/repo/gallery/images/img_1.jpg" alt="" style="width: 100%">
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
                            </td>
                          </tr>
                          <tr>
                            <th >รูปทั้งหมด</th>
                            <td> 
                                <div class="row">
                                    <div class="col-lg-3" id="flower1">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_1.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower1')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower2">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_2.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower2')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower3">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_3.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower3')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower4">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_4.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower4')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower5">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_5.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower5')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower6">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_6.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower6')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower7">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_7.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower7')">ลบรูป</button>
                                    </div>
                                    <div class="col-lg-3" id="flower8">
                                        <img src="https://tex1712.github.io/repo/gallery/images/img_8.jpg" alt="" style="width: 100%; margin-top: 5px">
                                        <button type="button" class="btn btn-danger btn-sm btn-block" onclick="myFunction('flower8')">ลบรูป</button>
                                    </div>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary font-weight-bolder" >บันทึก</button>
                    <button type="button" class="btn btn-danger font-weight-bolder" >ยกเลิก</button>
                </div>
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
    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
  
   
    <script src="{{ asset('js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection