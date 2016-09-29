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
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" type="text/css">
    <!--=== Slider CSS ===-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <!--=== Other CSS ===-->
    <!--<link media="all" rel="stylesheet" href="css/font-awesome.min.css" type="text/css">-->
    <link rel="stylesheet" href="css/styles_custom.css" type="text/css">
    <link media="all" type="text/css" rel="stylesheet" href="css/haxagon.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/homeycombs.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/video-js.css">

    <!--=== Jquery Scripts ===-->
    <!--<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <!--<script src="js/jquery.min.js" type="text/javascript"></script>-->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--=== Other Scripts ===-->
    <script src="js/video.js" type="text/javascript"></script>
    <script src="js/jquery.homeycombs.js"></script>
    <!--=== Bootstrap Scripts ===-->
    <!--<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>-->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
    <![endif]-->
    <!--<script type="text/javascript">
        $(document).ready(function() {
            $('.honeycombs').honeycombs({
                combWidth: 250,
                margin: 10
            });
        });
    </script>-->
</head>
<body>
<header>
    <section style="margin-bottom:-20px;">
        <section class="wrap">
            <div class="container-fluid">
                <div class="col-md-3">
                    <div class="h_left">
                        <!--<div class="logo text-center">Softral<sub>TM</sub></div>-->
                        <div class="logo text-center">
                            <a href="index.php"><img src="images/logo-1.png" class="img-responsive"></a>
                        </div>
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
                                <li><a href="#" class="sign" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><a href="#" class="sign_1" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
        </div>
    </section>
</header>
<!--=== Modal Login Start =======================-->
<div class="modal fade bs-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content padding-3-3-prcnt bg_trans_white_90" style="margin-top: 35%;">
            <div class="modal-header no-border text-center uppercase">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <!--<h4 class="modal-title tahomabd size-25 black" id="exampleModalLabel"> Softral </h4>-->
                <div class="text-center"><img src="images/logo-1.png" width="170"></div>
            </div>
            <div class="modal-body moskNormal400">
                <form>
                    <!--<div class="form-group">
                        <h4 class="black">Login</h4>
                    </div>-->
                    <div class="form-group">
                        <input type="text" class=" form-control width_full padding-10-7 black inpt_border " style="background: #ffffff !important; margin-bottom: 3px;" id="user_name" placeholder="username" autofocus="autofocus">
                    <!--</div>
                    <div class="form-group">-->
                        <input type="password" class="form-control width_full padding-10-7 black inpt_border " id="user_password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="checkbox pull-left">
                            <label><input type="checkbox" id="remember" name="remember" class="black" checked >Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-danger padding-10-10 btn-block">Login</button>
                        <p class="text-center no-margin margin_top_15 size-12"><a href="#">Having trouble logging in?</a><br>Not a member? <a href="#">Join now</a></p>
                    </div>
                </form>
            </div>
            <!--<div class="clearfix"></div>
            <div class="modal-footer no-border">
                <div class="checkbox pull-left">
                    <label><input type="checkbox" name="optradio" checked >Remember me</label>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger padding-15-10">Login</button>
                <p>Not a member? <a href="#">Join now</a></p>
            </div>-->
        </div>
    </div>
