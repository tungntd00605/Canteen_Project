@extends('layout.master', [
    'page_title'=>'Thêm danh mục sản phẩm | FPTcanteen Admin Page',
    'current_page'=>'category_page',
])
@section('content')
<section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Tạo Danh Mục</h1>
            <form action="/admin/category" method="POST">
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="name" class="form-control">
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
                                    <input type="text" name="thumbnail" class="form-control">
                                    <label class="">Thumbnail </label>
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
                                <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form7">Description</label>
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
@endsection