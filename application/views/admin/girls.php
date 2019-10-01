<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="b-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="b-nav-background-mobile d-flex d-block d-sm-none"></div>

<section class="admin-button">
    <div class="container">
        <div class="row d-flex">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="admin-button__wrap">
                    <a href="/man/form" class="admin-button__link admin-button__link_man">
                        Questionnaire for men
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="admin-button__wrap">
                    <a href="/admin/girls" class="admin-button__link admin-button__link_girl">
                        Анкета девушек
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="admin-button__wrap">
                    <a href="/admin/blog" class="admin-button__link admin-button__link_blog">
                        Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->
<section id="profile" class="profile">
    <div class="container">
        <form action="" method="post" id="profile-of-girl" class="profile-of-girl pofg">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex align-items-center justify-content-sm-end justify-content-lg-start">
                    <input name="public" <?=($girl['public'] == '1' ? 'checked' : '');?> id="pofg__public" type="checkbox" class="pofg__admin-checkbox">
                    <label for="pofg__public" class="pofg__admin-label-for-checkbox d-flex align-items-center">Public:</label>
                </div>
                <div class="col-12 col-lg-8">
                    <div id="pofg__row-edit" class="pofg__row-for-button d-flex justify-content-end flex-column flex-sm-row">
                        <? if($girl['id'] > -1): ?>
                        <a href="/girls/<?=$girl['id'];?>" class="pofg__admin-btn pofg__btn_cancel" >Вернуться</a>
                        <input name="sub_delete_girl" type="submit" class="pofg__admin-btn pofg__btn_delete" value="Удалить">
                        <? endif; ?>
                        <input name="sub_save_girl" type="submit" class="pofg__admin-btn pofg__btn_save" value="Сохранить">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                    <div class="pofg__group-items d-flex">
                        <label for="pofg__id" class="pofg__label pofg__label_id">ID:</label>
                        <span id="pofg__id" class="pofg__span_id"><?=$girl['id'];?></span>
                        <input type="hidden" name="id" value="<?=$girl['id'];?>">
                    </div>
                </div>
            </div>
            <div id="pofg__all-input" class="row">
                <div class="col-lg-7">
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__last-name" class="pofg__label">1. Last name:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="l_name" value="<?=$girl['l_name'];?>" id="pofg__last-name" type="text" class="pofg__input pofg__input_last-name">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__first-name" class="pofg__label">2. Name:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="name" value="<?=$girl['name'];?>" id="pofg__first-name" type="text" class="pofg__input pofg__input_first-name">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__city" class="pofg__label">3. City:</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="city" id="pofg__city" class="pofg__input pofg__input_city">
                                <option <?=($girl['city'] == 'Kiev' ? 'selected' : '');?> value="Kiev">Kiev</option>
                                <option <?=($girl['city'] == 'another region' ? 'selected' : '');?> value="another region">another region</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__height" class="pofg__label">4. Height:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="height" value="<?=$girl['height'];?>" id="pofg__height" type="text" class="pofg__input pofg__input_height">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__weight" class="pofg__label">5. Weight:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="weight" value="<?=$girl['weight'];?>" id="pofg__weight" type="text" class="pofg__input pofg__input_weight">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__age" class="pofg__label">6. Age:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="age" value="<?=$girl['age'];?>" id="pofg__age" type="text" class="pofg__input pofg__input_age">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__eye-color" class="pofg__label">7. Eye color:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="color_eye" value="<?=$girl['color_eye'];?>" id="pofg__eye-color" type="text" class="pofg__input pofg__input_eye-color">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__hair-color" class="pofg__label">8. Hair color:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="color_heir" value="<?=$girl['color_heir'];?>" id="pofg__hair-color" type="text" class="pofg__input pofg__input_hair-color">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__education" class="pofg__label">9. Education:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="education" value="<?=$girl['education'];?>" id="pofg__education" type="text" class="pofg__input pofg__input_education">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__profession" class="pofg__label">10. Profession</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="profession" value="<?=$girl['profession'];?>" id="pofg__profession" type="text" class="pofg__input pofg__input_profession">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__occupation" class="pofg__label">11. Occupation:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="occupation" value="<?=$girl['occupation'];?>" id="pofg__occupation" type="text" class="pofg__input pofg__input_occupation">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__religion" class="pofg__label">12. Religion:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="religion" value="<?=$girl['religion'];?>" id="pofg__religion" type="text" class="pofg__input pofg__input_religion">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__smoking" class="pofg__label">13. Smoking:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="smoking" value="<?=$girl['smoking'];?>" id="pofg__smoking" type="text" class="pofg__input pofg__input_smoking">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__alcohol" class="pofg__label">14. Alcohol:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="alcohol" value="<?=$girl['height'];?>" id="pofg__alcohol" type="text" class="pofg__input pofg__input_alcohol">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__knowledge-of-english" class="pofg__label">15. Knowledge of English:</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="lang_eng" id="pofg__knowledge-of-english" class="pofg__input pofg__input_knowledge-of-english">
                                <option <?=($girl['lang_eng'] == 'basic' ? 'selected' : '');?> value="basic">Basic English</option>
                                <option <?=($girl['lang_eng'] == 'good' ? 'selected' : '');?> value="good">Good English</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__other-languages" class="pofg__label">16. Other foreign languages:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="lang_other" value="<?=$girl['lang_other'];?>" id="pofg__other-languages" type="text" class="pofg__input pofg__input_other-languages">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__marital-status" class="pofg__label">17. Marital status:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="family_status" value="<?=$girl['family_status'];?>" id="pofg__marital-status" type="text" class="pofg__input pofg__input_marital-status">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__amount-of-children" class="pofg__label">18. Number of children:</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="children_count" id="pofg__amount-of-children" class="pofg__input pofg__input_amount-of-children">
                                <option <?=($girl['children_count'] == '0' ? 'selected' : '');?> value="0">Have not children</option>
                                <option <?=($girl['children_count'] == '1' ? 'selected' : '');?> value="1">1</option>
                                <option <?=($girl['children_count'] == '2' ? 'selected' : '');?> value="2">2</option>
                                <option <?=($girl['children_count'] == '3' ? 'selected' : '');?> value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pofg__group-textarea d-flex flex-column">
                        <div class="col-12">
                            <label for="pofg__about-you" class="pofg__label">19. About myself:</label>
                        </div>
                        <div class="col-12">
                            <textarea name="about" id="pofg__about-you" class="pofg__textarea pofg__textarea_about-you"><?=$girl['about'];?></textarea>
                        </div>
                    </div>
                    <h6 class="pofg__subtitle">
                        About the desired spouse
                    </h6>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__age-of-man" class="pofg__label">21. Age of man: (range from-to)</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="man_age" value="<?=$girl['man_age'];?>" id="pofg__age-of-man" type="text" class="pofg__input pofg__input_age-of-man">
                        </div>
                    </div>
                    <div class="row pofg__group-textarea d-flex flex-column">
                        <div class="col-12">
                            <label for="pofg__man-type" class="pofg__label">22. Type of man: (what kind of man do you see as your chosen one; list the character traits that men like most)</label>
                        </div>
                        <div class="col-12">
                            <textarea name="man_about" id="pofg__man-type" class="pofg__textarea pofg__textarea_man-type"><?=$girl['man_about'];?></textarea>
                        </div>
                    </div>
                    <h6 class="pofg__subtitle">
                        Contact details
                    </h6>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__email" class="pofg__label">23. E-mail:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="mail" value="<?=$girl['mail'];?>" id="pofg__email" type="email" class="pofg__input pofg__input_email">
                        </div>
                    </div>
                    <div class="row pofg__group-items">
                        <div class="col-sm-7">
                            <label for="pofg__phone-number" class="pofg__label">24. Telephone number:</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="phone" value="<?=$girl['phone'];?>" id="pofg__phone-number" type="tel" class="pofg__input pofg__input_phone-number">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="all_photo_girl" class="row pofg__row-wrap-img d-flex flex-wrap">
                        <? if($girl['id'] > -1): foreach($girl['img'] as $img): ?>
                        <div class="one_girl_photo col-12 col-sm-6 col-md-4 col-lg-6">
                            <div class="pofg__wrap-photo">
                                <input type="button" title="Click to delete this photo" class="a-bf__delete delete_photo_girl">
                                <img src="<?=$img;?>" class="img_girl_one pofg__upload-photo">
                            </div>
                        </div>
                        <? endforeach; endif; ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                            <div class="pofg__wrap-photo">
                                <div class="pofg__wrap-upload">
                                    <labbel class="pofg__upload-label">
                                        Добавить <br> фото
                                    </labbel>
                                    <input id="upload_photo_girl" type="file" class="pofg__plus-upload">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?=$footer;?>
<script>
    $('#upload_photo_girl').change(function() {
        let files = this.files;
        sendFilesNew(files);
    });
    
    $('body').on('click', '.delete_photo_girl', function() {
        var src = $(this).siblings('.img_girl_one').attr('src');
        $.ajax({
            type: "POST",
            data: {
                delete_photo_girl: 1,
                src: src
            }
        });
        $(this).closest('.one_girl_photo').remove();
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
            $('#all_photo_girl').prepend('<div class="one_girl_photo col-12 col-sm-6 col-md-4 col-lg-6"><div class="pofg__wrap-photo"><input type="button"  title="Click to delete this photo" class="a-bf__delete delete_photo_girl"><img src="' + data[el] + '" alt="" class="img_girl_one pofg__upload-photo"></div></div>');
        }
    }

</script>
