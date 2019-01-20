<section class="page-section light">
    <div class="container">
        <div class="featured-products-carousel">
            <div class="owl-carousel" id="featured-products-carousel">
                @foreach($productList as $key => $value)
                    <div class="thumbnail no-border no-padding product-item-{{ $value->id }} {{ $value->check_item === "active"?"true":"false" }}">
                        <div class="media thumbnail-img">
                            <a class="media-link" data-gal="prettyPhoto"
                               href="{{ asset('public/frontend/assets/img/preview/shop/TEST-SQUARE-IMG.jpg') }}">
                                <img src="{{ asset('public/frontend/assets/img/preview/shop/TEST-SQUARE-IMG.jpg') }}"
                                     alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name }}</a>
                            </h4>
                            <div class="price">
                                <ins>$400.00</ins>
                                <del>$425.00</del>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i
                                            class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left btn-add-cart {{ $value->id }}" href="#"><i
                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ</a><!--
                            -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>