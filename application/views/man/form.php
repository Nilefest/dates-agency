<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="b-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="b-nav-background-mobile d-flex d-block d-sm-none"></div>

<section class="modal">
    <div class="container d-flex justify-content-center">
        <div class="modal__wrap">
            <h5 class="modal__title text-center">
                Ask for the free consultation <br> of our professionals
            </h5>
            <div class="row modal__group-items">
                <div class="col-12">
                    <label for="modal__name" class="modal__label">Name</label>
                </div>
                <div class="col-12">
                    <input name="name" id="modal__name" type="text" class="modal__input modal__input_name">
                </div>
            </div>
            <div class="row modal__group-items">
                <div class="col-12">
                    <label for="modal__surname" class="modal__label">Surname</label>
                </div>
                <div class="col-12">
                    <input name="l_name" id="modal__surname" type="text" class="modal__input modal__input_surname">
                </div>
            </div>
            <div class="row modal__group-items">
                <div class="col-12">
                    <label for="modal__email" class="modal__label">Email</label>
                </div>
                <div class="col-12">
                    <input name="mail" id="modal__email" type="email" class="modal__input modal__input_email">
                </div>
            </div>
            <div class="row modal__group-items">
                <div class="col-12">
                    <label for="modal__phone" class="modal__label">Phone number (whatsApp/viber)</label>
                </div>
                <div class="col-12">
                    <input name="phone" id="modal__phone" type="numb" class="modal__input modal__input_phone">
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <submit name="sub_add_man_ask" class="modal__btn modal__btn_send">
                        Send
                    </submit>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="profile-m" class="profile-m">
    <div class="container">
        <form action="" method="post" id="profile-of-man" class="profile-of-man pofm">
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <h3 class="pofm__title_red text-center">
                        Questionnaire
                    </h3>
                    <h4 class="pofm__title text-center">
                        In order to have the best matching possible, please answer this little but important questionnaire
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__first-name" class="pofm__label">1. Name</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="name" id="pofm__first-name" type="text" class="pofm__input pofm__input_first-name">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__last-name" class="pofm__label">2. Surname</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="l_name" id="pofm__last-name" type="text" class="pofm__input pofm__input_last-name">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__age" class="pofm__label">3. Age</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="age" id="pofm__age" type="text" class="pofm__input pofm__input_age">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__age-of-man" class="pofm__label">4. Email Address</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="mail" id="pofm__email" type="email" class="pofm__input pofm__input_email">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__adress" class="pofm__label">5. Address (Country, City)</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="addr" id="pofm__adress" type="text" class="pofm__input pofm__input_adress">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__prof-activity" class="pofm__label">6. Professional activity</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="professional" id="pofm__prof-activity" type="text" class="pofm__input pofm__input_prof-activity">
                        </div>
                    </div>
                    <div class="row pofm__group-items">
                        <div class="col-sm-7">
                            <label for="pofm__been-married" class="pofm__label">7. Have you been married?</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="is_married" id="pofm__been-married" type="text" class="pofm__input pofm__input_been-married">
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__have-you-kid" class="pofm__label">8. Do you have kids? If yes, how old are they?</label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="kids_about" id="pofm__have-you-kid" class="pofm__textarea pofm__textarea_have-you-kid"></textarea>
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__next-wife" class="pofm__label">9. What are the qualities you are searching for your next wife/life partner?</label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="partner_about" id="pofm__next-wife" class="pofm__textarea pofm__textarea_next-wife"></textarea>
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__what-kind-of-girls" class="pofm__label">10. What kind of girls/women are you interested in (age, physical appearance, interests, education, values)?</label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="girl_about" id="pofm__what-kind-of-girls" class="pofm__textarea pofm__textarea_what-kind-of-girls"></textarea>
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__what-attracted" class="pofm__label">11. What makes you attracted to Ukrainian women in particular? </label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="ukr_girl_about" id="pofm__what-attracted" class="pofm__textarea pofm__textarea_what-attracted"></textarea>
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__what-about-cultural" class="pofm__label">12. Do you know about the cultural differences there might be between your culture and Ukrainian people and specifically girls?</label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="is_know_cultural" id="pofm__what-about-cultural" class="pofm__textarea pofm__textarea_what-about-cultural"></textarea>
                        </div>
                    </div>
                    <div class="row pofm__group-textarea">
                        <div class="col-sm-7">
                            <label for="pofm__wish-or-requirement" class="pofm__label">13. Is there any wish or requirement you have we could help you with?</label>
                        </div>
                        <div class="col-sm-5">
                            <textarea name="requirement" id="pofm__wish-or-requirement" class="pofm__textarea pofm__textarea_wish-or-requirement"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row pofm__row-wrap-img d-flex flex-wrap">
                        <div class="col-12">
                            <label class="pofm__label-upload-photo">14. Please attach couple of your photos</label>
                        </div>
                        <div id="all_photo_man" class="col-12 pofm__row-img d-flex flex-wrap">
                            <!--<div class="one_man_photo col-12 col-sm-6 col-md-4 col-lg-6"><div class="pofm__wrap-photo"><img src="/application/public/img/for-man.jpeg" alt="" class="pofm__upload-photo"></div></div><!---->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                                <div class="pofm__wrap-photo">
                                    <div class="pofm__wrap-upload">
                                        <labbel class="pofm__upload-label text-center">
                                            Add a photo
                                        </labbel>
                                        <input id="upload_photo_man" type="file" multiple class="pofm__plus-upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <input type="submit" name="sum_add_man" class="pofm__sent-form" value="Send">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="pofm__after-form">
                        Thank you! <br>
                        The Kiev Dating Agency team
                    </p>
                </div>
            </div>
        </form>
    </div>
</section>
<?=$footer;?>
<script>
    $('#upload_photo_man').change(function() {
        let files = this.files;
        sendFilesNew(files);
    });

    $('body').on('click', '.delete_photo_man', function() {
        var src = $(this).siblings('.img_man_one').attr('src');
        $.ajax({
            type: "POST",
            data: {
                delete_photo_girl: 1,
                src: src
            }
        });
        $(this).closest('.one_man_photo').remove();
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
                data = JSON.parse(data);
                $('.one_man_photo').remove();

                for (var el in data) {
                    $('#all_photo_man').prepend('<div class="one_man_photo col-12 col-sm-6 col-md-4 col-lg-6"><div class="pofm__wrap-photo"><input type="button"  title="Click to delete this photo" class="a-bf__delete delete_photo_man"><img src="' + data[el] + '" alt="" class="img_man_one pofm__upload-photo"></div></div>');
                }
            }
        });
    }

</script>
