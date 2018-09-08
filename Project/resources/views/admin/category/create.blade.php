@extends('layout.master', [
    'page_title'=>'Thêm danh mục sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'category_page',
])
@section('content')
    <style>
        /*p { display: none; }*/
        .invalid { border-color: red; }
        #errorUser,#errorDescription { color: red }
        .succes{border-color: blue}
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Tạo Danh Mục</h1>
            <form action="/admin/category" method="POST" enctype="multipart/form-data" id="form-validation">
            {{ csrf_field() }}
            <!--Grid row-->
                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="name" class="form-control">
                                <label class="">Name </label>
                                <span id="errorUser" class="font-small"></span>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>
                <!--Grid row-->


                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="2"></textarea>
                                <label for="description">Description</label>
                                <span id="errorDescription" class="font-small"></span>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="file-field">
                                <div class="z-depth-1-half mb-4">
                                    <img id="preview-img" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" style="width: 100%;" class="img-fluid" alt="example placeholder">
                            </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-mdb-color btn-rounded float-left">
                                        <span>Choose file</span>
                                        <input type="file" name="thumbnail" onchange="readURL(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="col-md-6 mb-4">
                            <button type="submit" value="Save" class="btn btn-fill btn-success">Save
                                <div class="ripple-container"></div>
                            </button>
                            <button type="reset" value="Reset" class="btn btn-fill btn-rose">Reset
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Section: Inputs-->

    <script>
        $(document).ready(function () {
            $('input[name = "name"]').focusout(function(){
                if ($('input[name = "name"]').val() == null || $('input[name = "name"]').val().length == 0){
                    $('input[name = "name"]').addClass('error');
                    $('#errorUser').text("Không được để trống phần User");
                }else if ($('input[name = "name"]').val().length >= 20) {
                    $('input[name = "name"]').addClass('error');
                    $('#errorUser').text("User không được để quá 20 kí tự");
                } else {
                    $('input[name = "name"]').removeClass('error');
                    $('#errorUser').text("");
                }
            });

            $('#description').focusout(function(){
                if ($('#description').val() == null || $('#description').val().length == 0){
                    $('textarea[name = "description"]').addClass('error');
                    $('#errorDescription').text("Không được để trống phần Description");
                }else if ($('#description').val().length >= 300) {
                    $('textarea[name = "description"]').addClass('error');
                    $('#errorDescription').text("Description không được để quá 300 kí tự");
                } else {
                    $('textarea[name = "description"]').removeClass('error');
                    $('#errorDescription').text("");
                }
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            //Reset preview image
            $('button[type="reset"]').click(function () {
                $('#preview-img').attr('src', 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg');
            })
        })

        // get preview image on change
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection