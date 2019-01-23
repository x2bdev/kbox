<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-list">
                    <a class="btn btn-theme btn-title-more" href="#">Xem tất cả</a>
                    <h4 class="block-title"><span>Bán chạy</span></h4>
                    @foreach($productBestSeller as $key => $value)
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <div class="image-s-small-frames">
                                    <img class="media-object"
                                         src="{{ asset('public/upload/images/product/'.$value->image) }}"
                                         alt="{{ $value->name }}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a
                                            href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name }}</a>
                                </h4>
                                <div class="price">
                                    <ins>{{ number_format($value->price)  }} đ</ins>
                                    @if($value->price !== $value->price_old)
                                        <del>{{ number_format($value->price_old)  }} đ</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-list">
                    <a class="btn btn-theme btn-title-more" href="#">Xem tất cả</a>
                    <h4 class="block-title"><span>Siêu rẻ</span></h4>
                    @foreach($productShortestPrice as $key => $value)
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <div class="image-s-small-frames">
                                    <img class="media-object"
                                         src="{{ asset('public/upload/images/product/'.$value->image) }}"
                                         alt="{{ $value->name }}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a
                                            href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name }}</a>
                                </h4>
                                <div class="price">
                                    <ins>{{ number_format($value->price)  }} đ</ins>
                                    @if($value->price !== $value->price_old)
                                        <del>{{ number_format($value->price_old)  }} đ</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-list">
                    <a class="btn btn-theme btn-title-more" href="#">Xem tất cả</a>
                    <h4 class="block-title"><span>Ngẫu nhiên</span></h4>
                    @foreach($productRandom as $key => $value)
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <div class="image-s-small-frames">
                                    <img class="media-object"
                                         src="{{ asset('public/upload/images/product/'.$value->image) }}"
                                         alt="{{ $value->name }}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a
                                            href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name }}</a>
                                </h4>
                                <div class="price">
                                    <ins>{{ number_format($value->price)  }} đ</ins>
                                    @if($value->price !== $value->price_old)
                                        <del>{{ number_format($value->price_old)  }} đ</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>