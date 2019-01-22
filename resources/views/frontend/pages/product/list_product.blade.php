@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Sản phẩm</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="active">Sản phảm</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        @include('frontend.blocks.box.sidebar_left_product')
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">
                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
                                    @include('frontend.blocks.partial.sort_product')
                                </div>
                                @if(isset($query) && $query != "")
                                    <div class="col-sm-4 text-right-sm">
                                        <span>Kết quả tìm kiếm: "{{ $query }}"</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products grid -->
                        <div class="row products grid">
                            @foreach($products as $key => $value)

                                <div class="col-md-4 col-sm-6">
                                    <div class="thumbnail no-border no-padding product-item-{{ $value->id }} {{ $value->check_item === "active"?"true":"false" }}">
                                        <div class="badges label-product">
                                            <div class="hot item-hot text-center">Hot</div>
                                            <div class="new item-new text-center">Mới</div>
                                        </div>
                                        <div class="media thumbnail-img">
                                            <a class="media-link" data-gal="prettyPhoto"
                                               href="{{ asset('public/upload/images/product/'.$value->image) }}">
                                                <img src="{{ asset('public/upload/images/product/'.$value->image) }}"
                                                     alt=""/>
                                                <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title"><a
                                                        href="{{ url('/san-pham/'.$value->slug.'-'.$value->id.'.html') }}">{{ $value->name }}</a>
                                            </h4>
                                            <div class="price">
                                                <ins>{{ number_format($value->price)  }} đ</ins>
                                                @if($value->price !== $value->price_old)
                                                    <del>{{ number_format($value->price_old)  }} đ</del>
                                                @endif
                                            </div>
                                            <div class="buttons">
                                                <a class="btn btn-theme btn-theme-transparent btn-wish-list btn-add-wishlist"
                                                   href="#"><i
                                                            class="fa fa-heart"></i></a>
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left btn-add-cart {{ $value->id }}"
                                                   href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- /Products grid -->

                        <div class="pagination-wrapper">
                            <div class="div-pagination">
                                {{ $products->appends(request()->except('page'))->links() }}
                            </div>
                        </div>

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        @include('frontend.blocks.box.feture')

    </div>
@stop