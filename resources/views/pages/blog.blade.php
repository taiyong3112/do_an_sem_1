@extends('layouts.main')

@section('main')

<!-- blog-banner start-->
<section id="blog-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="common-banner-text wow zoomIn" data-wow-duration="2s">
            <div class="common-heading">
              <h1>Blog</h1>
            </div>
            <div class="commom-sub-heading">
              <h6>
                <a href="index.html">Home</a>
                <span>/</span>
                <a href="#!">Blog</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  blog-banner end-->
  <section id="blog-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="1s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/1.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">What Happened My First Trip Alone</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="2s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/2.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">10 Common Questions about Solo Travel
                  </a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="3s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/3.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">The Amazing Difference a Year of Travelling</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="1s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/4.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">What Happened My First Trip Alone</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="2s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/5.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">10 Common Questions about Solo Travel
                  </a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="3s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/6.png" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail')}}">The Amazing Difference a Year of Travelling</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{route('blog-detail')}}"><img src="{{url('public')}}/images/blog/ic.png" alt="img" /></a>
                    <p>By:<a href="{{route('blog-detail')}}">John Doe</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p><a href="{{route('blog-detail')}}">06 Sep, 2019</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- pagination start -->
      <div class="blog-pagination d-flex justify-content-center text-center">
        <div class="wrapper blog-wrapper">
          <p id="pagination-here"></p>
        </div>
      </div>
      <!-- pagination end -->
    </div>
  </section>

@stop