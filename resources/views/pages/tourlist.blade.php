@extends('layouts.main')

@section('main')
	<!-- tour-banner start-->
    <section id="tour-packes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Tour Packges</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="index.html">Home</a>
                                <span>/</span>
                                <a href="#!">Tour Packges</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 search-main">
                    <nav class="navbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Search Tour</a>
                            </li>
                            <li>
                                <a href="#">Hotel</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="option-select">
                        <div class="col-md-3">
                            <select name="destination" id="input" class="form-control" required="required">
                                <option value="">Destination</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="start-date" class="form-control" placeholder="Start Date">
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="end-date" class="form-control" placeholder="End Date">
                        </div>
                        <div class="col-md-3">
                            <select name="hotel" id="input" class="form-control" required="required">
                                <option value="">Hotel</option>
                            </select>
                        </div>
                    </div>
                    <div class="search-btn pull-right">
                        <a href="" type="button" class="btn btn-default">SEARCH NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  tour-banner end-->
    <!-- tour start-->
    <section id="tour-des">
        <div class="content-box can-if text-center">
            <h6>Travel Express Provide</h6>
            <h2>Select your <span>Destination</span></h2>
            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin
                sed augue sed neque ultricies condimentum. </p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($tours as $tr)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">
                        <div class="des-img-1">
                            <a href="{{route('tour-detail')}}"><img src="{{url('public')}}/images/tours/d-1.png" alt="img"></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="tour-details.html">{{$tr->name}}</a></h6>
                                <p><a href="{{route('tour-detail')}}">{{$tr->duration}} Ngày</a></p>
                            </div>
                            <div class="real-dat-para">
                                <p>{{$tr->summary}}</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                                        Now</a>
                                </div>
                                <div class="start-icon-des">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Model box-->

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="model-details">
                                    <h5>Travel Booking Form</h5>
                                    <div class="mdel-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="name">First name</label>
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    id="last-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="duse">Departure Date</label>
                                                <input type="text" name="date" class="form-control" id="duse">
                                            </div>
                                            <div class="form-group">
                                                <label for="deate-area-2">Return Date</label>
                                                <input type="text" name="date" class="form-control xDateContainer"
                                                    id="deate-area-2">
                                            </div>
                                            <div class="form-group mainm-sel">
                                                <label for="text" id="form-control">Guest:</label>
                                                <div class="select-box">
                                                    <span class="sec-po"></span>
                                                    <select id="text">
                                                        <option value="0">Number of Guest</option>
                                                        <option value="1">2</option>
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                    </select>
                                                    <div class="serv-ivmf-2">
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        

                                            <div class="sunb-btn-mod">
                                                <a href="#!" class="btn btn-3 widet-2">BOOKING NOW</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- start discount -->
    <div class="discount-des">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-offset-2">
                    <div class="discount-main-section">
                        <div class="discount-cover text-center">
                            <h6>Summer Special</h6>
                            <p>
                                <span>25%</span> off
                            </p>
                            <h6>Spend the best vacation with us</h6>
                            <h2>The nights of Thailand</h2>
                        </div>
                        <div class="discount-span">
                            <span>4days / 5nights</span>
                        </div>
                        <div class="discount-btn">
                            <a href="" class="btn btn-default">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end discount -->
    <!-- start team -->
    <div class="team-main">
        <div class="team-content text-center">
            <h6>Travel Guides, Tips & Advice</h6>
            <h2>Travel <span>Agents</span></h2>
            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team -->
    <!-- start video -->
    <section id="home-testimonial-top">
    <div class="content-box text-center">
      <h6 class="color-1">Motion</h6>
      <h2 class="color-2">Watch Our <span> Video Tour</span></h2>
    </div>
    </section>
    <!-- testimonial-top end-->

    <!-- testimonial start-->
    <section id="home-testimonial">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="vt-img">
                <img src="{{url('public')}}/images/video.png" alt="img" />
              </div>
              <div class="video-play-test">
                <a href="https://www.youtube.com/watch?v=V43FgG7kE00" class="video-play-btn video-link venobox"
                  data-autoplay="true" data-vbtype="video"><i class="fas fa-play"></i></a>
              </div>
            </div>
          </div>
          <div class="test-slider-home-1 owl-carousel owl-theme">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-1.jpg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-2.jpg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-3.jpg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- video and review end -->
    <!-- contact begin -->
      <!-- contact start-->
    <section id="home-contact">
        <div class="map-inner">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
            width="600" height="450" allowfullscreen=""></iframe>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="contact-cover">
                <div class="contact-heading">
                  <h2>Do You Have Any Questions?</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    vehicula volutpat porta. Cras in vulputate est
                  </p>
                </div>
                <div class="info-office">
                  <div class="phone-deta">
                    <div class="phone-info">
                      <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="sams">
                      <p>+124 (2486) 444</p>
                      <p>+133 (4444) 878</p>
                    </div>
                  </div>
                  <div class="email-deta">
                    <div class="phone-info">
                      <i class="far fa-paper-plane"></i>
                    </div>
                    <div class="sams">
                      <p>mail@example.com</p>
                      <p>info@mail.com</p>
                    </div>
                  </div>
                </div>
                <div class="contact-form">
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name:" required />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email:" required />
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group nessage-text">
                          <textarea name="message" id="message" rows="6" class="form-control"
                            placeholder="Enter Your Message:" required></textarea>
                        </div>
                        <div class="contact-sub-btn">
                          <a href="#!" class="btn submit contactsuccess">Submit</a>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="success-msg alert alert-success" style="display: none;">
                    <strong>Success!</strong> Email Send Succesfully.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- contact end-->


@stop