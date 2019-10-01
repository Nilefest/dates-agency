<?=$header;?>
<?=$nav;?>

<section class="admin-button">
    <div class="container">
        <div class="row d-flex">
            <div class="col-3">
                <div class="admin-button__wrap">
                    <a href="/man/form" class="admin-button__link admin-button__link_man">
                        Questionnaire for men
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="admin-button__wrap">
                    <a href="/admin/girls" class="admin-button__link admin-button__link_girl">
                        Анкета девушек
                    </a>
                </div>
            </div>
            <div class="col-2">
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

<!-- "Это начало формы создания блога. Если я что-то сделал не так - скажешь" -->
<form action="" method="post" enctype="multipart/form-data">
    <section id="blog-constructor" class="blog-constructor">
        <div id="all_blog" class="container">
            <div class="row">
                <div class="col-12">
                    <div id="pofg__row-edit" class="pofg__row-for-button d-flex justify-content-end flex-column flex-sm-row">
                        <? if(isset($blog_id)): ?>
                        <a href="/blog/<?=$blog_id;?>" class="pofg__admin-btn pofg__btn_cancel">Вернуться</a>
                        <input name="sub_delete_blog" type="submit" class="pofg__admin-btn pofg__btn_delete" value="Удалить">
                        <? endif; ?>
                        <input name="sub_save_blog" type="submit" class="pofg__admin-btn pofg__btn_save" value="Сохранить">
                    </div>
                </div>
            </div>
            <!-- Blog Tiitle -->
            <div class="row">
                <div class="col-12">
                    <input name="id" type="hidden" value="<?=$blog_id;?>">
                    <input value="<?=$blog_title;?>" type="text" name="title" class="a-b__title text-center">
                </div>
            </div>
            <? $blog_admin_items_el = ['1' => $blog_item1,'2' => $blog_item2,'3' => $blog_item3,'4' => $blog_item4,'5' => $blog_item5,'6' => $blog_item6,]; ?>
            <? 
            $n_block_total = 0;
            $n_block = ['1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0];
            
            if(isset($blog_id)){
                foreach($blog_items as $blog_item){ 
                    $this_item = $blog_admin_items_el[$blog_item['type']];

                    $this_item = str_replace('upload_file_name_n0', 'upload_file_name_n' . $n_block_total, $this_item);
                    $n_block_total++;

                    $this_item = str_replace('upload_button_ST_PhtR_id0', 'upload_button_ST_PhtR_id' . $n_block['1'], $this_item);
                    $this_item = str_replace('upload_button_ST_PhtL_id0', 'upload_button_ST_PhtL_id' . $n_block['2'], $this_item);
                    $this_item = str_replace('upload_button_Subt_PhtR_id0', 'upload_button_Subt_PhtR_id' . $n_block['3'], $this_item);
                    $this_item = str_replace('upload_button_Subt_PhtL_id0', 'upload_button_Subt_PhtL_id' . $n_block['4'], $this_item);
                    $this_item = str_replace('upload_button_AHeadline_id0', 'upload_button_AHeadline_id' . $n_block['5'], $this_item);
                    $this_item = str_replace('upload_button_Subt_PhtL_id0', 'upload_button_Subt_PhtL_id' . $n_block['6'], $this_item);            
                    $n_block[$blog_item['type']]++;

                    $this_item = str_replace('{element_id}', $blog_item['id'], $this_item);
                    $this_item = str_replace('{title}', $blog_item['headline'], $this_item);
                    $this_item = str_replace('{text1}', $blog_item['text1'], $this_item);
                    $this_item = str_replace('{text2}', $blog_item['text2'], $this_item);
                    $this_item = str_replace('{img}', "/application/public/files/blog/$blog_id/" . $blog_item['img'], $this_item);
                    echo $this_item;
                }
            }
            ?>
        </div>
    </section>
    <!-- "Это кнопки для добавления блоков блога. Опять же, скажешь, если что-то не так" -->
    <section id="blog-plus-items" class="blog-plus-items">
        <div class="container">
            <div class="row d-flex flex-wrap">
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewST_PhtR" type="button" title="Add row 'Subtitle with text / Photo is on the right'" class="blog-plus-items__btn blog-plus-items__btn_subtitle-text-l">
                </div>
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewST_PhtL" type="button" title="Add row 'Subtitle with text / Photo is on the left'" class="blog-plus-items__btn blog-plus-items__btn_subtitle-text-r">
                </div>
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewSubt_PhtR" type="button" title="Add row 'Subtitle / Photo is on the right'" class="blog-plus-items__btn blog-plus-items__btn_subtitle-l">
                </div>
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewSubt_PhtL" type="button" title="Add row 'Subtitle / Photo is on the left'" class="blog-plus-items__btn blog-plus-items__btn_subtitle-r">
                </div>
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewAHeadline" type="button" title="Add row 'Headline'" class="blog-plus-items__btn blog-plus-items__btn_headline">
                </div>
                <div class="col-6 col-md-4 col-xl-2 d-flex justify-content-center">
                    <input id="NewAOnlyText" type="button" title="Add row 'Only text'" class="blog-plus-items__btn blog-plus-items__btn_only-text">
                </div>
            </div>
        </div>
    </section>
</form>
<div class="elements_blog" style="display:none">
    <? 
    // create elements for creators
    
    $blog_admin_items_el['1'] = str_replace('upload_button_ST_PhtR_id0', 'upload_button_ST_PhtR_id' . $n_block['1'], $blog_admin_items_el['1']);
    $blog_admin_items_el['2'] = str_replace('upload_button_ST_PhtL_id0', 'upload_button_ST_PhtL_id' . $n_block['2'], $blog_admin_items_el['2']);
    $blog_admin_items_el['3'] = str_replace('upload_button_Subt_PhtR_id0', 'upload_button_Subt_PhtR_id' . $n_block['3'], $blog_admin_items_el['3']);
    $blog_admin_items_el['4'] = str_replace('upload_button_Subt_PhtL_id0', 'upload_button_Subt_PhtL_id' . $n_block['4'], $blog_admin_items_el['4']);
    $blog_admin_items_el['5'] = str_replace('upload_button_AHeadline_id0', 'upload_button_AHeadline_id' . $n_block['5'], $blog_admin_items_el['5']);
    $blog_admin_items_el['6'] = str_replace('upload_button_Subt_PhtL_id0', 'upload_button_Subt_PhtL_id' . $n_block['6'], $blog_admin_items_el['6']);  
    
    foreach($blog_admin_items_el as $blog_admin_item){
        $this_item = $blog_admin_item;
        
        $this_item = str_replace('upload_file_name_n0', 'upload_file_name_n' . $n_block_total, $this_item);

        $this_item = str_replace('{title}', '', $this_item);
        $this_item = str_replace('{text1}', '', $this_item);
        $this_item = str_replace('{text2}', '', $this_item);
        $this_item = str_replace('{img}', '' . $blog_item['img'], $this_item);
        echo $this_item;
    }
    ?>
</div>
<?=$footer;?>
<script>
    $('#all_blog .upload_img_file_label span').fadeOut(0);
    $('#all_blog .upload_img_file_label img').fadeIn(0);
    
    var n_block = <?=$n_block_total;?>;
    var n_block_ST_PhtR = <?=$n_block['1'];?>;
    var n_block_ST_PhtL = <?=$n_block['2'];?>;
    var n_block_Subt_PhtR = <?=$n_block['3'];?>;
    var n_block_Subt_PhtL = <?=$n_block['4'];?>;
    var n_block_AHeadline = <?=$n_block['5'];?>;
    var n_block_Subt_PhtL = <?=$n_block['6'];?>;

    $('#NewST_PhtR').click(function() {
        var block = $(".elements_blog .ST_PhtR");

        block.html(block.html().split("upload_button_ST_PhtR_id" + n_block_ST_PhtR).join("upload_button_ST_PhtR_id" + (n_block_ST_PhtR + 1)));
        n_block_ST_PhtR++;

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });
    $('#NewST_PhtL').click(function() {
        var block = $(".elements_blog .ST_PhtL");

        block.html(block.html().split("upload_button_ST_PhtL_id" + n_block_ST_PhtL).join("upload_button_ST_PhtL_id" + (n_block_ST_PhtL + 1)));
        n_block_ST_PhtL++;

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });
    $('#NewSubt_PhtR').click(function() {
        var block = $(".elements_blog .Subt_PhtR");

        block.html(block.html().split("upload_button_Subt_PhtR_id" + n_block_Subt_PhtR).join("upload_button_Subt_PhtR_id" + (n_block_Subt_PhtR + 1)));
        n_block_Subt_PhtR++;

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });
    $('#NewSubt_PhtL').click(function() {
        var block = $(".elements_blog .Subt_PhtL");

        block.html(block.html().split("upload_button_Subt_PhtL_id" + n_block_Subt_PhtL).join("upload_button_Subt_PhtL_id" + (n_block_Subt_PhtL + 1)));
        n_block_Subt_PhtL++;

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });
    $('#NewAHeadline').click(function() {
        var block = $(".elements_blog .AHeadline");

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });
    $('#NewAOnlyText').click(function() {
        var block = $(".elements_blog .AOnlyText");

        $('.elements_blog').html($('.elements_blog').html().split("upload_file_name_n" + n_block).join("upload_file_name_n" + (n_block + 1)));
        n_block++;

        block.clone().appendTo("#all_blog");

        //alert(block.html());
    });

    $('body').on('click', '.delete_block', function() {
        var blog_id = $(this).parent().find('.blog_element_id').val();
        $('#all_blog').prepend('<input type="hidden" name="delete_items[]" value="' + blog_id + '">');
        $(this).parent().remove();
    });

    $('body').on('change', '.upload_img_file', showFile);

    $('body').on('click', '.delete_img_file', function() {
        var this_label = $(this).siblings('.upload_img_file_label');
        this_label.children('img').fadeOut(0);
        this_label.children('span').fadeIn(0);
        $(this).siblings('.upload_img_file').val("");
    });

    function showFile(e) {
        //alert($(this).parent().html());

        var this_label = $(this).siblings('.upload_img_file_label');
        var img = this_label.children('img');
        this_label.children('span').fadeOut(0);
        img.fadeIn(0);
        var files = e.target.files;
        for (var i = 0, f; f = files[i]; i++) {
            if (!f.type.match('image.*')) continue;
            var fr = new FileReader();
            fr.onload = (function(theFile) {
                return function(e) {
                    img.attr('src', e.target.result);
                };
            })(f);

            fr.readAsDataURL(f);
        }
    }

</script>
