@extends('frontend.frontend_master')
@section('contents')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h1 class="breadmome-name">Giới thiệu về cửa hàng</h1>
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li class="active">Giới thiệu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Area End-->
    <!--Blog Area Start-->
    <div class="blog-area mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_area">
                        <article class="blog_single blog-details">
                            <div class="postinfo-wrapper">
                                <div class="post-info">
                                    <div class="entry-summary blog-post-description">
                                        {!! $content !!}
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop