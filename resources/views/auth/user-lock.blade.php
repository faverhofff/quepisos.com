<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>QuePisos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content=" " name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ config('misc.url_public') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ config('misc.url_public') }}/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ config('misc.url_public') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ config('misc.url_public') }}/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ config('misc.url_public') }}/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ config('misc.url_public') }}/css/plugins.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ config('misc.url_public') }}/pages/css/lock-2.min.css" rel="stylesheet" type="text/css" />

        <link rel="apple-touch-icon" sizes="144x144" href="{{ config('misc.url_public') }}/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="{{ config('misc.url_public') }}/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ config('misc.url_public') }}/images/favicons/favicon-16x16.png" sizes="16x16">
    </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="index.html">
                    <img src="{{ config('misc.url_public') }}/pages/img/logo-big.png" alt="logo" /> </a>
            </div>
            <div class="page-body">
                <img class="page-lock-img" src="{{ config('misc.url_public') }}/pages/media/profile/profile.jpg" alt="">
                <div class="page-lock-info">
                    <h1> Cliente </h1>
                    <span class="email"> {{ \Auth::user()->email }} </span>
                    <span class="locked"> Locked </span>

                    {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}
                        <div class="input-group input-medium">
                            <input type="hidden" name="email" value="{{ \Auth::user()->email }}">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <span class="input-group-btn">
                                <button type="submit" class="btn green icn-only">
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="login.html">  </a>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <!--[if lt IE 9]>
        <script src="{{ config('misc.url_public') }}/plugins/respond.min.js"></script>
        <script src="{{ config('misc.url_public') }}/plugins/excanvas.min.js"></script> 
        <script src="{{ config('misc.url_public') }}/plugins/ie8.fix.min.js"></script> 
        <![endif]-->
        
        <script src="{{ config('misc.url_public') }}/jquery.min.js" type="text/javascript"></script>
        <script src="{{ config('misc.url_public') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{ config('misc.url_public') }}/js.cookie.min.js" type="text/javascript"></script>
        <script src="{{ config('misc.url_public') }}/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{{ config('misc.url_public') }}/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{{ config('misc.url_public') }}/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        
        <script src="{{ config('misc.url_public') }}/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        
        <script src="{{ config('misc.url_public') }}/css/app.min.js" type="text/javascript"></script>
        
        <script src="{{ config('misc.url_public') }}/js/lock-2.min.js" type="text/javascript"></script>
        
    </body>

</html>