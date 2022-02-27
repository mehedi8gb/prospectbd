@extends('layouts.app')
@section('title')
<title>Blogs</title>
@endsection
@section('content')
<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Medium Image</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts">

                    <article class="post post-medium">
                        <div class="row">

                            <div class="col-md-5">
                                <div class="post-image">
                                    <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">

                                <div class="post-content">

                                    <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2013 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                </div>
                            </div>
                        </div>

                    </article>

                    {{-- <article class="post post-medium">
                        <div class="row">

                            <div class="col-md-5">
                                <div class="post-image">
                                    <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">

                                <div class="post-content">

                                    <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. [...]</p>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2013 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                </div>
                            </div>
                        </div>

                    </article>

                    <article class="post post-medium">
                        <div class="row">

                            <div class="col-md-5">
                                <div class="post-image">
                                    <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">

                                <div class="post-content">

                                    <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2013 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                </div>
                            </div>
                        </div>

                    </article> --}}

                    <ul class="pagination pagination-lg pull-right">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>

                </div>
            </div>

            <div class="col-md-3">
                <aside class="sidebar">

                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <hr />

                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>

                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                            <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <h4>About Us</h4>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

                </aside>
            </div>
        </div>

    </div>

</div>

@endsection
