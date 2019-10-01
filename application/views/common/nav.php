<!-- Start Page -->
<header class="header" id="header">
    <div class="m-header d-block d-sm-none">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-4">
                    <div class="header__logo-wrap d-flex justify-content-center">
                        <img src="/application/public/img/main/Logo.png" alt="" class="header__logo">
                    </div>
                </div>
                <div class="col-8">
                    <div class="header__slogan-wrap d-flex">
                        <h4 class="header__slogan">
                            Date the love of your life
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-header d-none d-sm-block" id="l-header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="header__logo-wrap d-flex justify-content-center">
                        <img src="/application/public/img/main/Logo.png" alt="" class="header__logo">
                    </div>
                </div>
                <div class="col-6 d-lg-none">
                    <div class="header__slogan-wrap d-flex">
                        <img src="/application/public/img/main/slogan-before_header.png" alt="" class="header__slogan-before">
                        <h4 class="header__slogan">
                            Date the love of your life
                        </h4>
                    </div>
                    <div class="header__contact-us-wrap">
                        <div class="header__social-wrap d-flex">
                            <a class="header__mail-link" href="mailto:datingagencykiev@gmail.com"><img src="/application/public/img/main/mail-icon_header.png" alt="" class="header__mail-icon"></a>
                            <a href="https://www.youtube.com/channel/UCkuuXJVEZ2mVJcZZMX1cEMQ" class=""><img src="/application/public/img/main/youtube.png" alt="" class="header__social-icon header__social-icon_youtube"></a>
                            <a href="https://www.instagram.com/kievdatingagency/" class=""><img src="/application/public/img/main/instagram.png" alt="" class="header__social-icon header__social-icon_instagram"></a>
                            <a href="https://www.facebook.com/kievdatingagency/" class=""><img src="/application/public/img/main/facebook.png" alt="" class="header__social-icon header__social-icon_facebook"></a>
                            <a href="" class=""><img src="/application/public/img/main/viber.png" alt="" class="header__social-icon header__social-icon_viber"></a>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-none d-lg-block">
                    <div class="header__contact-us-wrap">
                        <div class="header__mail-wrap d-flex">
                            <a class="header__mail-link d-flex" href="mailto:datingagencykiev@gmail.com">
                                <img src="/application/public/img/main/mail-icon_header.png" alt="" class="header__mail-icon">
                                <p>&nbsp;&nbsp; datingagencykiev@gmail.com</p>
                            </a>
                        </div>
                        <div class="header__social-wrap d-flex">
                            <a href="https://www.youtube.com/channel/UCkuuXJVEZ2mVJcZZMX1cEMQ" class=""><img src="/application/public/img/main/youtube.png" alt="" class="header__social-icon header__social-icon_youtube"></a>
                            <a href="https://www.instagram.com/kievdatingagency/" class=""><img src="/application/public/img/main/instagram.png" alt="" class="header__social-icon header__social-icon_instagram"></a>
                            <a href="https://www.facebook.com/kievdatingagency/" class=""><img src="/application/public/img/main/facebook.png" alt="" class="header__social-icon header__social-icon_facebook"></a>
                            <a href="" class=""><img src="/application/public/img/main/viber.png" alt="" class="header__social-icon header__social-icon_viber"></a>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-none d-lg-block d-lg-flex justify-content-lg-center">
                    <div class="header__slogan-wrap d-flex">
                        <img src="/application/public/img/main/slogan-before_header.png" alt="" class="header__slogan-before">
                        <h4 class="header__slogan">
                            Date the love of your life
                        </h4>
                    </div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="header__contact-us-wrap text-right">
                        <input type="button" class="header__contact-us-btn" data-toggle="modal" data-target="#modal-contact-us" value="Contact us">
                        <p class="header__contact-us-ask">
                            Do not hesitate to ask about free consultation!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- СНИЗУ кусок кода для липкой менюшки на разрешения от 576 по Максимальную ширину -->
