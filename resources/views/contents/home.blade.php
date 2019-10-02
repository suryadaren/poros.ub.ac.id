@extends('layouts.master')

@section('title', 'Home')

@section('content')

<!-- Home Section
    ================================================== -->
    <div id="tf-home" class="slider">
        <div class="overlay"> <!-- Overlay Color -->
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/bg/slider01.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>Websites / Branding / Interactive</h1>
                                <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                                <a href="#tf-works" class="scroll goto-btn text-uppercase">View Our Works</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/bg/slider02.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>Quality / Affordability / Timely</h1>
                                <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                                <a href="#tf-contact" class="scroll goto-btn text-uppercase">Hire Us Now</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/bg/slider03.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <h1>We Delivery Our Promise.</h1>
                                <p class="lead">We create beautiful, innovative and  effective handcrafted brands & website.</p>
                                <a href="#tf-about" class="scroll goto-btn text-uppercase">Learn More</a> <!-- Link to your portfolio section -->
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>
                  </div>
            </div>
        </div><!-- End Overlay Color -->
    </div>

    <!-- Intro Section
    ================================================== -->
    <div id="tf-intro" class="slider">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                    <img src="img/logo-w.png" class="intro-logo img-responsive" alt="free-template"> <!-- Your company logo in white -->
                    <p>Ethanol Portfolio Template is a clean and simple website designed layout for multi-purpose options, this is perfect for any web works. This Template built with bootstrap 3.3.2 and it is totally mobile resposnive. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div>


    <!-- Departemen Section
    ================================================== -->
    <div id="tf-department">

        <div class="container">
            <div class="section-header">
                <h2>Department of <span class="highlight"><strong>POROS</strong></span></h2>
                <h5><em>Open Source Open Mind !</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                    <span class="fa fa-desktop"></span>
                                    {{$dep[0]->name}}
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #2 -->
                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                    <span class="fa fa-pencil"></span>
                                    {{$dep[1]->name}}
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #3 -->
                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                    <span class="fa fa-space-shuttle"></span>
                                    {{$dep[2]->name}}
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-6"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->
                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                                <h4>{{$dep[0]->name}}</h4>
                                <p>{{$dep[0]->description}}</p>
                                <img src="img/tab01.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                                <h4>{{$dep[1]->name}}</h4>
                                <p>{{$dep[1]->description}}</p>
                                <img src="img/tab02.png" class="img-responsive" alt="...">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                                <h4>{{$dep[2]->name}}</h4>
                                <p>{{$dep[2]->description}}</p>
                                <img src="img/tab03.png" class="img-responsive" alt="...">
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>

    <!-- Division Section
    ================================================== -->
    <div id="tf-division">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>D I V I S I O N</span></h2>
                <h5><em>Keminatan Dalam Departmen LITBANG</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <div class="media service"> <!-- Service #1 -->
                        <div class="media-body">
                            <h4 class="media-heading">{{$div[0]->name}}</h4>
                            <p>{{$div[0]->description}}</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-venus-mars"></i>
                        </div>
                    </div><!-- End Service #1 -->

                    <div class="media service"> <!-- Service #2 -->
                        <div class="media-body">
                            <h4 class="media-heading">{{$div[1]->name}}</h4>
                            <p>{{$div[1]->description}}</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-magic"></i>
                        </div>
                    </div><!-- End Service #2 -->

                    <div class="media service"> <!-- Service #3 -->
                        <div class="media-body">
                            <h4 class="media-heading">{{$div[2]->name}}</h4>
                            <p>{{$div[2]->description}}</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-camera-retro"></i>
                        </div>
                    </div> <!-- End Service #3 -->
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-bicycle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$div[3]->name}}</h4>
                            <p>{{$div[3]->description}}</p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-android"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$div[4]->name}}</h4>
                            <p>{{$div[4]->description}}</p>
                        </div>
                    </div> <!-- end Service #5 -->

                </div><!-- end Right Content Col 6 -->
 
            </div><!-- end row -->

        </div><!-- end container -->
    </div>

    <!-- Member Section
    ================================================== -->
    <div id="tf-member">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Awesome People Behind <span class="highlight"><strong>ethanol</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

             <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->

                @foreach($official as $off)

                <div class="item"><!-- Team #1 -->
                    <div class="hover-bg"> <!-- Team Wrapper -->
                        <div class="hover-text off"> <!-- Hover Description -->
                            <p>{{ $off->quote }}.</p>
                        </div><!-- End Hover Description -->
                        <img src="img/team/{{ $off->user->photo }}" alt="..." class="img-responsive"> <!-- Team Image -->
                        <div class="team-detail text-center">
                            <h3>{{ $off->user->name }}</h3>
                            <p class="text-uppercase">{{ $off->position }}</p>
                            <ul class="list-inline social"> 
                                <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                            </ul>
                        </div>
                    </div><!-- End Team Wrapper -->
                </div><!-- End Team #1 -->

                @endforeach

            </div> <!-- end team carousel wrapper -->

        </div> <!-- container -->
    </div>

    

    <!-- Product Section
    ================================================== -->
    <div id="tf-product">
        <div class="container">
            <div class="section-header">
                <h2>Our Work is <span class="highlight"><strong>Incredible</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>

            <div class="text-center">
                <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".1">Design</a></li>
                    <li><a href="#" data-filter=".2">Mobile</a></li>
                    <li><a href="#" data-filter=".3">OS</a></li>
                    <li><a href="#" data-filter=".4">Security</a></li>
                    <li><a href="#" data-filter=".5">Web</a></li>
                </ul><!-- End Portfolio Filter Categories -->
            </div>

        </div><!-- End Container -->

        <div class="container-fluid"> <!-- fluid container -->
             <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->

                @foreach($prod as $prod)
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 brand {{$prod->division_id}}"> <!-- Works #1 col 3 -->
                            <div class="box"> 
                                <div class="hover-bg">
                                    <div class="hover-text off">
                                        <a title="Logo Identity Design" href="img/portfolio/01@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/01@2x.jpg">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a onclick="window.open('{{$prod->link}}')"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                                    </div> 
                                    <img src="img/portfolio/01.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                                </div>
                                    <h5>{{$prod->name}}<br><small><em>{{$prod->division->name}}</em></small></h5>
                            </div>
                        </div><!-- end Works #1 col 3 -->
                @endforeach   

            </div> <!-- End Row -->

        </div> <!-- End Container-Fluid -->
    </div>


    <!--  Blog Section
    ================================================== -->
    <div id="tf-blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    
                    @foreach($blog as $blog)

                    <div class="col-md-6"> <!-- Left content col 6 -->

                        <div class="post-wrap"> <!-- Post Wrapper -->
                            <div class="media post"> <!-- post wrap -->
                                <div class="media-left"> 
                                    <a href="#"> <!-- link to your post single page -->
                                      <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p class="small">{{$blog->created_at}}</p>
                                    <a href="#">
                                        <h5 class="media-heading"><strong>{{$blog->title}}</strong></h5>
                                    </a>
                                    <p>{{$blog->description}}</p>
                                </div>
                            </div><!-- end post wrap -->
                            
                            <div class="post-meta"> <!-- Meta details -->
                                <ul class="list-inline metas pull-left"> <!-- post metas -->
                                    <li><a href="#">{{$blog->user->name}}</a></li> <!-- meta author -->
                                    <li><a href="#">{{ $blog->comments_count }}</a></li> <!-- meta comments -->
                                    <li><a href="#">Read More</a></li> <!-- read more link -->
                                </ul>
                                <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                    <li><i class="fa fa-heart"></i> {{$blog->like}} </li> <!-- like button -->
                                    <li><i class="fa fa-eye"></i>  {{$blog->views}} </li> <!-- no. of views -->
                                </ul>
                            </div><!-- end Meta details --> 
                        </div><!-- end Post Wrapper -->


                    </div> <!-- end Left content col 6 -->
                    @endforeach
                    
                </div><!-- end row -->

                <div class="text-center">
                    <a href="#" class="btn btn-primary tf-btn color">Load More</a>
                </div>                
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div>

    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Feel Free to <span class="highlight"><strong>Contact Us</strong></span></h2>
                <h5><em>We design and build functional and beautiful websites</em></h5>
                <div class="fancy"><span><img src="img/favicon.ico" alt="..."></span></div>
            </div>
        </div><!-- end container -->

        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4>rudhisasmito@gmail.com</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4>+613 0000 0000</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary tf-btn color">Send Message</button> <!-- Send button -->

                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div>


@endsection