@extends('frontend.frontend_master')
@section('contents')

    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row product-single">
                    <span id="span_check_item"
                          style="display: none">{{ $productSingle->check_item === "active"?"true":"false" }}</span>
                    <div class="col-md-6">
                        <div class="badges">
                            @if($productSingle->new === "active")
                                <div class="hot item-hot text-center">Hot</div>
                            @endif
                            @if($productSingle->price !== $productSingle->price_old)
                                <div class="new item-new text-center item-sale">Sale</div>
                            @endif
                        </div>
                        <div class="owl-carousel img-carousel H600">
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom"
                                   href=" {{ asset('public/upload/images/product/'.$productSingle->image) }}"
                                   data-gal="prettyPhoto"><i
                                            class="fa fa-plus"></i></a>
                                <a href=" {{ asset('public/upload/images/product/'.$productSingle->image) }}"
                                   data-gal="prettyPhoto">
                                    <div class="image-big-frames">
                                        <img class="img-responsive"
                                             src=" {{ asset('public/upload/images/product/'.$productSingle->image) }}"
                                             alt=""/></div>
                                </a>
                            </div>
                            @if($imageDetail !== [])
                                @foreach($imageDetail as $key => $value)
                                    <div class="item">
                                        <a class="btn btn-theme btn-theme-transparent btn-zoom"
                                           href=" {{ asset('public/upload/images/product/'.$value) }}"
                                           data-gal="prettyPhoto"><i
                                                    class="fa fa-plus"></i></a>
                                        <a href=" {{ asset('public/upload/images/product/'.$value) }}"
                                           data-gal="prettyPhoto">
                                            <div class="image-big-frames"><img
                                                        class="img-responsive"
                                                        src=" {{ asset('public/upload/images/product/'.$value) }}"
                                                        alt=""/></div>
                                        </a></div>
                                @endforeach
                            @endif
                        </div>
                        <div class="row product-thumbnails">
                            <div class="col-xs-2 col-sm-2 col-md-3">
                                <a href="#" click="jQuery('.img-carousel').trigger('to.owl.carousel', [0, 300]);">
                                    <div class="image-small-frames"><img
                                                src=" {{ asset('public/upload/images/product/'.$productSingle->image) }}"
                                                alt=""/></div>
                                </a>
                            </div>
                            @if($imageDetail !== [])
                                @foreach($imageDetail as $key => $value)
                                    <div class="col-xs-2 col-sm-2 col-md-3">
                                        <a href="#"
                                           onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [1, 300]);">
                                            <div class="image-small-frames"><img
                                                        src=" {{ asset('public/upload/images/product/'.$value) }}"
                                                        alt=""/></div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="back-to-category">
                            <span class="link"><i class="fa fa-angle-left"></i> Trở lại <a
                                        href="category.html">Category</a></span>
                        </div>
                        <h2 class="product-title">{{ $productSingle->name }}</h2>
                        <div class="product-availability">Tình trạng: <strong>Còn hàng</strong></div>
                        <hr class="page-divider small"/>

                        @if($productSingle->price != $productSingle->price_old)
                            <ins></ins>
                            <div class="product-price"><strike>{{ number_format($productSingle->price_old)  }}
                                    đ</strike></div>
                        @endif

                        <div class="product-price">{{ number_format($productSingle->price)  }} đ</div>
                        <hr class="page-divider"/>

                        <div class="product-text">
                            <p>{{ $productSingle->description }} </p>

                        </div>
                        <hr class="page-divider"/>
                        <hr class="page-divider small"/>


                        <div class="buttons">
                            <div class="quantity">
                                <button class="btn qty-sub"><i class="fa fa-minus"></i></button>
                                <input id="qty-product" class="form-control qty" type="number" step="1" min="1"
                                       name="quantity" value="1"
                                       title="Qty">
                                <button class="btn qty-add"><i class="fa fa-plus"></i></button>
                            </div>
                            <button class="btn btn-theme btn-cart btn-icon-left smt-add-to-cart item-product-{{ $productSingle->id }}"
                                    type="submit"><i
                                        class="fa fa-shopping-cart "></i>Thêm vào giỏ
                            </button>
                            <button class="btn btn-theme btn-wish-list"><i class="fa fa-heart"></i></button>
                        </div>

                        <hr class="page-divider small"/>


                        <hr class="page-divider small"/>

                        <ul class="social-icons list-inline">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <table>
                            <tr>
                                <td class="title">Category:</td>
                                <td>Men Dress</td>
                            </tr>
                            <tr>
                                <td class="title">Product Code:</td>
                                <td>PS08</td>
                            </tr>
                            <tr>
                                <td class="title">Tags:</td>
                                <td>Fashion - clothes - Dress - Men - jean</td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

    @include('frontend.blocks.box.feture')

    <!-- PAGE -->
        <section class="page-section">
            <div class="container thum">
                <div class="tabs-wrapper content-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#item-description" data-toggle="tab">Chi tiết sản phẩm</a></li>
                        <li><a href="#reviews" data-toggle="tab">Bình luận</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="item-description">
                            <p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare
                                massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas.
                                Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat
                                sodales ipsum consectetur nec. </p>
                            <p>Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec
                                libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien
                                auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh.
                                Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum
                                molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum
                                ornare. Integer a orci enim.</p>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div data-width="100%" class="fb-comments" data-href="{{ $url }}" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    @include('frontend.blocks.box.relate_product')

    <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>Brand &amp; Clients</span></h2>
                <div class="partners-carousel">
                    <div class="owl-carousel" id="partners">
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                        <div><a href="#"><img
                                        src=" {{ asset('public/frontend/assets/img/preview/partners/brand-logo.jpg') }}"
                                        alt=""/></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@stop
