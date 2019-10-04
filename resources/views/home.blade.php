@extends('layouts.master')
@section('title', 'Berg Travel')
@section('content')
<!--Hotel-->
<section class="intro" >
    <!-- Down Arrow -->
    <a href="#welcome" class="down_block go"><i class="fa fa-angle-down"></i></a>
    <!-- Wrapper -->
    <div class="intro_wrapper">
        <!-- Item -->
        <div class="intro_item">
            <!-- Over -->
            <div class="over" data-opacity="0.3" data-color="#292929"></div>
            <div class="into_back into_zoom image_bck" data-image="images/trav4.jpg"></div>
            <div class="text_content">
                <div class="intro_text intro_text_lc text-right text_up">
                    <span class="great_title great_title_big">Grand Italy</span>
                    <span class="great_subtitle great_subtitle_big">Italy</span>
                    <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</span>
                    <span><a href="#" class="btn btn-white">See More</a><a href="#" class="btn btn-white">Purchase</a></span>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="intro_item">
            <!-- Over -->
            <div class="over" data-opacity="0.3" data-color="#292929"></div>
            <div class="into_back into_zoom image_bck" data-image="images/trav3.jpg"></div>
            <div class="text_content">
                <div class="intro_text intro_text_lc text-right text_small text_up">
                    <span class="great_title great_title_big">Tuscany</span>
                    <span class="great_subtitle great_subtitle_big">Italy</span>
                    <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</span>
                    <span><a href="#" class="btn btn-white">See More</a><a href="#" class="btn btn-white">Purchase</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End -->
</section>
<!-- Intro End -->
<!-- Slider Border -->
<div class="after_slider_border"></div>
<!-- Offers -->
<section class="boxes reviews" id="offers">
    <div class="container-fluid">
        <!-- Title -->
        <h4 class="sml_abs_title in">Best Offers</h4>
        <!-- Wrapper -->
        <div class="mid_wrapper">
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/pool.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>Grand Turkey <i>Turkey</i></h3>
                    <p><span class="btn">8 days / $2,000</span></p>
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/tr2.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>UK Trip <i>England</i></h3>
                    <p><span class="btn">13days / $5,000</span></p>
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/tr3.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>Grand Italy <i>Italy</i></h3>
                    <p><span class="btn">8 days / $3,000</span></p>
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/tr4.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>Swiss Alps Trip <i>Austria</i></h3>
                    <p><span class="btn">10 days / $6,000</span></p>
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/tr5.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>Grand Spain Madrid <i>Spain</i></h3>
                    <p><span class="btn">8 days / $3,000</span></p>
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom height400">
                <div class="image_over image_bck" data-image="images/tr6.jpg"></div>
                <a href="#" class="box_link"></a>
                <div class="box_content">
                    <h3>East Europe <i>Czech</i></h3>
                    <p><span class="btn">10 days / $4,000</span></p>
                </div>
            </div>
        </div>
        <!-- Wrapper End -->
    </div>
</section>
<!-- Offers End -->
<!--Sales-->
<section class="boxes" id="sales">
    <div class="container-fluid">
        <!-- Title -->
        <h4 class="sml_abs_title wow fadeInUp">Sales</h4>
        <div class="row">
            <!-- col -->
            <div class="col-md-12 bordered_block grey_border image_bck" data-image="images/trav1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft">
                            <span class="great_title">Grand Thailand</span>
                            <span class="great_subtitle great_subtitle_big">Thailand</span>
                            <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</span>
                            <br />
                            <a href="#" class="btn btn-white">Purchase</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Col End -->
            <!-- col -->
            <div class="col-md-12 bordered_block grey_border image_bck" data-image="images/trav2.jpg">
                <!-- Over -->
                <div class="over" data-opacity="0.5" data-color="#292929"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 wow fadeInUp text-center">
                            <span class="great_title">Grand Turkey</span>
                            <span class="great_subtitle great_subtitle_big">Turkey</span>
                            <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</span>
                            <br />
                            <a href="#" class="btn btn-white">Purchase</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Col End -->
            <!-- col -->
            <div class="col-md-12 bordered_block grey_border image_bck" data-image="images/trav3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6 wow fadeInRight text-right">
                            <span class="great_title">Grand Italy</span>
                            <span class="great_subtitle great_subtitle_big">Italy</span>
                            <span class="into_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</span>
                            <br />
                            <a href="#" class="btn btn-white">Purchase</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Col End -->
        </div>
        <!-- Row End -->
    </div>
