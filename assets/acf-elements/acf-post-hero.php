<?php
$post_headline = get_sub_field('headline');
$post_description = get_sub_field('description');
$post_image = get_sub_field('image');
?>

<!--  
p = post
h = hero
l = left
r = right
 -->

<section id="p-h-wrapper">
    <div id="p-h-inner-wrapper">
        <div id="p-h-l-col">
            <div class="p-h-content">
                <?= $post_headline ?>
                <?= $post_description ?>
            </div>
        </div>
        <div id="p-h-r-col">
            <div id="p-h-image" style="background-image: url('<?= $post_image ?>')"></div>
        </div>
    </div>
</section>
