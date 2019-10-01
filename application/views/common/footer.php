<!-- ScrollUp нужно добавить на все страницы -->
<a href="#" class="scrollup">Наверх</a>

<form method="post" action="" class="modal modal-contact-us fade" id="modal-contact-us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-stg__wrap">
            <div class="modal-gfg__close-btn-wrap">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-stg__title text-center">
                    Contact me
                </h5>
            </div>
            <div class="modal-body">
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__name" class="modal-stg__label">Name</label>
                    </div>
                    <div class="col-12">
                        <input name="name" id="modal__name" type="text" required placeholder="Your name" class="modal-stg__input modal__input_name">
                    </div>
                </div>
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__email" class="modal-stg__label">Email</label>
                    </div>
                    <div class="col-12">
                        <input name="mail" id="modal__email" type="email" required placeholder="Your Email" class="modal-stg__input modal__input_email">
                    </div>
                </div>
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__surname" class="modal-stg__label">Text</label>
                    </div>
                    <div class="col-12">
                        <textarea name="text" id="modal__text" type="text" required placeholder="Write your message for us" class="modal-stg__textarea modal__textarea_text"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input name="sub_contact_us" type="submit" class="modal-stg__btn modal-stg__btn_send" value="Send">
            </div>
        </div>
    </div>
</form>

<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-2 d-none d-xl-block order-6  order-md-1">
                <div class="footer__logo-wrap d-flex justify-content-center">
                    <img src="/application/public/img/main/Logo.png" alt="" class="footer__logo">
                </div>
            </div>
            <div class="col-12 col-xl-7 order-1  order-md-2">
                <nav class="footer__nav-wrap d-flex flex-column flex-md-row text-center justify-content-between">
                    <a href="/" class="footer__nav-point <?=($action == '' ? 'header__nav-point_active' : '');?>">About us</a>
                    <a href="/service" class="footer__nav-point <?=($action == 'service' ? 'header__nav-point_active' : '');?>">Our Services</a>
                    <a href="/gallery" class="footer__nav-point <?=(stristr($action, 'gallery') ? 'header__nav-point_active' : '');?>">Ladies gallery</a>
                    <div class="dropdown">
                        <button class=" header__nav-point" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <? foreach($blogs as $blog):?>
                            <a class="dropdown-item" href="/blog/<?=$blog['id'];?>"><?=$blog['title']?></a>
                            <? endforeach;?>
                        </div>
                    </div>
                    <a href="/girls" class="footer__nav-point <?=(stristr($action, 'girls') ? 'header__nav-point_active' : '');?>">Для девушек </a>
                </nav>
                <div class="footer__slogan-wrap d-xl-flex d-none d-xl-block">
                    <img src="/application/public/img/main/slogan-before_footer.png" alt="" class="footer__slogan-before">
                    <h4 class="footer__slogan">
                        Date the love of your life
                    </h4>
                </div>
            </div>
            <div class="col-12 col-md-3 d-block d-xl-none order-4  order-md-3">
                <div class="footer__logo-wrap d-flex justify-content-center">
                    <img src="/application/public/img/main/Logo.png" alt="" class="footer__logo">
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex justify-content-center d-block d-xl-none order-3  order-md-4">
                <div class="footer__slogan-wrap d-flex">
                    <img src="/application/public/img/main/slogan-before_footer.png" alt="" class="footer__slogan-before">
                    <h4 class="footer__slogan">
                        Date the love of your life
                    </h4>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-3 order-2  order-md-5">
                <div class="footer__contact-us-wrap d-flex flex-column">
                    <div class="footer__mail-wrap d-flex ml-auto d-none d-md-block order-md-2 order-xl-1">
                        <a class="footer__mail-link d-flex" href="mailto:datingagencykiev@gmail.com">
                            <img src="/application/public/img/main/mail-icon_footer.png" alt="" class="footer__mail-icon d-none d-md-block">
                            <p class="footer__mail-adress d-none d-md-block">&nbsp;&nbsp; datingagencykiev@gmail.com</p>
                        </a>
                    </div>
                    <div class="footer__social-wrap d-flex justify-content-center ml-md-auto order-md-1 order-xl-2">
                        <a class="footer__mail-link d-flex d-block d-md-none" href="mailto:datingagencykiev@gmail.com">
                            <img src="/application/public/img/main/mail-icon_footer.png" alt="" class="footer__mail-icon">
                        </a>
                        <a href="#" class=""><img src="/application/public/img/main/youtube.png" alt="" class="footer__social-icon footer__social-icon_youtube"></a>
                        <a href="#" class=""><img src="/application/public/img/main/instagram.png" alt="" class="footer__social-icon footer__social-icon_instagram"></a>
                        <a href="#" class=""><img src="/application/public/img/main/facebook.png" alt="" class="footer__social-icon footer__social-icon_facebook"></a>
                        <a href="#" class=""><img src="/application/public/img/main/viber.png" alt="" class="footer__social-icon footer__social-icon_viber"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 order-5 order-md-6">
                <div class="footer__no-copiright d-flex justify-content-center align-self-center">
                    <p class="footer__no-copiright_text text-center">
                        © Copyright 2019 All rights reserved&nbsp;| &nbsp;
                    </p>
                    <a href="/admin" class="footer__log-in">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/application/public/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/application/public/js/lightbox.min.js"></script>
<script src="/application/public/js/main.js"></script>
<script src="/application/public/js/scroll_top.js"></script>
<?php foreach($js as $script):?>
<script src="/application/public/js/<?php echo $script;?>.js" type="text/javascript" charset="utf-8"></script>
<?php endforeach; ?>
</body>

</html>
