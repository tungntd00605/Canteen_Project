@extends('layout.client', [
    'page_title' => str_slug($obj->name).' | FPT Canteen'
])
@section('content')
<!-- /.Navigation -->

<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">

<!-- Main Container -->
<div class="container mt-5 pt-3">

    <!--Section: Product detail -->
    <section id="productDetails" class="pb-5">
        <!--News card-->
        <div class="card mt-5 hoverable">
            <div class="row mt-3 mb-3 ml-3 mr-3">
                <div class="col-lg-6">
                    <img src="{{$obj->thumbnail}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 mr-3 text-center text-md-left">
                    <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                        <strong>{{$obj->name}}</strong>
                    </h2>
                    <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{$obj->category->name}}</span>
                    <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>{{$obj->discountPriceWithFormat}} VND</strong>
                            </span>
                    </h3>

                    <!--Accordion wrapper-->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card card-ecommerce">
                            <div class="card-header pl-0" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    {{$obj->description}}
                                </h5>
                            </div>
                        </div>
                    <!--/.Accordion wrapper-->
                    </div>

                    <!-- Add to Cart -->
                    <section class="color">
                        <div class="mt-5">
                            <div class="row mt-3 mb-4">
                                <div class="col-md-12 ">
                                    <button class="btn btn-primary btn-rounded btn-add-cart" id="add-cart-{{$obj->id}}">
                                        <i class="fa fa-cart-plus mr-2" aria-hidden="true">
                                        </i> Thêm vào giỏ hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.Add to Cart -->
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 mb-5" style="height: 500px;">
        <link rel="stylesheet" href="{{asset('css/productDetail.css')}}">
        <h2>Sản phẩm liên quan</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($related_product as $item)
                    <div class="swiper-slide" style="width: 300px; height: 380px;">
                        <div class="imgBox">
                            <img src="{{$item->thumbnail}}" alt="product-related">
                        </div>
                        <div class="detail">
                            <a href="/product/{{$item->id}}">
                                <h4 style="text-align: center;">{{$item->name}}</h4><h5 class="price_related" style="color: #d19d19">{{$item->discountPriceString}}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <script src="{{asset('js/swiper.min.js')}}"></script>
    </section>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 1,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });

        $('.btn-add-cart').click(function () {
            var product_id = $(this).attr('id').replace('add-cart-', '');
            var quantity = 1;
            $.ajax({
                url: '/api-them-gio-hang',
                method: 'post',
                data: {
                    id: product_id,
                    quantity: quantity,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {
                    var new_count = resp.shopping_cart.count;
                    var new_total_money = resp.shopping_cart.total_money;
                    var new_items = resp.shopping_cart.items;
                    var new_content = '';
                    for (var i in new_items) {
                        new_content += '<tr>';
                        new_content += '<th scope="row"><img src="' + new_items[i].product.thumbnail + '" class="img-fluid img-thumbnail" width="110px" alt=""></th>';
                        new_content += '<td>' + new_items[i].product.name + '</td>';
                        new_content += '<td>' + new_items[i].quantity + '</td>';
                        new_content += '<td>' + new_items[i].product.dicountPriceString + '</td>';
                        new_content += '</tr>';
                    }
                    if($('#cart-count-icon').hasClass( "grey" )){
                        $('#cart-count-icon').removeClass('grey')
                        $('#cart-count-icon').addClass('danger-color')
                    }
                    if(new_count == undefined){
                        $('#cart-count-icon').text(1);
                    }else{
                        $('#cart-count-icon').text(new_count);
                    }
                    $('#cart-body').html(new_content);
                    $('#cart-total').text(new_total_money);
                    swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
                },
                error: function (error) {
                    swal('Thao tác thất bại', "Vui lòng thử lại sau", 'error');
                }
            });
    </script>
</div>
<!-- /.Main Container -->
@endsection