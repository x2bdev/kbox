@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Category Page</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Category Grid View Page With Left Sidebar</li>
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
                        @include('frontend.blocks.box.sidebar_left')
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <div class="main-slider sub">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Slide 1 -->
                                <div class="item slide1 sub">
                                    <img class="slide-img" src="{{ asset('public/frontend/assets/img/preview/slider/slide-1-sub.jpg') }}" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 1 -->

                                <!-- Slide 2 -->
                                <div class="item slide2 sub">
                                    <img class="slide-img" src="{{ asset('public/frontend/assets/img/preview/slider/slide-1-sub.jpg') }}" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Winter Fashion</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 -->

                            </div>
                        </div>

                        <!-- shop-sorting -->
                        <div class="shop-sorting">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form class="form-inline" action="">
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                                <option>Product Name</option>
                                            </select>
                                        </div>
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select">
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                                <option>Select Manifacturers</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-right-sm">
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="{{ asset('public/frontend/assets/img/icon-list.png') }}" alt=""/></a>
                                    <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="{{ asset('public/frontend/assets/img/icon-grid.png') }}" alt=""/></a>
                                </div>
                            </div>
                        </div>
                        <!-- /shop-sorting -->

                        <!-- Products grid -->
                        <div class="row products grid">
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-1c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-2c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-3c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-4c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-5c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-6c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-7c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-8c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-9c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-10c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-11c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-12c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-13c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-14c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <img src="{{ asset('public/frontend/assets/img/preview/shop/product-15c.jpg') }}" alt=""/>
                                            <span class="icon-view">
                                                        <strong><i class="fa fa-eye"></i></strong>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">Standard Product Header</h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Products grid -->

                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
        <section class="page-section no-padding-top">
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
@stop