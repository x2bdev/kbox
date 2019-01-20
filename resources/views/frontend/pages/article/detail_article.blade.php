@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Blog Post Page</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Blog With Left Sidebar</li>
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
                        <!-- widget search -->
                        <div class="widget">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- /widget search -->
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Woman</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Man</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Dress</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Top Sellers</a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-up"></i></span>
                                        <a href="#">Accessories</a>
                                        <ul class="children active">
                                            <li>
                                                <a href="#">Sweaters & Knits
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Jackets & Coats
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Denim
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Pants
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Shorts
                                                    <span class="count">12</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sale Off</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget shop categories -->
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
                        <!-- widget archives -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Archives</h4>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">January<span class="count">12</span></a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">February<span class="count">12</span></a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">March<span class="count">12</span></a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">April<span class="count">12</span></a>
                                        <ul class="children">
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="arrow"><i class="fa fa-angle-up"></i></span>
                                        <a href="#">May<span class="count">12</span></a>
                                        <ul class="children active">
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                            <li>
                                                <a href="#">Sample Post Name</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget archive -->
                        <!-- widget flickr feed -->
                        <div class="widget widget-flickr-feed">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="widget-title"><span>Flickr Images</span></h4>
                            <ul>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-8.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-9.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-10.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-11.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-12.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-13.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-14.jpg') }}" alt="//"></a>
                                </li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-15.jpg') }}" alt="//"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /widget flickr feed -->
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
                        <!-- widget tag cloud -->
                        <div class="widget widget-tag-cloud">
                            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i class="fa fa-twitter"></i>Follow
                                Us</a>
                            <h4 class="widget-title"><span>Twitter</span></h4>
                            <div class="recent-tweets">
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et
                                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et
                                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et
                                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /widget tag cloud -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <!-- Blog post -->
                        <article class="post-wrap post-single">
                            <div class="post-media">
                                <a href="assets/img/preview/blog/blog-post-1.jpg') }}" data-gal="prettyPhoto"><img
                                            src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Sample Post With Featured Image</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a
                                            href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27
                                        Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p class="text-xl">Nulla vitae elit libero, a pharetra augue. Cras justo odio,
                                        dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus
                                        magna,...</p>
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in,
                                        laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In
                                        posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus
                                        aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel
                                        mollis est tempor non...</p>
                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada
                                        magna mollis euismod. Curabitur blandit tempus porttitor. Integer posuere erat a
                                        ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus
                                        auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac
                                        cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                        amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta
                                        gravida at eget metus. Sed posuere consectetur est at lobortis. Integer posuere
                                        erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, tellus ac
                                        cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                        amet risus.</p>
                                    <blockquote>
                                        <h4>Fusce gravida interdum eros a mollis.</h4>
                                        <p>Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris
                                            ipsum, eu mollis arcu laoreet vel.</p>
                                    </blockquote>
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in,
                                        laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In
                                        posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus
                                        aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel
                                        mollis est tempor non...</p>
                                </div>
                            </div>
                        </article>
                        <!-- /Blog post -->

                        <!-- About the author -->
                        <div class="about-the-author clearfix">
                            <div class="media">
                                <img class="media-object pull-left" src=" {{ asset('public/frontend/assets/img/preview/blog/avatar-author.jpg') }}"
                                     alt="">
                                <div class="media-body">
                                    <p class="media-category">Administrator</p>
                                    <h4 class="media-heading"><a href="#">Administrator Name Here</a></h4>
                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada
                                        magna mollis euismod. Curabitur blandit tempus porttitor. Integer posuere erat a
                                        ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus
                                        auctor fringilla.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /About the author -->

                        <!-- PAGE -->
                        <section class="page-section">
                            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i
                                        class="fa fa-file-text-o"></i>See All Posts</a>
                            <h2 class="block-title"><span>Related Posts</span></h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="recent-post alt">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img class="media-object"
                                                     src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-5.jpg') }}" alt="">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <div class="media-body">
                                                <p class="media-category"><a href="#">Shoes</a> / <a href="#">Dress</a>
                                                </p>
                                                <h4 class="media-heading"><a href="#">Post Header Here</a></h4>
                                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat
                                                nisl in, laoreet ante.
                                                <div class="media-meta">
                                                    6th June 2014
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-comment"></i>27</a>
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-heart"></i>18</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="recent-post alt">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img class="media-object"
                                                     src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-6.jpg') }}" alt="">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <div class="media-body">
                                                <p class="media-category"><a href="#">Wedding</a> / <a
                                                            href="#">Meeting</a></p>
                                                <h4 class="media-heading"><a href="#">Post Header Here</a></h4>
                                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat
                                                nisl in, laoreet ante.
                                                <div class="media-meta">
                                                    6th June 2014
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-comment"></i>27</a>
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-heart"></i>18</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="recent-post alt">
                                        <div class="media">
                                            <a class="media-link" href="#">
                                                <img class="media-object"
                                                     src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-7.jpg') }}" alt="">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <div class="media-body">
                                                <p class="media-category"><a href="#">Children</a> / <a
                                                            href="#">Kids</a></p>
                                                <h4 class="media-heading"><a href="#">Post Header Here</a></h4>
                                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat
                                                nisl in, laoreet ante.
                                                <div class="media-meta">
                                                    6th June 2014
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-comment"></i>27</a>
                                                    <span class="divider">/</span><a href="#"><i
                                                                class="fa fa-heart"></i>18</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /PAGE -->

                        <!-- PAGE -->
                        <section class="page-section no-padding-bottom">
                            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i
                                        class="fa fa-file-text-o"></i>See All</a>
                            <h4 class="block-title"><span>Comments <span class="thin">(24 Comments)</span></span></h4>
                            <!-- Comments -->
                            <div class="comments">
                                <div class="media comment">
                                    <a href="#" class="pull-left comment-avatar">
                                        <img alt="" src=" {{ asset('public/frontend/assets/img/preview/avatars/avatar-1.jpg') }}" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <p class="comment-meta"><span class="comment-author"><a href="#">Post Comment User Name Here</a> <span
                                                        class="comment-date"> 26 days ago <i
                                                            class="fa fa-flag"></i></span></span></p>
                                        <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla.
                                            Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus
                                            porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                        <p class="comment-reply"><a href="#">Reply this comment</a><i
                                                    class="fa fa-comment"></i></p>
                                        <div class="media comment">
                                            <a href="#" class="pull-left comment-avatar">
                                                <img alt="" src=" {{ asset('public/frontend/assets/img/preview/avatars/avatar-2.jpg') }}"
                                                     class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <p class="comment-meta"><span class="comment-author"><a href="#">Post Comment User Name Here</a> <span
                                                                class="comment-date"> 26 days ago <i
                                                                    class="fa fa-flag"></i></span></span></p>
                                                <p class="comment-text">Donec ullamcorper nulla non metus auctor
                                                    fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur
                                                    blandit tempus porttitor. Integer posuere erat a ante venenatis
                                                    dapibus posuere.</p>
                                                <p class="comment-reply"><a href="#">Reply this comment</a><i
                                                            class="fa fa-comment"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media comment">
                                    <a href="#" class="pull-left comment-avatar">
                                        <img alt="" src=" {{ asset('public/frontend/assets/img/preview/avatars/avatar-3.jpg') }}" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <p class="comment-meta"><span class="comment-author"><a href="#">Post Comment User Name Here</a> <span
                                                        class="comment-date"> 26 days ago <i
                                                            class="fa fa-flag"></i></span></span></p>
                                        <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla.
                                            Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus
                                            porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                        <p class="comment-reply"><a href="#">Reply this comment</a><i
                                                    class="fa fa-comment"></i></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Comments -->
                            <!-- Leave a Comment -->
                            <div class="comments-form">
                                <h4 class="block-title">Submit Your Comment</h4>
                                <form method="post" action="#" name="comments-form" id="comments-form">
                                    <div class="form-group"><input type="text" placeholder="Your name and surname"
                                                                   class="form-control" title="comments-form-name"
                                                                   name="comments-form-name"></div>
                                    <div class="form-group"><input type="text" placeholder="Your email adress"
                                                                   class="form-control" title="comments-form-email"
                                                                   name="comments-formemail"></div>
                                    <div class="form-group"><textarea placeholder="Your message" class="form-control"
                                                                      title="comments-form-comments"
                                                                      name="comments-form-comments" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-theme btn-theme-transparent btn-icon-left"
                                                id="submit"><i class="fa fa-comment"></i> Send Comment
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- /Leave a Comment -->
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