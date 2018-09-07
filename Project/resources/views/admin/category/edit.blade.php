@extends('layout.master', [
    'page_title'=>'Sửa danh mục sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'category_page',
])
@section('content')
    <style>
        /*p { display: none; }*/
        .invalid { border-color: red; }
        #errorUser,#errorDescription { color: red }
        .succes{border-color: blue}
    </style>
    <section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Sửa Danh Mục</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="/admin/category/{{$obj->id}}" method="POST" enctype="multipart/form-data" id="form-validation">
            {{ csrf_field() }}
            @method('PUT')
            <!--Grid row-->
                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="name" class="form-control" value="{{$obj->name}}" id="name">
                                <label class="">Name </label>
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
                                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="2">{{$obj->description}}</textarea>
                                <label for="description">Description</label>
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
                                    <img id="preview-img" style="width: 100%;"
                                         src="{{$obj->thumbnail}}"
                                         class="img-fluid" alt="example placeholder">
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
    <script type="text/javascript">
        window.onload = function () {
            validationform();
        }

        function validationform() {
            var inputUser = document.forms['form-validation']['name'];
            inputUser.onblur = function() {
                if (inputUser.value == ''){
                    inputUser.classList.add('invalid');
                    document.getElementById('errorUser').innerHTML = 'Vui lòng không để trống Name.';
                }
            };

            inputUser.onblur = function() {
                if (inputUser.size >= 20){
                    inputUser.classList.add('invalid');
                    document.getElementById('errorUser').innerHTML = 'Name không được để quá 20 kí tự.';
                }
            };

            inputUser.onfocus = function() {
                if (this.classList.contains('invalid')) {
                    // remove the "error" indication, because the user wants to re-enter something
                    this.classList.remove('invalid');
                    document.getElementById('errorUser').innerHTML ='';
                }
            }

            var inputDescription = document.forms['form-validation']['description'];
            inputDescription.onblur = function() {
                if (inputDescription.value == ''){
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
        }
    </script>
@endsection