<!-- PAGE -->
<section class="page-section">
    <div class="container">
        <h2 class="section-title"><span>Sản phẩm mới</span></h2>
        <div class="top-products-carousel">
            <div class="owl-carousel" id="top-products-carousel">
                @foreach($productNew as $key => $value)
                    <div class="thumbnail no-border no-padding product-item-{{ $value->id }} {{ $value->check_item === "active"?"true":"false" }}">
                        <div class="badges label-product">
                            <div class="hot item-hot text-center">Hot</div>
                            <div class="new item-new text-center">Mới</div>
                        </div>
                        <div class="media thumbnail-img-small">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="{{ asset('public/frontend/assets/img/preview/shop/TEST-SQUARE-IMG.jpg') }}">
                                <img src="{{ asset('public/frontend/assets/img/preview/shop/TEST-SQUARE-IMG.jpg') }}"
                                     alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a
                                        href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name  }}</a>
                            </h4>
                            <div class="rating">
                                <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                            </div>
                            <div class="price">
                                <ins>{{ number_format($value->price)  }} đ</ins>
                                @if($value->price !== $value->price_old)
                                    <del>{{ number_format($value->price_old)  }} đ</del>
                                @endif
                            </div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i
                                            class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-add-cart {{ $value->id }}" href="#">Thêm vào giỏ</a><!--
                                            -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->