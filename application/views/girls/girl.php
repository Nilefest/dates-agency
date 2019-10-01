<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="b-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="b-nav-background-mobile d-flex d-block d-sm-none"></div>

<section id="girl" class="girl">
    <div class="container">
        <? if(!empty($admin)): ?>
        <div class="row">
            <div class="col-12">
                <div id="pofg__row-edit" class="pofg__row-for-button d-flex justify-content-end flex-column flex-sm-row">
                    <a target="_blank" href="/admin/girls/<?=$girl['id'];?>" class="pofg__admin-btn pofg__btn_cancel">Редактировать</a>
                </div>
            </div>
        </div>
        <? endif; ?>
        <div class="row">
            <div class="order-xl-2 col-xl-9">
                <div class="girl-profile">
                    <div class="row no-gutters d-flex">
                        <div class="col-md-6 col-lg-7 d-flex">
                            <div class="girl-profile__wrap-main-photo">
                                <img src="<?=$girl['img'][0];?>" alt="" class="girl-profile__main-photo">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 d-flex flex-column">
                            <div class="row girl-profile__row no-gutters">
                                <div class="girl-profile__id-wrap d-flex">
                                    <p class="girl-profile__id-question">ID&nbsp;</p>
                                    <p id="girl-profile__id" class="girl-profile__id-answer"><?=$girl['id'];?></p>
                                </div>
                            </div>
                            <div class="girl-profile__group-questions">
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Last name</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__last-name" class="girl-profile__answer"><?=$girl['l_name'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Name</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__first-name" class="girl-profile__answer"><?=$girl['name'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">City</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__city" class="girl-profile__answer"><?=$girl['city'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Height</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__height" class="girl-profile__answer"><?=$girl['height'];?>&nbsp;sm</p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Weight</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__weight" class="girl-profile__answer"><?=$girl['weight'];?>&nbsp;kg</p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Age</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__age" class="girl-profile__answer"><?=$girl['age'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="girl-profile__group-questions">
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Eye color</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__eye-color" class="girl-profile__answer"><?=$girl['color_eye'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Hair color</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__hair-color" class="girl-profile__answer"><?=$girl['color_heir'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="girl-profile__group-questions">
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Education</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__education" class="girl-profile__answer"><?=$girl['education'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Profession</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__profession" class="girl-profile__answer"><?=$girl['profession'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Occupation</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__occupation" class="girl-profile__answer"><?=$girl['occupation'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Religion</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__religion" class="girl-profile__answer"><?=$girl['religion'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="girl-profile__group-questions">
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Smoking</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__smoking" class="girl-profile__answer"><?=$girl['smoking'];?></p>
                                    </div>
                                </div>
                                <div class="row girl-profile__row no-gutters">
                                    <div class="col-6 col-sm-4 col-md-6">
                                        <p class="girl-profile__question">Alcohol</p>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-6">
                                        <p id="girl-profile__alcohol" class="girl-profile__answer"><?=$girl['alcohol'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="girl-profile__group-questions mt-5">
                        <div class="girl-profile__full-row no-gutters d-flex">
                            <div class="col-6 col-sm-4">
                                <p class="girl-profile__question">Knowledge of&nbsp;English</p>
                            </div>
                            <div class="col-6 col-sm-8">
                                <p id="girl-profile__knowledge-of-english" class="girl-profile__answer"><?=$girl['lang_eng'];?></p>
                            </div>
                        </div>
                        <div class="girl-profile__full-row no-gutters d-flex">
                            <div class="col-6 col-sm-4">
                                <p class="girl-profile__question">Other foreign languages</p>
                            </div>
                            <div class="col-6 col-sm-8">
                                <p id="girl-profile__other-languages" class="girl-profile__answer"><?=$girl['lang_uther'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="girl-profile__group-questions">
                        <div class="girl-profile__full-row no-gutters d-flex">
                            <div class="col-6 col-sm-4">
                                <p class="girl-profile__question">Marital status</p>
                            </div>
                            <div class="col-6 col-sm-8">
                                <p id="girl-profile__marital-status" class="girl-profile__answer"><?=$girl['family_status'];?></p>
                            </div>
                        </div>
                        <div class="girl-profile__full-row no-gutters d-flex">
                            <div class="col-6 col-sm-4">
                                <p class="girl-profile__question">Number of children</p>
                            </div>
                            <div class="col-6 col-sm-8">
                                <p id="girl-profile__amount-of-children" class="girl-profile__answer"><?=$girl['children_count'];?></p>
                            </div>
                        </div>
                    </div>
                    <div class="girl-profile__group-questions">
                        <div class="girl-profile__full-row no-gutters">
                            <div class="col-12">
                                <p class="girl-profile__question girl-profile__question_about-myself">About myself</p>
                                <p id="girl-profile__about-myself" class="girl-profile__answer girl-profile__answer_about-myself">
                                    <?=$girl['about'];?>
                                </p>
                            </div>
                        </div>
                        <div class="girl-actions">
                            <div class="row d-flex">
                                <div class="col-md-6">
                                    <div class="girl-actions__wrap-action d-flex flex-column align-items-center">
                                        <img src="/application/public/img/gallery/love-letter.png" alt="love-letter" class="girl-actions__img">
                                        <input value="Send me a message" type="button" class="btn girl-actions__btn girl-actions__btn_love-letter" data-toggle="modal" data-target="#modal-stg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="girl-actions__wrap-action d-flex flex-column align-items-center">
                                        <img src="/application/public/img/gallery/giftbox.png" alt="giftbox" class="girl-actions__img">
                                        <input value="Send me a gift/flowers" type="button" class="girl-actions__btn girl-actions__btn_love-letter" data-toggle="modal" data-target="#modal-gfg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="girl-gallery">
                            <div class="row row-wrap">
                                <? foreach($girl['img'] as $img): ?>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="" href="img/blog/blog-img-7.jpg" data-lightbox="girl-gallery">
                                        <img class="girl-gallery__img" src="<?=$img;?>" alt="" />
                                    </a>
                                </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-xl-1 col-xl-3 d-none d-sm-block">
                <div class="girl-more">
                    <div class="girl-more__wrap d-flex flex-xl-column">
                        <a href="/girls/<?=$top_girls[0];?>" class="girl-more__card">
                            <img src="/application/public/img/gallery/model-vladislava.jpg" alt="" class="girl-more__photo">
                            <div class="girl-more__data d-flex justify-content-center">
                                <!-- Информация в таком формате ID Имя Возраст/Рост -->
                                <span id="girl-more__id" class="girl-more__information">2554</span>&nbsp;
                                <span id="girl-more__name" class="girl-more__information">Vladislava</span>&nbsp;
                                <span id="girl-more__age" class="girl-more__information">25/</span>
                                <span id="girl-more__height" class="girl-more__information">179</span>
                            </div>
                        </a>
                        <a href="/girls/<?=$top_girls[1];?>" class="girl-more__card">
                            <img src="/application/public/img/gallery/model-nadezhda.jpg" alt="" class="girl-more__photo">
                            <div class="girl-more__data d-flex justify-content-center">
                                <!-- Информация в таком формате ID Имя Возраст/Рост -->
                                <span id="girl-more__id" class="girl-more__information">2359</span>&nbsp;
                                <span id="girl-more__name" class="girl-more__information">Nadezhda</span>&nbsp;
                                <span id="girl-more__age" class="girl-more__information">29/</span>
                                <span id="girl-more__height" class="girl-more__information">171</span>
                            </div>
                        </a>
                        <a href="/girls/<?=$top_girls[2];?>" class="girl-more__card d-none d-md-block">
                            <img src="/application/public/img/gallery/model-marina.jpg" alt="" class="girl-more__photo">
                            <div class="girl-more__data d-flex justify-content-center">
                                <!-- Информация в таком формате ID Имя Возраст/Рост -->
                                <span id="girl-more__id" class="girl-more__information">2754</span>&nbsp;
                                <span id="girl-more__name" class="girl-more__information">Marina</span>&nbsp;
                                <span id="girl-more__age" class="girl-more__information">26/</span>
                                <span id="girl-more__height" class="girl-more__information">165</span>
                            </div>
                        </a>
                        <a href="/girls/<?=$top_girls[3];?>" class="girl-more__card d-none d-xl-block">
                            <img src="/application/public/img/gallery/model-viktoriya.jpg" alt="" class="girl-more__photo">
                            <div class="girl-more__data d-flex justify-content-center">
                                <!-- Информация в таком формате ID Имя Возраст/Рост -->
                                <span id="girl-more__id" class="girl-more__information">2354</span>&nbsp;
                                <span id="girl-more__name" class="girl-more__information">Viktoria</span>&nbsp;
                                <span id="girl-more__age" class="girl-more__information">30/</span>
                                <span id="girl-more__height" class="girl-more__information">169</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="d-block d-sm-none mb-5 text-center">
        <a href="/gallery" class="girl-more__more-link">More ladies</a>
    </div>
</div>


<!-- Modal -->
<form method="post" action="" class="modal modal-stg fade" id="modal-stg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-stg__wrap">
            <div class="modal-gfg__close-btn-wrap">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-stg__title text-center">
                    Send a message
                </h5>
            </div>
            <div class="modal-body">
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__name" class="modal-stg__label">Name</label>
                    </div>
                    <div class="col-12">
                        <input  name="name" id="modal__name" type="text" required placeholder="Your name" class="modal-stg__input modal__input_name">
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
                        <textarea name="text" id="modal__text" type="text" required placeholder="Write your message for this girl." class="modal-stg__textarea modal__textarea_text"></textarea>
                    </div>
                </div>
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <p class="modal-stg__paragraph">
                            After sending a letter you will receive an answer from a lady on your email. Please pay attention that agency takes fee for a letter delivery 10€. You can make PayPal transaction after pressing button. Our PayPal account: datingagencykiev@gmail.com. If you have any questions or problems please contact us.
                        </p>
                    </div>
                </div>
                <div id="modal-stg__wrap-link-plus-photo" class="modal-stg__wrap-link-plus-photo d-block">
                    <input type="button" id="modal-stg__link-plus-photo" class="modal-stg__link-plus-photo" value="Add a photo">
                </div>
                <div id="modal-stg__block-with-photo" class="modal-stg__block-with-photo d-none">
                    <div class="all_photo_girl row">
                        <!--
                        <div class="one_girl_photo col-6">
                            <div class="modal-stg__wrap-photo">
                                <img src="/application/public/img/for-girls/upload-1.jpg" alt="" class="modal-stg__upload-photo">
                            </div>
                        </div><!-- -->
                        <div class="col-6">
                            <div class="modal-stg__wrap-photo">
                                <div class="modal-stg__wrap-upload">
                                    <labbel class="modal-stg__upload-label">
                                        Add <br> photo
                                    </labbel>
                                    <input type="file" accept=".jpeg,.jpg,.png" class="upload_img_file_modal modal-stg__plus-upload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input name="sub_girl_mess" type="submit" class="modal-stg__btn modal-stg__btn_send" value="Send">
            </div>
        </div>
    </div>
</form>




<form method="post" action="" class="modal modal-gfg fade" id="modal-gfg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg-my-setting" role="document">
        <div class="modal-content modal-gfg__wrap">
            <div class="modal-gfg__close-btn-wrap">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-gfg__title text-center">
                    Send a gift / flowers
                </h5>
            </div>
            <div class="modal-body">
                <div class="modal-gfg__choose-gift">
                    <div class="row">
                        <div class="col-6 col-md-3 ">
                            <div class="modal-gfg__gift-wrap d-flex flex-column align-items-center">
                                <input type="checkbox" name="gift[]" value="flower" class="modal-gfg__checkbox-gift">
                                <div class="modal-gfg__gift-wrap-photo d-flex align-items-center justify-content-center">
                                    <img src="/application/public/img/gallery/flowers.png" alt="Flowers" class="modal-gfg__gift-photo">
                                </div>
                                <div class="modal-gfg__gift-wrap-name">
                                    <p class="modal-gfg__gift-name text-center">
                                        Flowers 50€
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 ">
                            <div class="modal-gfg__gift-wrap d-flex flex-column align-items-center">
                                <input type="checkbox" name="gift[]" value="chocolates" class="modal-gfg__checkbox-gift">
                                <div class="modal-gfg__gift-wrap-photo d-flex align-items-center justify-content-center">
                                    <img src="/application/public/img/gallery/candy.png" alt="Chocolates" class="modal-gfg__gift-photo">
                                </div>
                                <div class="modal-gfg__gift-wrap-name">
                                    <p class="modal-gfg__gift-name text-center">
                                        Chocolates 20€
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 ">
                            <div class="modal-gfg__gift-wrap d-flex flex-column align-items-center">
                                <input type="checkbox" name="gift[]" value="teddy-bear" class="modal-gfg__checkbox-gift">
                                <div class="modal-gfg__gift-wrap-photo d-flex align-items-center justify-content-center">
                                    <img src="/application/public/img/gallery/teddy-bear.png" alt=" Teddy-bear" class="modal-gfg__gift-photo">
                                </div>
                                <div class="modal-gfg__gift-wrap-name">
                                    <p class="modal-gfg__gift-name text-center">
                                        Teddy-bear 70€
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 ">
                            <div class="modal-gfg__gift-wrap d-flex flex-column align-items-center">
                                <input type="checkbox" name="gift[]" value="perfume" class="modal-gfg__checkbox-gift">
                                <div class="modal-gfg__gift-wrap-photo d-flex align-items-center justify-content-center">
                                    <img src="/application/public/img/gallery/perfume.png" alt="Perfume" class="modal-gfg__gift-photo">
                                </div>
                                <div class="modal-gfg__gift-wrap-name">
                                    <p class="modal-gfg__gift-name text-center">
                                        Perfume 100€
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-wrap">
                        <div class="col-6 col-md-3">
                            <div class="modal-gfg__gift-wrap d-flex flex-column align-items-center">
                                <input type="checkbox" name="gift[]" value="gift-perfume" class="modal-gfg__checkbox-gift">
                                <div class="modal-gfg__gift-wrap-photo d-flex align-items-center justify-content-center">
                                    <img src="/application/public/img/gallery/gift-box.png" alt="Vip Gift" class="modal-gfg__gift-photo">
                                </div>
                                <div class="modal-gfg__gift-wrap-name">
                                    <p class="modal-gfg__gift-name text-center">
                                        Your VIP choice
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-9">
                            <div class="modal-gfg__vip-gift-wrap">
                                <p class="modal-gfg__vip-gift-paragraph">
                                    By choosing this type of gift you can ask our agency to present to a lady a gift of your choice. Please provide us with details about it (link about the item online etc). When paying for a gift, add 20€ agency fee (for delivery) to a gift value.
                                </p>
                                <textarea name="vip_choice" id="" placeholder="By choosing this type of gift you can ask our agency to present to a lady a gift of your choice. " class="d-none d-md-block modal-gfg__vip-gift-textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-12 d-block d-md-none">
                            <textarea name="" id="" placeholder="By choosing this type of gift you can ask our agency to present to a lady a gift of your choice. " class="modal-gfg__vip-gift-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <h6 class="modal-gfg__subtitle text-center">
                    Please add your information <br>before sending a gift
                </h6>
                <div class="row modal-gfg__group-items">
                    <div class="col-12">
                        <label for="modal__name" class="modal-gfg__label">Name</label>
                    </div>
                    <div class="col-12">
                        <input name="name" id="modal__name" type="text" required placeholder="Your name" class="modal-gfg__input modal__input_name">
                    </div>
                </div>
                <div class="row modal-gfg__group-items">
                    <div class="col-12">
                        <label for="modal__email" class="modal-gfg__label">Email</label>
                    </div>
                    <div class="col-12">
                        <input name="mail" id="modal__email" type="email" required placeholder="Your Email" class="modal-gfg__input modal__input_email">
                    </div>
                </div>
                <div class="row modal-gfg__group-items">
                    <div class="col-12">
                        <label for="modal__surname" class="modal-gfg__label">Short note</label>
                    </div>
                    <div class="col-12">
                        <textarea name="note" id="modal__text" type="text" required placeholder="Write your message for this girl." class="modal-gfg__textarea modal__textarea_text"></textarea>
                    </div>
                </div>
                <div class="row modal-gfg__group-items">
                    <div class="col-12">
                        <p class="modal-gfg__paragraph">
                            After sending a gift you will receive an answer from a lady on your email. Please pay attention that a gift will be delivered after you complete payment. You can make PayPal transaction after pressing button. Our PayPal account: datingagencykiev@gmail.com . If you have any questions or problems please contact us.
                        </p>
                    </div>
                </div>
                <div id="modal-gfg__wrap-link-plus-photo" class="modal-gfg__wrap-link-plus-photo d-block">
                    <input type="button" id="modal-gfg__link-plus-photo" class="modal-gfg__link-plus-photo" value="Add a photo">
                </div>
                <div id="modal-gfg__block-with-photo" class="modal-gfg__block-with-photo d-none">
                    <div class="all_photo_girl row">
                        <!--
                        <div class="one_girl_photo col-6">
                            <div class="modal-gfg__wrap-photo">
                                <img src="/application/public/img/for-girls/upload-1.jpg" alt="" class="modal-gfg__upload-photo">
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-6">
                            <div class="modal-gfg__wrap-photo">
                                <div class="modal-gfg__wrap-upload">
                                    <labbel class="modal-gfg__upload-label">
                                        Add <br> photo
                                    </labbel>
                                    <input type="file" accept=".jpeg,.jpg,.png" class="upload_img_file_modal modal-gfg__plus-upload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input name="sub_girl_gift_flowers" type="submit" class="modal-gfg__btn modal-gfg__btn_send" value="Send">
            </div>
        </div>
    </div>
</form>
<?=$footer;?>
<script>
    
    var this_one_girl_photo;
    $('.upload_img_file_modal').change(function() {
        this_one_girl_photo = $(this).parent().parent().parent().parent();
        let files = this.files;
        sendFilesNew(files);
    });
    
    function sendFilesNew(files) {
        let maxFileSize = 5242880;
        let Data = new FormData();
        $(files).each(function(index, file) {
            if ((file.size <= maxFileSize) && ((file.type == 'image/png') || (file.type == 'image/jpeg'))) {
                Data.append('images[]', file);
            }
        });
        $.ajax({
            type: "POST",
            data: Data,
            contentType: false,
            processData: false,
            success: function(data) {
                imgRefresh(data);
            }
        });
    }

    function imgRefresh(data) {
        data = JSON.parse(data);
        $('.one_girl_photo').remove();

        for (var el in data) {
            $('.all_photo_girl').prepend('<div class="one_girl_photo col-6"><div class="modal-gfg__wrap-photo"><img src="' + data[el] + '" alt="" class="modal-gfg__upload-photo"></div></div>');
        }
        
    }
</script>