<div class="laptop-sticky-wrap sticky-top d-none d-sm-block">
    <div class="container d-none d-sm-block">
        <nav class="header__nav-wrap d-flex justify-content-between navbar sticky-top">
            <a href="/" class="header__nav-point <?=($action == '' ? 'header__nav-point_active' : '');?>">About us</a>
            <a href="/service" class="header__nav-point <?=($action == 'service' ? 'header__nav-point_active' : '');?>">Our Services</a>
            <a href="/gallery" class="header__nav-point <?=(stristr($action, 'gallery') ? 'header__nav-point_active' : '');?>">Ladies gallery</a>
            <div class="dropdown">
                <button class=" header__nav-point" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                </button>
                <div class="dropdown-menu" flip="true" aria-labelledby="dropdownMenuButton">
                    <? foreach($blogs as $blog):?>
                    <a class="dropdown-item" href="/blog/<?=$blog['id'];?>"><?=$blog['title']?></a>
                    <? endforeach;?>
                </div>
            </div>
            <a href="/girls" class="header__nav-point <?=(stristr($action, 'girls') ? 'header__nav-point_active' : '');?>">Девушкам</a>
        </nav>
    </div>
</div>
<!-- СВЕРХУ кусок кода для липкой менюшки на разрешения от 576 по Максимальную ширину -->

<!-- СНИЗУ кусок кода для липкой менюшки на разрешения от 320 по 576 -->
<div class="sticky-top mobile-sticky-wrap d-block d-sm-none">
    <div class="sticky-top d-block d-sm-none">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="">
                <nav class="header__nav-wrap d-flex justify-content-around navbar sticky-top">
                    <a href="/" class="header__nav-point <?=($action == '' ? 'header__nav-point_active' : '');?>">About us</a>
                    <a href="/service" class="header__nav-point <?=($action == 'service' ? 'header__nav-point_active' : '');?>">Our Services</a>
                    <a href="/gallery" class="header__nav-point <?=(stristr($action, 'gallery') ? 'header__nav-point_active' : '');?>">Ladies gallery</a>
                    <div class="w-100"></div>
                    <div class="dropdown">
                        <button class=" header__nav-point" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </button>
                        <div class="dropdown-menu" flip="true" aria-labelledby="dropdownMenuButton">
                            <? foreach($blogs as $blog):?>
                            <a class="dropdown-item" href="/blog/<?=$blog['id'];?>"><?=$blog['title']?></a>
                            <? endforeach;?>
                        </div>
                    </div>
                    <a href="/girls" class="header__nav-point_rus <?=(stristr($action, 'girls') ? 'header__nav-point_active' : '');?>">Девушкам </a>
                </nav>
            </div>
        </div>
        <nav class="d-flex align-items-center navbar">
            <div class="col-3 position-relative">
                <button class=" c-hamburger c-hSamburger--htx navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
            </div>
            <div class="col-9">
                <div class="header__contact-us-wrap">
                    <div class="header__social-wrap d-flex align-items-center justify-content-end">
                        <a class="header__mail-link" href="mailto:datingagencykiev@gmail.com"><img src="/application/public/img/main/mail-icon_header.png" alt="" class="header__mail-icon"></a>
                        <a href="https://www.youtube.com/channel/UCkuuXJVEZ2mVJcZZMX1cEMQ" class=""><img src="/application/public/img/main/youtube.png" alt="" class="header__social-icon header__social-icon_youtube"></a>
                        <a href="https://www.instagram.com/kievdatingagency/" class=""><img src="/application/public/img/main/instagram.png" alt="" class="header__social-icon header__social-icon_instagram"></a>
                        <a href="https://www.facebook.com/kievdatingagency/" class=""><img src="/application/public/img/main/facebook.png" alt="" class="header__social-icon header__social-icon_facebook"></a>
                        <a href="" class=""><img src="/application/public/img/main/viber.png" alt="" class="header__social-icon header__social-icon_viber"></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- СВЕРХУ кусок кода для липкой менюшки на разрешения от 320 по 576 -->
