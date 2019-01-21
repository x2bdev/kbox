@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Wishlist</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color no-padding-bottom">
            <div class="container">

                <div class="row wishlist">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="table-wishlist-product">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-gift"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buy 1 Get 1</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-comments"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Call to Free</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Money Back!</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <script id="templateHtml" type="text/x-handlebars-template">
        <tr>
        <td class="image"><a class="media-link" href="{link}"><img width=200 height=120 src="{image}" alt="{name}"/></a></td>
        <td class="description">
            <h4><a href="{link}">{name}</a></h4>
        </td>
        <td class="price">{price} VNĐ</td>
        <td class="total"><a href="javascript:void(0)" onclick="removeWishlistProduct('{id}')"><i class="fa fa-close"></i></a></td>
        </tr>
    </script>
@endsection

@section('js_customer')
    <script>
        Number.prototype.format = function(n, x, s, c) {
            var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
                num = this.toFixed(Math.max(0, ~~n));

            return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
        };

        $(document).ready(function () {
            var obj = [];
            objProductFavorite = JSON.parse(localStorage.getItem("favoriteProduct"));
            if(objProductFavorite.length === 0) {
                $('#list-product').empty();
                $('#list-product').append(`<h4 class="text-center">Vẫn chưa có sản phẩm yêu thích nào</h4>`);
                return false;
            }
            else {
                objProductFavorite.map((item) => {
                    obj.push(item.id);
                });

                $.ajax({
                    type 	: "POST",
                    url		: "<?php echo route('get-wishlist-product');?>",
                    headers : {'X-CSRF-TOKEN': token},
                    data 	: {
                        ids: obj
                    },
                    dataType: 'json',
                    success: function (response) {
                        if(response.data.length !==0 ) {
                            $.each(response.data, (index, value) => {
                                let htmlMore = $(templateHtml).html();
                                let image = "public/frontend/assets/img/preview/shop/TEST-SQUARE-IMG.jpg";
                                let link = '/san-pham/' + value.slug + '-' + value.id + '.html';
                                let price = value.price.format();
                                htmlMore = htmlMore.replace(/{id}/g, value.id);
                                htmlMore = htmlMore.replace(/{name}/g, value.name);
                                htmlMore = htmlMore.replace(/{price}/g, price);
                                htmlMore = htmlMore.replace(/{image}/g, image);
                                htmlMore = htmlMore.replace(/{link}/g, link);
                                $('#table-wishlist-product').append(htmlMore);
                            });
                        }
                    }
                });
            }
        });
    </script>
@endsection
