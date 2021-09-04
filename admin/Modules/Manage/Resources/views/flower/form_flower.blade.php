{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="row">
        <div class="col-lg-6 col-xxl-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h2 class="card-title">เพิ่มข้อมูลดอกไม้</h2>
                </div>
                <!--begin::Form-->
                <form action="{{ route('manage.insert.flower') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>ชื่อดอกไม้ :</label>
                                <input name="F_NAME" name="F_" type="text"  class="form-control" placeholder="ใส่ชื่อดอกไม้" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อสามัญ :</label>
                                <input name="F_COMMON_NAME" type="text" class="form-control" placeholder="ใส่ชื่อสามัญ" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อสามัญของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่อวิทยาศาสตร์ :</label>
                                <input name="F_SCIENTIFIC_NAME" type="text" class="form-control" placeholder="ใส่ชื่อวิทยาศาสตร์" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อทางวิทยาศาสตร์ของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ชื่ออื่นๆ :</label>
                                <input name="F_OTHER_NAME" type="text" class="form-control" placeholder="ใส่ชื่อดอกไม้" />
                                <span class="form-text text-muted">กรุณาใส่ชื่อของดอกไม้</span>
                            </div>
                            <div class="col-lg-4">
                                <label>ประเภทดอกไม้:</label>
                                <select class="form-control" id="exampleSelect1" name="F_TYPE">
                                    <option >-- เลือก --</option>
                                    <option value="1">ไม้ใบ</option>
                                    <option value="2">ไม้ดอก</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ลักษณะโดยรวม:</label>
                                <textarea name="F_OVERALL_APPEARANCE" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>ลักษณะต้น:</label>
                                <textarea name="F_NATURE_TRUNK" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>ลักษณะใบ:</label>
                                <textarea name="F_NATURE_LEAF" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>ลักษณะดอก:</label>
                                <textarea name="F_NATURE_FLOWER" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>ข้อมูลทั่วไป:</label>
                                <textarea name="F_GENERAL_INFORMATION" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>การปลูกเลี้ยง:</label>
                                <textarea name="F_PLANT" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>การขยายพันธุ์:</label>
                                <textarea name="F_PROPAGATION" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label>การใช้ประโยชน์:</label>
                                <textarea name="F_UTILIZATION" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="file-input">
                                    <input class="choose" type="file" name="file" accept="image/*">
                                    <span class="button">อัปโหลดรูปหน้าปก</span>
                                    {{-- <span class="label">เลือกไฟล์</span> --}}
                                </div>
                                <div class="" style="border: 1px solid #f1f1f1">
                                    <img id="preview" src="">
                                </div>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="grid-x grid-padding-x">
                                    <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
                                      {{-- <h1>Multiple Image File Upload with Preview</h1> --}}
                                        <p>
                                          <label for="upload_imgs" class="button hollow">เพิ่มรูปภาพดอกไม้ทั้งหมด +</label>
                                          <input class="show-for-sr" type="file" id="upload_imgs" name="file_multiple[]" multiple/>
                                        </p>
                                        <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                                        {{-- <p>
                                          <input class="button large expanded" type="submit" name="submit" value="Upload Images"/>
                                        </p> --}}
                                    </div>
                                </div>
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
    <script>
        var imgUpload = document.getElementById('upload_imgs')
        , imgPreview = document.getElementById('img_preview')
        , imgUploadForm = document.getElementById('img-upload-form')
        , totalFiles
        , previewTitle
        , previewTitleText
        , img;

        imgUpload.addEventListener('change', previewImgs, false);
        imgUploadForm.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Images Uploaded! (not really, but it would if this was on your website)');
        }, false);

        function previewImgs(event) {
        totalFiles = imgUpload.files.length;
        
        if(!!totalFiles) {
            imgPreview.classList.remove('quote-imgs-thumbs--hidden');
            previewTitle = document.createElement('p');
            previewTitle.style.fontWeight = 'bold';
            previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
            previewTitle.appendChild(previewTitleText);
            imgPreview.appendChild(previewTitle);
        }
        
        for(var i = 0; i < totalFiles; i++) {
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            imgPreview.appendChild(img);
        }
        }
    </script>
    <script>
                const readURL = (input) => {
        if (input.files && input.files[0]) {
            const reader = new FileReader()
            reader.onload = (e) => {
            $('#preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0])
        }
        }
        $('.choose').on('change', function() {
            readURL(this)
        let i
        if ($(this).val().lastIndexOf('\\')) {
            i = $(this).val().lastIndexOf('\\') + 1
        } else {
            i = $(this).val().lastIndexOf('/') + 1
        }
        const fileName = $(this).val().slice(i)
        $('.label').text(fileName)
        })
    </script>
@endsection
