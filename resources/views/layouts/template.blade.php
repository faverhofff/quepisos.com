<!DOCTYPE html>
<html lang="en">
<head>
    <title>QuePisos</title>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Houzez HTML5 Template">
    <meta name="description" content="Houzez HTML5 Template">
    <meta name="author" content="Favethemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ config('misc.url_public') }}/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ config('misc.url_public') }}/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ config('misc.url_public') }}/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" >
    <meta name="theme-color" content="#ffffff">

    <link href="{{ config('misc.url_public') }}/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/jquery.vegas.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ config('misc.url_public') }}/css/styles.css" rel="stylesheet" type="text/css" />

    @yield('header')

</head>
<body>


    <button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
    <div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="login-tabs">
                        @if(!\Auth::check())
                        <li class="active">Login</li>
                        @endif
                        <li>Register</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

                </div>
                <div class="modal-body login-block">         
                    <div class="tab-content">
                        <div class="tab-pane fade in active">
                            <div class="message">
                            <!--
                                <p class="error text-danger"><i class="fa fa-close"></i> You are not Logedin</p>
                                <p class="success text-success"><i class="fa fa-check"></i> You are not Logedin</p>
                            -->
                            </div>
                            {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}
                                <div class="form-group field-group">
                                    <div class="input-user input-icon">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="input-pass input-icon">
                                        <input type="password" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="forget-block clearfix">
                                    <div class="form-group pull-left">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group pull-right">
                                        <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#pop-reset-pass">I forgot username and password</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            {{ Form::close() }}
                            <hr>
                            <!--
                            <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
                            <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
                            <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
                            -->
                        </div>
                        <div class="tab-pane fade">
                            {{ Form::open(['route' => 'frontend.auth.register', 'class' => 'form-horizontal form-register']) }}
                                <div class="form-group field-group">
                                    <div class="input-user input-icon">
                                        <input type="text" placeholder="Username" name="name" id="name">
                                    </div>
                                    <div class="input-email input-icon">
                                        <input type="email" placeholder="Email" name="email" id="email">
                                    </div>
                                    <div class="input-re-email input-icon">
                                        <input type="email" placeholder="Repeat Email" name="reemail" id="re-email">
                                    </div>
                                    <div class="input-password input-icon">
                                        <input type="password" placeholder="Password" name="password" id="password">
                                        <input type="password" placeholder="Password" name="password_confirmation" id="password_confirmation" style="display: none; visibility: hidden;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input name="condition" type="checkbox" value="accept">
                                            I agree with your <a href="#">Terms & Conditions</a>.
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            {{ Form::close() }}
                            <hr>
                            <!--
                            <a href="#" class="btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> login with facebook</a>
                            <a href="#" class="btn btn-social btn-bg-linkedin btn-block"><i class="fa fa-linkedin"></i> login with linkedin</a>
                            <a href="#" class="btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> login with Google</a>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="login-tabs">
                        <li class="active">Reset Password</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body">
                    <p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
                    {{ Form::open(['route' => 'frontend.auth.password.email', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            <div class="input-user input-icon">
                                <input placeholder="Enter your username or email" name="email" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Get new password</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    @yield('menu-header')

    <div class="header-media">    

        @yield('media')

    </div>

    <!--start section page body-->
    <section id="section-body">

        @yield('content')

    </section>
    <!--end section page body-->

    @yield('footer')

    <input type="hidden" value="{{ config('misc.url_public') }}" id="url">

    <!--Código HTML de la política de cookies -->
     
    <div id="barraaceptacion" style="display: block;     position: fixed;    left: 0px;    right: 0px;    bottom: 0px;    padding-bottom: 20px;    width: 100%;    text-align: center;    min-height: 40px;    background-color: rgba(0, 0, 0, 0.5);    color: #fff;    z-index: 99999; ">
        <div class="inner">
            Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
            <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><br /><b>OK</b></a> | 
            <a href="http://politicadecookies.com" target="_blank" class="info">Más información</a>
        </div>
    </div>
     
    <!-- Fin del código de cookies --->

    <!--Start Scripts-->
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/idle-timer.1.1.0.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/jquery.vegas.min.js"></script>
    <script type="text/javascript" src="{{ config('misc.url_public') }}/js/custom.js"></script>
    <script type="text/javascript">
        function getCookie(c_name){
            var c_value = document.cookie;
            var c_start = c_value.indexOf(" " + c_name + "=");
            if (c_start == -1){
                c_start = c_value.indexOf(c_name + "=");
            }
            if (c_start == -1){
                c_value = null;
            }else{
                c_start = c_value.indexOf("=", c_start) + 1;
                var c_end = c_value.indexOf(";", c_start);
                if (c_end == -1){
                    c_end = c_value.length;
                }
                c_value = unescape(c_value.substring(c_start,c_end));
            }
            return c_value;
        }

        function setCookie(c_name,value,exdays){
            var exdate=new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
            document.cookie=c_name + "=" + c_value;
        }

        if(getCookie('tiendaaviso')!="1"){
            document.getElementById("barraaceptacion").style.display="block";
        }
        function PonerCookie(){
            setCookie('tiendaaviso','1',365);
            document.getElementById("barraaceptacion").style.display="none";
        }        
    </script>
    @yield('scripts')
</body>
</html>