@section('js_content')
    <script>
        function number_format_JS(number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase
            //  discuss at: http://locutus.io/php/number_format/
            // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
            // improved by: Kevin van Zonneveld (http://kvz.io)
            // improved by: davook
            // improved by: Brett Zamir (http://brett-zamir.me)
            // improved by: Brett Zamir (http://brett-zamir.me)
            // improved by: Theriault (https://github.com/Theriault)
            // improved by: Kevin van Zonneveld (http://kvz.io)
            // bugfixed by: Michael White (http://getsprink.com)
            // bugfixed by: Benjamin Lupton
            // bugfixed by: Allan Jensen (http://www.winternet.no)
            // bugfixed by: Howard Yeend
            // bugfixed by: Diogo Resende
            // bugfixed by: Rival
            // bugfixed by: Brett Zamir (http://brett-zamir.me)
            //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
            //  revised by: Luke Smith (http://lucassmith.name)
            //    input by: Kheang Hok Chin (http://www.distantia.ca/)
            //    input by: Jay Klehr
            //    input by: Amir Habibi (http://www.residence-mixte.com/)
            //    input by: Amirouche
            //   example 1: number_format(1234.56)
            //   returns 1: '1,235'
            //   example 2: number_format(1234.56, 2, ',', ' ')
            //   returns 2: '1 234,56'
            //   example 3: number_format(1234.5678, 2, '.', '')
            //   returns 3: '1234.57'
            //   example 4: number_format(67, 2, ',', '.')
            //   returns 4: '67,00'
            //   example 5: number_format(1000)
            //   returns 5: '1,000'
            //   example 6: number_format(67.311, 2)
            //   returns 6: '67.31'
            //   example 7: number_format(1000.55, 1)
            //   returns 7: '1,000.6'
            //   example 8: number_format(67000, 5, ',', '.')
            //   returns 8: '67.000,00000'
            //   example 9: number_format(0.9, 0)
            //   returns 9: '1'
            //  example 10: number_format('1.20', 2)
            //  returns 10: '1.20'
            //  example 11: number_format('1.20', 4)
            //  returns 11: '1.2000'
            //  example 12: number_format('1.2000', 3)
            //  returns 12: '1.200'
            //  example 13: number_format('1 000,50', 2, '.', ' ')
            //  returns 13: '100 050.00'
            //  example 14: number_format(1e-8, 8, '.', '')
            //  returns 14: '0.00000001'

            number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
            var n = !isFinite(+number) ? 0 : +number
            var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
            var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
            var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
            var s = ''

            var toFixedFix = function (n, prec) {
                if (('' + n).indexOf('e') === -1) {
                    return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
                } else {
                    var arr = ('' + n).split('e')
                    var sig = ''
                    if (+arr[1] + prec > 0) {
                        sig = '+'
                    }
                    return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
                }
            }

            // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || ''
                s[1] += new Array(prec - s[1].length + 1).join('0')
            }

            return s.join(dec)
        }
    </script>
    <script>
        $(document).ready(function () {
            var baseURL = window.location.origin;
            $('.qty-add').click(function () {
                if ($(this).prev().val() < 100) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.qty-sub').click(function () {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
            });


            $('.smt-add-to-cart').click(function () {


                var check_item = $('#span_check_item').text();
                if (check_item === "false") {
                    errorMsg("Thêm vào giỏ thất bại");
                } else {
                    //Get id from url
                    var pathname = window.location.pathname;
                    var idProduct = pathname.split("/");
                    var idProductAndHTML = idProduct[idProduct.length - 1].split(".");
                    var id = idProductAndHTML[0].split('-');
                    id = id[id.length - 1];

                    //Get id from product
                    var getThisClass = $(this).attr('class');
                    getThisClass = getThisClass.split(' ');
                    var stringId = getThisClass[getThisClass.length - 1];
                    stringId = stringId.split('-');
                    var idInString = stringId[stringId.length - 1];


                    if (id === idInString) {
                        var qty = $('#qty-product').val();
                        if ($.isNumeric(qty) && parseInt(qty) > 0) {
                            var url = baseURL + "/gio-hang/them-san-pham";
                            var token = jQuery("input[name='_token']").attr('value');
                            data = {
                                "_token": token,
                                "id": id,
                                "qty": qty,
                            };
                            jQuery.ajax({
                                url: url,
                                type: 'post',
                                cache: false,
                                data: data,
                                success: function (result) {
                                    if (result.type === 'empty') {
                                        var totalNew = parseInt(result.qty) * parseInt(result.price);
                                        $('.cart-items-inner').prepend('<div class="media">' +
                                            '                                <span style="display: none">' + number_format_JS(totalNew) + '</span>' +
                                            '                                <a class="pull-left" href="#"><img class="media-object item-image"' +
                                            '                                                                   src="' + baseURL + '/public/upload/images/product/' + result.image + '"' +
                                            '                                                                   alt="">' +
                                            '                                </a>' +
                                            '                                <p class="pull-right item-price price-product-' + id + '">' + number_format_JS(result.price) + ' đ</p>' +
                                            '                                <div class="media-body">' +
                                            '                                    <h4 class="media-heading item-title"><a href="#" class="count-qty qty-name-' + id + ' ' + result.qty + '"><strong style="color: red">' + result.qty + '</strong>' +
                                            '                                            x' + ' ' + result.name + '</a></h4>' +
                                            '                                </div>' +
                                            '                            </div>');


                                        var divTotal = '<div class="media div-total">' +
                                            '                            <p class="pull-right item-price total-price ' + totalNew + '">' + number_format_JS(totalNew) + ' đ</p>' +
                                            '                            <div class="media-body">' +
                                            '                                <h4 class="media-heading item-title summary">Tổng cộng</h4>' +
                                            '                            </div>' +
                                            '                        </div>';
                                        $('.btn-popup-cart').before(divTotal);
                                    } else {

                                        var total = $('.total-price').attr('class').split(' ');
                                        total = total[total.length - 1];

                                        var priceNew = parseInt(result.price);
                                        var totalNew = parseInt(total) + (parseInt(result.qty) * priceNew);

                                        var tagPTotal = $('.total-price');

                                        if (result.type === 'old') {
                                            var qty_name = $('.qty-name-' + id);
                                            var qty = qty_name.attr('class').split(' ');
                                            qty = qty[qty.length - 1];
                                            var qtyNew = parseInt(qty) + parseInt(result.qty);
                                            // alert(qtyNew);
                                            // return false;

                                            qty_name.html('<strong style="color: red">' + qtyNew + '</strong> X ' + result.name + '');
                                            qty_name.removeClass().addClass('count-qty qty-name-' + id + ' ' + qtyNew);

                                            tagPTotal.removeClass().addClass('pull-right item-price total-price ' + totalNew + '');
                                            tagPTotal.text(number_format_JS(totalNew) + ' đ');
                                        } else if (result.type === 'new') {
                                            var divProductNew = '<div class="media">' +
                                                '                                <span style="display: none">' + number_format_JS(totalNew) + '</span>' +
                                                '                                <a class="pull-left" href="#"><img class="media-object item-image"' +
                                                '                                                                   src="' + baseURL + '/public/upload/images/product/' + result.image + '"' +
                                                '                                                                   alt="">' +
                                                '                                </a>' +
                                                '                                <p class="pull-right item-price price-product-' + id + '">' + number_format_JS(priceNew) + ' đ</p>' +
                                                '                                <div class="media-body">' +
                                                '                                    <h4 class="media-heading item-title"><a href="#" class="count-qty qty-name-' + id + ' ' + result.qty + '"><strong style="color: red">' + result.qty + '</strong>' +
                                                '                                            x' + ' ' + result.name + '</a></h4>' +
                                                '                                </div>' +
                                                '                            </div>';
                                            tagPTotal.removeClass().addClass('pull-right item-price total-price ' + totalNew + '');
                                            tagPTotal.text(number_format_JS(totalNew) + ' đ');
                                            $('.div-total').before(divProductNew);
                                        }
                                    }
                                    var countItem = 0;
                                    $('.count-qty').each(function () {
                                        var number = $(this).attr('class').split(' ');
                                        number = number[number.length - 1];
                                        countItem = parseInt(countItem) + parseInt(number);
                                    });
                                    var spanCount = $('.span-count-item');
                                    spanCount.text(countItem + ' item(s)');
                                    successMsg('Thêm vào giỏ hàng thành công');
                                },
                                error: function () {
                                    alert("fail");
                                    errorMsg("Thêm vào giỏ thất bại");
                                }
                            });
                        } else {
                            // const toast = Swal.mixin({
                            //     toast: true,
                            //     position: 'center-end',
                            //     showConfirmButton: true,
                            // });
                            errorMsg("Số lượng không hợp lệ");
                            //alert("Số lượng không hợp lệ");

                        }
                    }
                }
            });


        });
    </script>
@endsection