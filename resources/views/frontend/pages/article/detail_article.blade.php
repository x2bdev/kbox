@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Chi tiết bài viết</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Chi tiết bài viết</li>
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
                        <!-- widget tabs -->
                        <div class="widget widget-tabs alt">
                            <div class="widget-content">
                                <ul id="tabs" class="nav nav-justified">
                                    <li><a href="#tab-s1" data-toggle="tab">Recent posts</a></li>
                                    <li class="active"><a href="#tab-s2" data-toggle="tab">Popular post</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- tab 1 -->
                                    <div class="tab-pane fade" id="tab-s1">
                                        <div class="recent-post">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-3w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-1w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-2w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tab 2 -->
                                    <div class="tab-pane fade in active" id="tab-s2">
                                        <div class="recent-post">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-1w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-2w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object"
                                                         src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-3w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i
                                                                    class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <a class="btn btn-theme btn-theme-transparent btn-theme-sm btn-block" href="#">More
                                    Products</a>
                            </div>
                        </div>
                        <!-- /widget tabs -->
                        <!-- widget tag cloud -->
                        <div class="widget widget-tag-cloud">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Tags</span></h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Top Sellers</a></li>
                                <li><a href="#">E commerce</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                <li><a href="#">Supplier</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Website</a></li>
                                <li><a href="#">Isamercan</a></li>
                                <li><a href="#">Themeforest</a></li>
                            </ul>
                        </div>
                        <!-- /widget tag cloud -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <!-- Blog post -->
                        <article class="post-wrap post-single">
                            <div class="post-media">
                                <a href="{{ asset('public/upload/images/article/' . $articleSingle->image) }}" data-gal="prettyPhoto"><img
                                src="{{ asset('public/upload/images/article/' . $articleSingle->image) }}" alt="{{ $articleSingle->name }}"></a>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">{{ $articleSingle->name }}</a></h2>
                                <div class="post-meta">
                                    Ngày đăng: {{ date('d/m/Y',strtotime($articleSingle->updated_at)) }} 
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    {!! $articleSingle->content !!}
                                </div>
                            </div>
                        </article>
                        <!-- /Blog post -->

                        
                        <!-- PAGE -->
                        <section class="page-section no-padding-bottom">
                            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i
                                        class="fa fa-file-text-o"></i>See All</a>
                            <h4 class="block-title"><span>Bình luận </span></h4>
                            <!-- Comments -->
                            <div class="comments">
                                <div data-width="100%" class="fb-comments" data-href="{{ $url }}" data-numposts="5"></div>
                            </div>
                            <!-- /Comments -->
                        </section>
                        <!-- /PAGE -->

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
@endsection