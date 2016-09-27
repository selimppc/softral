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
                                <li><a href="#" class="sign" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><a href="#" class="sign_1">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
        </div>
    </section>
</header>
<!--=== Modal Div Start =======================-->
<div class="modal fade bs-example-modal-sm" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content padding-3-3-prcnt bg_trans_white_90" style="margin-top: 35%;">
            <div class="modal-header no-border text-center uppercase">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title tahomabd size-25 black" id="exampleModalLabel"> Softral </h4>
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

<!--=== Modal Js ===-->
<script>
    $('#loginModal').on('shown.bs.modal', function () {
        $('#user_name').focus();
    })

</script>

