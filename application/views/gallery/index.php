<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="g-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="g-nav-background-mobile d-flex d-block d-sm-none"></div>

<section id="g-full" class="g-full">
    <div class="container">
        <div class="row d-none d-md-block">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h2 class="g-full__title text-center">
                    The most beautiful single ladies in Ukraine
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="gf-search">
                    <form action="" class="gf-s__wrap d-flex flex-column">
                        <h5 class="gf-s__main-title text-center">
                            Advanced search
                        </h5>
                        <div class="gf-s__form-point">
                            <span class="gf-s__span">
                                Age between:
                            </span>
                            <div class="gf-s__input-inter-wrap">
                                <input value="<?=$filter_data['age']['st'];?>" name="age[st]" id="age-start" type="number" min="19" max="99" class="gf-s__input-inter" placeholder="19">
                                <input value="<?=$filter_data['age']['fn'];?>" name="age[fn]" id="age-end" type="number" min="19" max="99" class="gf-s__input-inter" placeholder="any">
                            </div>
                        </div>
                        <div class="gf-s__form-point">
                            <span class="gf-s__span">
                                Height between:
                            </span>
                            <div class="gf-s__input-inter-wrap">
                                <input value="<?=$filter_data['height']['st'];?>" name="height[st]" id="height-start" type="number" min="100" max="220" class="gf-s__input-inter" placeholder="cm">
                                <input value="<?=$filter_data['height']['fn'];?>" name="height[fn]" id="height-end" type="number" min="100" max="220" class="gf-s__input-inter" placeholder="cm">
                            </div>
                        </div>
                        <div class="gf-s__form-point d-flex">
                            <span class="gf-s__span">
                                Children:
                            </span>
                            <select name="children" id="children" class="gf-s__input">
                                <option <?=($filter_data['children'] == '-' ? 'selected' : '');?> value="-1">doesn’t matter</option>
                                <option <?=($filter_data['children'] == '0' ? 'selected' : '');?> value="0">no children</option>
                                <option <?=($filter_data['children'] == '1' ? 'selected' : '');?> value="1">has children</option>
                            </select>
                        </div>
                        <div class="gf-s__form-point d-flex">
                            <span class="gf-s__span">
                                Location:
                            </span>
                            <select name="city" id="location" class="gf-s__input">
                                <option <?=($filter_data['city'] == '-1' ? 'selected' : '');?> value="-1">doesn’t matter</option>
                                <option <?=($filter_data['city'] == 'Kiev' ? 'selected' : '');?> value="Kiev">Kiev region</option>
                                <option <?=($filter_data['city'] == 'another region' ? 'selected' : '');?> value="another region">other regions</option>
                            </select>
                            <!-- <input id="location" type="text" class="gf-s__input" placeholder="doesn’t matter"> -->
                        </div>
                        <div class="gf-s__form-point d-flex">
                            <span class="gf-s__span">
                                Language:
                            </span>
                            <select name="lang_eng" id="language" class="gf-s__input">
                                <option <?=($filter_data['lang_eng'] == '-1' ? 'selected' : '');?> value="-1">any</option>
                                <option <?=($filter_data['lang_eng'] == 'basic' ? 'selected' : '');?> value="basic">basic English</option>
                                <option <?=($filter_data['lang_eng'] == 'good' ? 'selected' : '');?> value="good">good English</option>
                            </select>
                        </div>
                        <input name="sub_search" id="gf__search-1" type="submit" class="gf-s__btn-search-1 d-flex" value="Search">
                    </form>
                    <div class="gf-s__wrap-group">
                        <h5 class="gf-s__title text-center">
                            Search girls from Ukraine
                        </h5>
                        <div class="gf-s__wrap-checkboxes">
                            <div class="gf-s__wrap-twix">
                                <a href="/gallery?sub_search=1&city=Kiev" class="gf-s__label-for-check">Ladies from Kiev region</a>
                            </div>
                            <div class="gf-s__wrap-twix">
                                <a href="/gallery?sub_search=1&city=another+region" class="gf-s__label-for-check">Ladies from other region</a>
                            </div>
                        </div>
                    </div>
                    <div class="gf-s__wrap-group">
                        <h5 class="gf-s__title text-center">
                            Search Ukranian girls
                        </h5>
                        <div class="gf-s__wrap-age d-flex">
                            <span class="gf-s__span">Age:</span>
                            <div class="gf-s__wrap-checkboxes d-flex flex-wrap">
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&age[st]=19&age[fn]=25" class="gf-s__label-for-check">19-25,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&age[st]=25&age[fn]=35" class="gf-s__label-for-check">25-35,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&age[st]=35&age[fn]=45" class="gf-s__label-for-check">35-45,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&age[st]=45" class="gf-s__label-for-check">45></a>
                                </div>
                            </div>
                        </div>
                        <div class="gf-s__wrap-height d-flex">
                            <span class="gf-s__span">Height:</span>
                            <div class="gf-s__wrap-checkboxes d-flex flex-wrap">
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&height[st]=150&height[fn]=160" class="gf-s__label-for-check">150-160,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&height[st]=160&height[fn]=170" class="gf-s__label-for-check">160-170,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&height[st]=170&height[fn]=180" class="gf-s__label-for-check">170-180,</a>
                                </div>
                                <div class="gf-s__wrap-twix">
                                    <a href="/gallery?sub_search=1&height[st]=180" class="gf-s__label-for-check">180></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" method="post" class="gf-s__wrap">
                        <div class="gf-s__wrap-group">
                            <h5 class="gf-s__title text-center">
                                Search by the code
                            </h5>
                            <div class="gf-s__wrap-code d-flex">
                                <span class="gf-s__span">Code:</span>
                                <input name="num" type="number" class="gf-s__input-code">
                                <input type="submit" name="sub_search_num" class="gf-s__btn-search-2 d-flex" value="Search">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-12 d-block d-md-none">
                <h2 class="g-full__title text-center">
                    The most beautiful single ladies in Ukraine
                </h2>
            </div>
            <div class="col-md-8 col-xl-9">
                <div class="gf-gallery">
                    <? if($page_this == 1 && !$is_admin): ?>
                    <div class="gf-g__latest-editions-wrap">
                        <div class="col-12">
                            <h6 class="gf-gl__title">
                                Latest additions
                            </h6>
                        </div>
                        <div class="d-flex flex-wrap gf-gl__latest-editions">
                            <? foreach($girls_public_new as $girl): ?>
                            <div class="col-6 col-xl-4">
                                <div class="card gf-gl__girl">
                                    <div class="gf-gl__bg-hover"></div>
                                    <a href="/girls/<?=$girl['id'];?>" class="gf-gl__girl-specifications d-flex justify-content-center align-items-center">
                                        <span class="gf-gl__girl-specifications-span">
                                            <?=$girl['city'];?>, <?=$girl['weight'];?>/<?=$girl['height'];?>
                                        </span>
                                    </a>
                                    <img class="card-img-top gf-gl__img" src="<?=$girl['img'];?>" alt="Card image cap">
                                    <div class="card-body gf-gl__card-body">
                                        <p class="card-text gf-gl__card-text"><?=$girl['name'];?></p>
                                    </div>
                                </div>
                            </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <? endif; ?>
                    <? if($is_admin): ?>
                    <div class="gf-g__all-girls-wrap">
                        <div class="col-12">
                            <h6 class="gf-ga__title">
                                All UNPUBLIC girls
                            </h6>
                            <span class="gf-ga__quantity">
                                <?=count($girls_private);?> in total
                            </span>
                        </div>
                        <div class="d-flex flex-wrap gf-ga__all-girls">
                            <? foreach($girls_private as $girl): ?>
                            <div class="col-6 col-xl-4">
                                <div class="card gf-ga__girl">
                                    <div class="gf-ga__bg-hover"></div>
                                    <a href="/girls/<?=$girl['id'];?>" class="gf-ga__girl-specifications d-flex justify-content-center align-items-center">
                                        <span class="gf-ga__girl-specifications-span">
                                            <?=$girl['city'];?>, <?=$girl['weight'];?>/<?=$girl['height'];?>
                                        </span>
                                    </a>
                                    <img class="card-img-top gf-ga__img" src="<?=$girl['img'];?>" alt="Card image cap">
                                    <div class="card-body gf-ga__card-body">
                                        <p class="card-text gf-ga__card-text"><?=$girl['name'];?></p>
                                    </div>
                                </div>
                            </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <? endif; ?>
                    <div class="gf-g__all-girls-wrap">
                        <div class="col-12">
                            <h6 class="gf-ga__title">
                                All girls
                            </h6>
                            <span class="gf-ga__quantity">
                                <?=$girl_from;?> - <?=$girl_to;?> from <?=count($girls_public);?> in total
                            </span>
                        </div>
                        <div class="d-flex flex-wrap gf-ga__all-girls">
                            <? foreach($girls_public as $girl): ?>
                            <div class="col-6 col-xl-4">
                                <div class="card gf-ga__girl">
                                    <div class="gf-ga__bg-hover"></div>
                                    <a href="/girls/<?=$girl['id'];?>" class="gf-ga__girl-specifications d-flex justify-content-center align-items-center">
                                        <span class="gf-ga__girl-specifications-span">
                                            <?=$girl['city'];?>, <?=$girl['weight'];?>/<?=$girl['height'];?>
                                        </span>
                                    </a>
                                    <img class="card-img-top gf-ga__img" src="<?=$girl['img'];?>" alt="Card image cap">
                                    <div class="card-body gf-ga__card-body">
                                        <p class="card-text gf-ga__card-text"><?=$girl['name'];?></p>
                                    </div>
                                </div>
                            </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="gf-pagination">
                    <nav aria-label="Navigation between Pages with girls">
                        <ul class="pagination flex-wrap justify-content-start align-items-center">
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link" href="/gallery/<?=($page_this > 1 ? $page_this - 1 : 1) . $filter_string;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link<?=($page_this == 1 ? '_active' : '');?>" href="/gallery/1<?=$filter_string;?>">1</a>
                            </li>
                            <? if($page_this > 3): ?>
                            &nbsp;/&nbsp;
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link" href="">...</a>
                            </li>
                            <? endif; ?>
                            <? foreach($pages_pag as $page_pag): ?>
                            &nbsp;/&nbsp;
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link<?=($page_this == $page_pag ? '_active' : '');?>" href="/gallery/<?=$page_pag . $filter_string;?>"><?=$page_pag;?></a>
                            </li>
                            <? endforeach; ?>
                            <? if($page_this < $page_total - 2): ?>
                            &nbsp;/&nbsp;
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link" href="">...</a>
                            </li>
                            <? endif; ?>
                            &nbsp;/&nbsp;
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link<?=($page_this == $page_total ? '_active' : '');?>" href="/gallery/<?=$page_total . $filter_string;?>"><?=$page_total;?></a>
                            </li>
                            <li class="gf-p__page-item">
                                <a class="gf-p__page-link" href="/gallery/<?=($page_this < $page_total ? $page_this + 1 : $page_total) . $filter_string;?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<?=$footer;?>
