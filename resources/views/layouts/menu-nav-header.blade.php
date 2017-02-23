<!--start header section header v1-->
<header id="header-section" class="header-section-4 header-main  nav-left hidden-sm hidden-xs header-main-2" data-sticky="1">
    <div class="container">
        <div class="header-left">
            <div class="logo">
                <a href="index.html">
                    <img src="images/houzez-logo-color.png" alt="logo">
                </a>
            </div>
            <nav class="navi main-nav pull-right">
                <ul>
                    <li><a href="#">Espa&ntilde;ol</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Espa&ntilde;ol</a>
                            </li>
                            <li>
                                <a href="#">English</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Tus Favoritos</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user">
                <!-- <a href="#" data-toggle="modal" data-target="#pop-login">Sign In / Register</a> -->
                @if(!\Auth::check())
                <a href="#" data-toggle="modal" data-target="#pop-login">Identif&iacute;cate / Registro</a>
                @else
                <a href="#" data-toggle="modal" data-target="#pop-login">Registro</a>
                @endif
                <a href="add-new-property.html" class="btn btn-default">Crear Listado</a>
            </div>
        </div>
    </div>
</header>

<div class="header-mobile visible-sm visible-xs header-section-4 header-main  nav-left header-main-2">
    <div class="container">
        <!--start mobile nav-->
        <div class="mobile-nav">
            <span class="nav-trigger"><i style="color: white;" class="fa fa-navicon"></i></span>
            <div class="nav-dropdown main-nav-dropdown"></div>
        </div>
        <!--end mobile nav-->
        <div class="header-logo">
            <a href="index.html"><img src="images/logo-houzez-white.png" alt="logo"></a>
        </div>
        <div class="header-user">
            <ul class="account-action">
                <li>
                    <span class="user-icon"><i class="fa fa-user"></i></span>
                    <div class="account-dropdown">
                        <ul>
                            <li> <a href="add-new-property.html"> <i class="fa fa-plus-circle"></i>Publicar Anuncio</a></li>
                            <li> <a href="#" data-toggle="modal" data-target="#pop-login"> <i class="fa fa-user"></i> Log in / Register </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end header section header v1-->