</div>
<!--=== Modal Signup Start =======================-->
<div class="modal fade bs-example-modal-lg" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content padding-3-3-prcnt bg_trans_white_90" style="margin-top: 10%;">
            <!--<div class="modal-header text-center uppercase border_bottom">-->
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <!--<div class="col-md-6 pull-left"><h4 class="modal-title tahomabd size-25 black text-left" id="exampleModalLabel"> Softral </h4></div>-->
                <!--<div class="col-md-6 text-left"><img src="images/logo-1.png" width="170"></div>
                <div class="col-md-6 pull-right lowercase">Already have an account? <button type="submit" class="sign" data-dismiss="modal" data-toggle="modal"  data-target="#loginModal">Login</button></div>-->
            <!--</div>-->
            <div class="modal-body moskNormal400">
                <!--<div class="row no-padding">-->
                    <div class="col-md-12 padding-0-0-5-0">
                        <div class="col-md-6 text-left"><img src="images/logo-1.png" width="170"></div>
                        <div class="col-md-6 text-right lowercase">Already have an account? <button type="submit" class="sign" data-dismiss="modal" data-toggle="modal"  data-target="#loginModal">Login</button></div>
                    </div>
                    <div class="col-md-12"><div class="border_bottom">&nbsp;</div></div>
                    <div class="col-md-12 text-center" style="padding: 2% 0 2% 0 !important;">
                        <h1 class="size-18 line-h-26 tahomabd">Let's get started!<br> First, tell us what you're looking for.</h1>
                    </div>
                    <div class="col-md-12">

                        <!--<div class="col-md-5 text-center">
                            <div class="type_box_1">
                                <div class="white type_box_inner">
                                    <div><i class="fa fa-user size-4-vw"></i></div>
                                    <h2 class="size-2-5-vw">Buyer</h2>
                                    <p class="size-1-vw">Find Freelance projects and grow your business</p>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-md-5 text-center">
                            <div class="type_box_circle pull-right" data-dismiss="modal" data-toggle="modal"  data-target="#sellerModal">
                                <div class="white type_box_inner">
                                    <div><i class="fa fa-user size-50"></i></div>
                                    <h2 class="size-26">Seller</h2>
                                    <p class="size-12">Find Freelance projects and grow your business</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center relative">
                            <svg height="200" width="100%" >
                                <line x1="50%" y1="0" x2="50%" y2="100%" style="stroke:rgb(150,0,0);stroke-width:0.5" />
                                <line x1="45%" y1="20%" x2="45%" y2="80%" style="stroke:rgb(100,100,100);stroke-width:1" />
                                <line x1="55%" y1="20%" x2="55%" y2="80%" style="stroke:rgb(100,100,100);stroke-width:1" />
                            </svg>
                        </div>
                        <div class="col-md-5 text-center">
                            <div class="type_box_circle pull-left" data-dismiss="modal" data-toggle="modal"  data-target="#buyerModal">
                                <div class="white type_box_inner">
                                    <div><i class="fa fa-user size-50"></i></div>
                                    <h2 class="size-26">Buyer</h2>
                                    <p class="size-12">Find, Collaborate with, and pay an expert</p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-5 text-center">
                            <div class="type_box_2">
                                <div class="white type_box_inner">
                                    <div><i class="fa fa-user size-4-vw"></i></div>
                                    <h2 class="size-2-5-vw">Seller</h2>
                                    <p class="size-1-vw">Find, Collaborate with, and pay an expert</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                <!--</div>-->
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer no-border">
                <!--<div class="checkbox pull-left">
                    <label><input type="checkbox" name="optradio" checked >Remember me</label>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger padding-15-10">Login</button>
                <p>Not a member? <a href="#">Join now</a></p>-->
            </div>
        </div>
    </div>
</div>
<!--===== Modal seller Form start==================-->
<div class="modal fade bs-example-modal-lg" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content padding-3-3-prcnt bg_trans_white_90" style="margin-top: 10%;">
            <!--<div class="modal-header text-center uppercase border_bottom">-->
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <!--<div class="col-md-6 pull-left"><h4 class="modal-title tahomabd size-25 black text-left" id="exampleModalLabel"> Softral </h4></div>-->
                <!--<div class="col-md-6 text-left"><img src="images/logo-1.png" width="170"></div>
                <div class="col-md-6 pull-right lowercase">Already have an account? <button type="submit" class="sign" data-dismiss="modal" data-toggle="modal"  data-target="#loginModal">Login</button></div>-->
            <!--</div>-->
            <div class="modal-body moskNormal400">
                <!--<div class="row no-padding">-->
                    <div class="col-md-12 padding-0-0-5-0">
                        <!--<div class="col-md-6 text-left"><img src="images/logo-1.png" width="170"></div>
                        <div class="col-md-6 text-right lowercase">Already have an account? <button type="submit" class="sign" data-dismiss="modal" data-toggle="modal"  data-target="#loginModal">Login</button></div>-->
                        <div class="text-center size-25"> Create a Free Seller Account</div>
                    </div>
                    <div class="col-md-12"><div class="">&nbsp;</div></div>
                    <!--<div class="col-md-12 text-center" style="padding: 2% 0 2% 0 !important;">
                        <h1 class="size-18 line-h-26 tahomabd">Let's get started!<br> First, tell us what you're looking for.</h1>
                    </div>-->
                    <div class="col-md-12">
                        <form>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="First name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="username" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Last name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Bangladesh</option>
                                        <option>India</option>
                                        <option>Nepal</option>
                                        <option>Bhutan</option>
                                        <option>Myanmar</option>
                                        <option>Pakistan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked > Yes, I understand and agree to the Softral Terms of Service.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger">Create</button>
                            </div>
                        </form>
                    </div>
                <!--</div>-->
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer no-border">
                <!--<div class="checkbox pull-left">
                    <label><input type="checkbox" name="optradio" checked >Remember me</label>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger padding-15-10">Login</button>
                <p>Not a member? <a href="#">Join now</a></p>-->
            </div>
        </div>
    </div>
</div>

<!--=== Modal Js ===-->
<script>
    $('#loginModal').on('shown.bs.modal', function () {
        $('#user_name').focus();
    })
    $('#signupModal').on('shown.bs.modal', function () {
        $('#user_name').focus();
    })

</script>

