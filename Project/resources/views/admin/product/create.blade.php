@extends('layout.master', [
    'page_title'=>'Thêm sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'product_page',
])
@section('content')
    <style>
        /*p { display: none; }*/
        .invalid { border-color: red; }
        #errorUser,#errorPrice,#errorDiscount,#errorDescription { color: red }
        .succes{border-color: blue}
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Thêm sản phẩm</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/admin/product" method="POST" enctype="multipart/form-data">
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
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <select class="mdb-select" name="categoryId">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <label>Category</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="price" class="form-control">
                                <label class="">Price </label>
                                <span id="errorPrice" class="font-small"></span>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="discount" class="form-control" value="0">
                                <label class="">Discount </label>
                                <span id="errorDiscount" class="font-small" ></span>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>


                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <textarea type="text" name="description" class="md-textarea form-control" rows="2"></textarea>
                                <label for="description">Description</label>
                                <span id="errorDescription"class="font-small" ></span>
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

            $('input[name = "price"]').focusout(function(){
                if ($('input[name = "price"]').val() == null || $('input[name = "price"]').val().length == 0){
                    $('input[name = "price"]').addClass('error');
                    $('#errorPrice').text("Không được để trống phần Price");
                }else if ($('input[name = "price"]').val().length >= 20) {
                    $('input[name = "price"]').addClass('error');
                    $('#errorPrice').text("Price không được để quá 20 kí tự");
                } else {
                    $('input[name = "price"]').removeClass('error');
                    $('#errorPrice').text("");
                }
            });

            $('input[name = "discount"]').focusout(function(){
                if ($('input[name = "discount"]').val() == null || $('input[name = "discount"]').val().length == 0){
                    $('input[name = "discount"]').addClass('error');
                    $('#errorDiscount').text("Không được để trống phần Discount");
                }else if ($('input[name = "discount"]').val().length >= 20) {
                    $('input[name = "discount"]').addClass('error');
                    $('#errorDiscount').text("Discount không được để quá 20 kí tự");
                } else {
                    $('input[name = "discount"]').removeClass('error');
                    $('#errorDiscount').text("");
                }
            });

            $('textarea[name = "description"]').focusout(function(){
                if ($('textarea[name = "description"]').val() == null || $('textarea[name = "description"]').val().length == 0){
                    $('textarea[name = "description"]').addClass('error');
                    $('#errorDescription').text("Không được để trống phần Description");
                }else if ($('textarea[name = "description"]').val().length >= 300) {
                    $('textarea[name = "description"]').addClass('error');
                    $('#errorDescription').text("Description không được để quá 300 kí tự");
                } else {
                    $('textarea[name = "description"]').removeClass('error');
                    $('#errorDescription').text("");
                }
            });
        })
    </script>
    <script type="text/javascript">
        /*window.onload = function () {
            validationform();
        }

        function validationform() {
            var inputUser = document.forms['form-validation']['name'];
            inputUser.onblur = function() {
                if (inputUser.value = ''){
                    inputUser.classList.add('invalid');
                    document.getElementById('errorUser').innerHTML = 'Vui lòng không để trống Name.';
                }
            };

            inputUser.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    document.getElementById('errorUser').innerHTML ='';
                }
            }

            var inputPrice = document.forms['form-validation']['price'];
            inputPrice.onblur = function() {
                if (inputPrice.value = ''){
                    inputPrice.classList.add('invalid');
                    document.getElementById('errorPrice').innerHTML = 'Vui lòng không để trống Price.';
                }
            };

            inputPrice.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    document.getElementById('errorPrice').innerHTML ='';
                }
            }

            var inputDiscount = document.forms['form-validation']['discount'];
            inputDiscount.onblur = function() {
                if (inputDiscount.value = ''){
                    inputDiscount.classList.add('invalid');
                    document.getElementById('errorDiscount').innerHTML = 'Vui lòng không để trống Discount.';
                }
            };

            inputDiscount.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    document.getElementById('errorDiscount').innerHTML ='';
                }
            }

            var inputDescription = document.forms['form-validation']['description'];
            inputDescription.onblur = function() {
                if (inputDescription.value = ''){
                    inputDescription.classList.add('invalid');
                    document.getElementById('errorDescription').innerHTML = 'Vui lòng không để trống Description.';
                }
            };

            inputDescription.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    document.getElementById('errorDescription').innerHTML ='';
                }
            }
        }*/
    </script>
@endsection