<?=$header;?>
<?=$nav;?>

<!-- Далее идёт код что бы под HEADER'ом был фон. Сделан костылём, потому что, на разных страницах, этот фон разный. иногда это совместный фон с секцией снизу -->
<div class="b-nav-background d-none d-sm-block"></div>
<!-- Далее идёт костыль для того, что бы было нормальное отображение этого фона на мобильном -->
<div class="b-nav-background-mobile d-flex d-block d-sm-none"></div>

<!-- "Блог должен иметь такой вид" -->
<section id="admin-blog" class="admin-blog">
    <div class="container">
        <? if(!empty($admin)): ?>
        <br>
        <div class="row">
            <div class="col-12">
                <div id="pofg__row-edit" class="pofg__row-for-button d-flex justify-content-end flex-column flex-sm-row">
                    <? if(isset($blog_id)): ?>
                    <a href="/admin/blog/<?=$blog_id;?>" class="pofg__admin-btn pofg__btn_cancel">Редактировать</a>
                    <? endif; ?>
                </div>
            </div>
        </div>
        <? endif; ?>
        <!-- TITLE -->
        <div class="row">
            <div class="col-12">
                <h2 class="b-full__title text-center">
                    <?=$blog_title;?>
                </h2>
            </div>
        </div>
        <!-- Blog items... -->
        <? $blog_items_el = ['1' => $blog_item1,'2' => $blog_item2,'3' => $blog_item3,'4' => $blog_item4,'5' => $blog_item5,'6' => $blog_item6,];?>

        <? foreach($blog_items as $blog_item): ?>
        <?
            $this_item = $blog_items_el[$blog_item['type']];
            $this_item = str_replace('{title}', $blog_item['headline'], $this_item);
            $this_item = str_replace('{text1}', $blog_item['text1'], $this_item);
            $this_item = str_replace('{text2}', $blog_item['text2'], $this_item);
            $this_item = str_replace('{img}', "/application/public/files/blog/$blog_id/" . $blog_item['img'], $this_item);
            echo $this_item;
        ?>
        <? endforeach; ?>
    </div>
<div class="blog__margin_bottom"></div>
</section>
<!-- "Это конец страницы блога" -->

<?=$footer;?>