</section>
<!--Sales End-->
<!--News-->
<section class="boxes" id="news">
    <div class="container-fluid">
        <div class="row">
            <!-- col -->
            <div class="col-md-12 bordered_block grey_border">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">News Articles & Blogs</h2>
                        <div class="col-md-12 col-xs-12">
                            <div class="masonry row">
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/fo2.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/fash10.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/build4.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/bui5.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/fo3.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/fash10.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                                <!--Item-->
                                <div class="col-sm-4 post-snippet masonry-item">
                                    <a href="#">
                                        <img alt="" src="images/fash13.jpg" />
                                    </a>
                                    <div class="inner">
                                        <a href="#">
                                            <h4 class="title">Excepteur sint occaecat cupidatat non proident</h4>
                                            <span class="date">November 10, 2015</span>
                                        </a>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <a class="btn btn-default" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Col End -->
        </div>
    </div>
</section>
<!--News End-->
<!--Reviews-->
<section class="boxes reviews" id="reviews">
    <div class="container-fluid">
        <!-- Title -->
        <h4 class="sml_abs_title wow fadeInUp">Reviews</h4>
        <!-- Wrapper -->
        <div class="mid_wrapper">
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face1.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Joe Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face2.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Britney Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face3.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Jessica Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face4.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Tina Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face5.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Anna Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three height400">
                <div class="image_over image_bck" data-image="images/face6.jpg"></div>
                <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
                <div class="box_content">
                    <h3>Simona Doe</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
        </div>
        <!-- Wrapper End -->
    </div>
</section>
<!-- Reviews End -->
<!-- Contacts -->
<section class="boxes" id="contacts">
    <div class="container-fluid">
        <div class="row">
            <!-- Contacts -->
            <div class="col-md-6 bordered_block image_bck bordered_wht_border white_txt" data-image="images/trav4.jpg">
                <div class="over" data-opacity="0.6" data-color="#292929"></div>
                <div class="col-md-12 simple_block text-left">
                    <h3>Contacts</h3>
                    <span class="contacts_ti ti-mobile"></span>+11 (0) 200 1111 001<br />
                    <span class="contacts_ti ti-mobile"></span>+11 (0) 200 1111 002<br />
                    <span class="contacts_ti ti-email"></span><a href="mailto:support@theberg.com">support@theberg.com</a><br />
                    <span class="contacts_ti ti-location-pin"></span>Australia place nice, RD nice DHA Road, state pace 786
                    <h4 class="newsletter_title">
                    Stay informed with our newsletter
                    </h4>
                    <input placeholder="Enter Your Email" class="form-control form-opacity no-margin newsletter_input" type="email" required/>
                    <button type="submit" class="btn btn-white">
                    Subscribe
                    </button>
                    <div class="form-tip">
                        <i class="fa fa-info-circle"></i> Please trust us, we will never send you spam
                    </div>
                </div>
            </div>
            <!-- Write Us -->
            <div class="col-md-6 bordered_block image_bck bordered_wht_border white_txt" data-image="images/trav2.jpg">
                <div class="over" data-opacity="0.6" data-color="#292929"></div>
                <div class="col-md-12 simple_block text-left">
                    <h3>Write Us</h3>
                    <form id="write_us" class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" class="form-control form-opacity" placeholder="Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="surname" class="form-control form-opacity" placeholder="Surname*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="city" class="form-control form-opacity" placeholder="City">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="country" class="form-control form-opacity" placeholder="Country">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="email" class="form-control form-opacity" placeholder="E-mail*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="phone" class="form-control form-opacity" placeholder="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Message" id="message" class="form-control form-opacity"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-white submit" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Write Us End -->
        </div>
        <!-- Row End -->
    </div>
</section>
<!-- Contacts End -->
@endsection
