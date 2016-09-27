<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Softral</title>
    <!--=== Fa Fonts CSS CDN===-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!--=== Bootstrap CSS ===-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

    <!--=== Other CSS ===-->
    <link rel="stylesheet" href="css/styles_custom.css" type="text/css">

    <!--=== Jquery Scripts ===-->
    <!--<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!--=== Bootstrap Scripts ===-->
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--=== Slider CSS ===-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

    <!--=== Slider Js ===-->
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".regular").slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                mobileFirst: true,
                //fade: true,
                focusOnSelect: true,
                verticalSwiping: true,
            });
        });
    </script>

</head>
<body>
<header>
        <section style="margin-bottom:-20px;">
            <section class="wrap">
                <div class="container-fluid">
                    <div class="col-md-3">
                        <div class="h_left">
                            <div class="logo text-center">Softral<sub>TM</sub></div>
                        </div>
                    </div>
                    <div class="col-md-9 text-center">
                        <div class="h_right">
                            <div class="src_form">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3">Search Text</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Search">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword3">Category</label>
                                        <select class="form-control">
                                            <option>Type one</option>
                                            <option>Type Two</option>
                                            <option>Type Three</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-default sbmt"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clr">&nbsp;</div>

            <!--=== Navigation Bar ===-->
            <div class="h_full bg_black">
                <section class="wrap">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid bg_black">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav uppercase">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li class=""><a href="#">About</a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Jobs<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Job-1</a></li>
                                            <li><a href="#">Job-2</a></li>
                                            <li><a href="#">Job-3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">CHAT</a></li>
                                    <li><a href="#">Members</a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Page 1-1</a></li>
                                            <li><a href="#">Page 1-2</a></li>
                                            <li><a href="#">Page 1-3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Softral<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">My Projects</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Profile</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="#"><span class=""></span> My Softral</a></li>-->
                                    <li><a href="#" class="sign"><span>Login</span></a></li>
                                    <li><a href="#" class="sign_1"><span>Sign Up</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </section>
            </div>
        </section>
    </header>

    <!-- Body Starts From Here-->
    <article class="bg_gray_super_light">
            <!-- Slider ===============================================================-->
            <div class="container-fluid no-padding no-margin">
                <section class="regular slider">
                    <div class="relative">
                        <img src="images/banner/ban-0.jpg" class="img-responsive">
                        <div class="caption text-center ">
                            <h1 class="uppercase red_dark text_shadow_2 text-center size-4-vw"><span>Find The Software Engineer</span></h1>
                            <p class="size-2-vw normal text_shadow_1 red_site">_________for__________</p>
                            <p class="size-3-vw black uppercase moskNormal400"><span>Your Business Or Dream Project</span><br><span>Join Us And Grow With Us </span></p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="images/banner/ban-01.jpg" class="img-responsive">
                        <div class="caption text-center">
                            <h1 class="uppercase red_dark text_shadow_2 text-center size-4-vw">Find The Template Designer</h1>
                            <p class="size-2-vw normal red_site">_________for__________</p>
                            <p class="size-3-vw gray text_shadow_2 uppercase moskNormal400">Your Business Or Dream Project<br>Join Us And Grow With Us</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="images/banner/ban-02.jpg" class="img-responsive">
                        <div class="caption text-center">
                            <h1 class="uppercase red_dark text_shadow_2 text-center size-4-vw"><span>Find The Content Designer</span></h1>
                            <h1 class="size-2-vw normal red_site">_________for__________</h1>
                            <p class="size-3-vw gray text_shadow_2 uppercase moskNormal400"><span>Your Business Or Dream Project</span><br><span>Join Us And Grow With Us</span></p>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="images/banner/ban-03.jpg" class="img-responsive">
                        <div class="caption text-center">
                            <h1 class="uppercase red_site text_shadow_2 text-center size-4-vw"><span>Find The SEO Specialist</span></h1>
                            <p class="size-2-vw normal red_site">_________for__________</p>
                            <p class="size-3-vw gray text_shadow_2 uppercase moskNormal400"><span>Your Business Or Dream Project</span><br><span>Join Us And Grow With Us</span></p>
                        </div>
                    </div>
                    <!--<div>
                        <img src="images/banner/ban-04.jpg">
                    </div>-->
                </section>

                <!-- Creeping text -->
                <section class="bg_red_dark" style="margin: -30px 0 30px 0;">
                    <section class="wrap">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <marquee>
                                        <p class="size-16 moskThin100 white no-padding no-margin"> Here Must be a Creeping Line - 1 &boxVH; Here Must be a Creeping Line - 2 &boxVH; Here Must be a Creeping Line - 3 &boxVH; Here Must be a Creeping Line - 4</p>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <!--<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>-->

            </div>
            <!-- Slider Ends Here-->

            <!-- Content -->
            <section class="wrap">
                <div class="container-fluid">
                    <!-- Left Content-->
                    <div class="col-md-7">
                        <div class="tree">
                          <h1> Content Heading<sup> (If Necessary)</sup></h1>
                          <div>
                              <p> Content Will be placed here</p>
                          </div>
                        </div>

                        <div class="h_space_20"></div>

                        <div class="tree">
                          <div>
                              <div class="demo_tree"> Tree Will be placed here</div>
                          </div>
                        </div>
                    </div>

                    <!-- For Videos-->
                    <div class="col-md-5">
                        <div class="video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/4mJO4ec_fFI" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/P6IZMBMEfWU" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
    </article>

    <!-- Creeping text -->
    <!--<article class="bg_red_dark">
        <section class="wrap">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <marquee>
                            <p class="size-16 moskThin100 white no-padding no-margin"> Here Must be a Creeping Line - 1 &boxVH; Here Must be a Creeping Line - 2 &boxVH; Here Must be a Creeping Line - 3 &boxVH; Here Must be a Creeping Line - 4</p>
                        </marquee>
                    </div>
                </div>
            </div>
        </section>
    </article>-->

    <!-- Bottom Boxes -->
    <article class="bg_img">
        <section class="bg_trans_black_30">
            <section class="wrap">
                <div class="container-fluid">
                    <div class="col-md-12 bottom_box">
                        <div class="row">
                        <!--<div class="col-md-12 bg_trans_white_70">-->
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-1.jpg" class="img-responsive"></div></div>
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-2.jpg" class="img-responsive"></div></div>
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-3.jpg" class="img-responsive"></div></div>
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-4.jpg" class="img-responsive"></div></div>
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-5.jpg" class="img-responsive"></div></div>
                            <div class="col-md-2 "><div class="box1"><img src="images/bottom_slider/ban-6.jpg" class="img-responsive"></div></div>
                        <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </article>

    <footer class="padding-3-0-0-0-prcnt">
        <section class="wrap">
            <div class="container-fluid">
                <div class="col-md-4">
                    <h2 class="red_site uppercase text_shadow_2">&blk14; <!--&#x02591;&#9617;-->Softral</h2>
                    <p class="gray size-12 text_shadow_2 tahoma line-h-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12 border_bottom_1 text-right social">
                        <a href="#"><i class="fa fa-facebook size-25" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter size-25" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram size-25" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube size-25" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-12 text-right f_nav uppercase text_shadow_2">
                        <a href="#">About Us</a> |
                        <a href="#">Contact Us</a> |
                        <a href="#">Escrow</a> |
                        <a href="#">Contracts</a> |
                        <a href="#">Privacy Policy</a> |
                        <a href="#">Advisory Board</a> |
                        <a href="#">News</a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" copyright_parent">
            <div class="container-fluid text-center ">
                <div class="copyright size-12 tahoma">&copy; <?php echo date('Y',time()); ?> Softral. All Rights Reserved</div>
            </div>
        </section>
    </footer>
</body>
</html>