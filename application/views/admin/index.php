<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="login-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="login-nav-background-mobile d-flex d-block d-sm-none"></div>

<section id="log-in" class="log-in d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <form method="post" action="" class="col-12 col-sm-8 col-md-7 col-lg-6 col-xl-5">
                <div class="log-in__group-items">
                    <div class="row ">
                        <div class="col-5 text-right">
                            <label for="log-in__name" class="log-in__label">Login:</label>
                        </div>
                        <div class="col-7">
                            <input name="login" id="log-in__name" type="text" class="log-in__input log-in__input_name">
                        </div>
                    </div>
                </div>
                <div class="log-in__group-items">
                    <div class="row ">
                        <div class="col-5 text-right">
                            <label for="log-in__password" class="log-in__label">Password:</label>
                        </div>
                        <div class="col-7">
                            <input name="password" id="log-in__password" type="password" class="log-in__input log-in__input_password">
                        </div>
                    </div>
                </div>
                <div class="log-in__item">
                    <div class="row">
                        <div class="offset-sm-5 col-12 col-sm-7 d-flex justify-content-center justify-content-sm-start">
                            <input name="sub_login" type="submit" class="log-in__btn" value="Sign in">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?=$footer;?>
