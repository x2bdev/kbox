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
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-3w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-1w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-2w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tab 2 -->
                                    <div class="tab-pane fade in active" id="tab-s2">
                                        <div class="recent-post">
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-1w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-2w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="pull-left media-link" href="#">
                                                    <img class="media-object" src=" {{ asset('public/frontend/assets/img/preview/blog/recent-post-3w.jpg') }}" alt="">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-meta">
                                                        6th June 2014
                                                        <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                    </div>
                                                    <h4 class="media-heading"><a href="#">Standard Blog Post Header</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <a class="btn btn-theme btn-theme-transparent btn-theme-sm btn-block" href="#">More Products</a>
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
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-8.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-9.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-10.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-11.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-12.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-13.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-14.jpg') }}" alt="//"></a></li>
                                <li><a href="#"><img src=" {{ asset('public/frontend/assets/img/preview/flickr/flickr-feed-15.jpg') }}" alt="//"></a></li>
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
                        <!-- widget -->
                        <div class="widget">
                            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i class="fa fa-twitter"></i>Follow Us</a>
                            <h4 class="widget-title"><span>Twitter</span></h4>
                            <div class="recent-tweets">
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <span class="media-object pull-left"><i class="fa fa-twitter"></i></span>
                                    <div class="media-body">
                                        <p><a href="#">@twittername</a> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        <small>1 minute ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /widget -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                        <!-- Blog posts -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <a href="assets/img/preview/blog/blog-post-1.jpg') }}" data-gal="prettyPhoto"><img src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Sample Post With Featured Image</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>
                        <!-- / -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <div class="owl-carousel img-carousel">
                                    <div class="item"><a href="assets/img/preview/blog/blog-post-2.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-2.jpg') }}" alt=""/></a></div>
                                    <div class="item"><a href="assets/img/preview/shop/blog-post-3.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-3.jpg') }}" alt=""/></a></div>
                                    <div class="item"><a href="assets/img/preview/shop/blog-post-4.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-4.jpg') }}" alt=""/></a></div>
                                    <div class="item"><a href="assets/img/preview/shop/blog-post-1.jpg') }}" data-gal="prettyPhoto"><img class="img-responsive" src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-1.jpg') }}" alt=""/></a></div>
                                </div>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standard Blog Post with Image Slider Header</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>
                        <!-- / -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <img src=" {{ asset('public/frontend/assets/img/preview/blog/audio-post.jpg') }}" alt="">
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standard Sound Blog Post Header</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>
                        <!-- / -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <a href="http://youtu.be/kg-clmeHBrM" data-gal="prettyPhoto" class="media-link">
                                    <span class="btn btn-play"><i class="fa fa-play"></i></span>
                                    <img src=" {{ asset('public/frontend/assets/img/preview/blog/blog-post-3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standard Video Blog Post Header</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>
                        <!-- / -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <blockquote>
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. </p>
                                    <footer><cite title="Source Title">ISA MERCAN</cite></footer>
                                </blockquote>
                            </div>
                            <div class="post-header">
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>
                        <!-- / -->
                        <article class="post-wrap">
                            <div class="post-media">
                                <!-- 16:9 aspect ratio -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/113101251"></iframe>
                                </div>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standard Vimeo Video Blog Post Header</a></h2>
                                <div class="post-meta">By <a href="#">author name here</a> / 6th June 2014 / in <a href="#">Design</a>, <a href="#">Photography</a> / <a href="#">27 Comments</a> / 18 Likes / <a href="#">Share This Post</a></div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante. Quisque suscipit mauris ipsum, eu mollis arcu laoreet vel. In posuere odio sed libero tincidunt commodo a vel ipsum. Mauris fringilla tellus aliquam, egestas sem in, malesuada nunc. Etiam condimentum felis odio, vel mollis est tempor non...</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-read-more"><a href="#" class="btn btn-theme btn-theme-transparent btn-icon-left"><i class="fa fa-file-text-o"></i>Read more</a></span>
                            </div>
                        </article>

                        <!-- /Blog posts -->

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
@endsection