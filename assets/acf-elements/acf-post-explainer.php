<?php 
$post_explainer_col_type = get_sub_field('choose_column_type');
$post_explainer_left_col = get_sub_field('left_col');
$post_explainer_right_col = get_sub_field('right_col');
$post_explainer_center_col = get_sub_field('center_col');
$post_explainer_image = get_sub_field('image');
?>

<!--
p = post
e = explainer
l = left
r = right
 -->

 <section id="p-e-wrapper">
     <div id="p-e-inner-wrapper">
         <div id="p-e-col">
         <?php if(!empty($post_explainer_col_type === 'doubleCol')) { ?>
            <div class="p-e-col-double">
                <div class="p-e-col-l">
                    <?= $post_explainer_left_col; ?>
                </div>
                <div class="p-e-col-r">
                    <?= $post_explainer_right_col; ?>
                </div>
                <div class="p-e-col-image" style="background-image: url('<?= $post_explainer_image; ?>')"></div>
            </div>
         <?php } ?> 
            <div class="p-e-col-center">
        <?php
            if(!empty($post_explainer_col_type === 'center')) { ?>
                <div class="p-e-col-center-text">
                    <?= $post_explainer_center_col; ?>
                </div>
                <div class="p-e-col-center-image" style="background-image: url('<?= $post_explainer_image; ?>')"></div>
        <?php } ?>
            </div>
         </div>
     </div>
 </section>