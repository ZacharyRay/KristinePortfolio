<?php 
    $post_two_col_left = get_sub_field('left_col');
    $post_two_col_right = get_sub_field('right_col');
    $post_two_col_image = get_sub_field('image');
?>

<!--
p = post
l = left
r = right
 -->

 <section id="p-two-col-wrapper">
     <div id="p-two-col-inner-wrapper">
     <?php if(!empty($post_two_col_left)) { ?>
        <div id="p-two-col-l">
            <?= $post_two_col_left ?>
        </div>
     <?php }; 
     if(!empty($post_two_col_left)) {
     ?>
        <div id="p-two-col-r">
            <?= $post_two_col_right ?>
        </div>
    <?php } ?>
        <?php if(!empty($post_two_col_image)) { ?>
        <div id="p-two-col-image" style="background-image: url('<?= $post_two_col_image ?>')"></div>
        <?php } ?>
     </div>
 </section>