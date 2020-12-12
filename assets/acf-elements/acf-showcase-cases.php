<?php 
$id = get_queried_object_id();
$case = get_sub_field('case', $id);
$short_description = get_sub_field('short_description', $id);
$left_or_right = get_sub_field('left_or_right', $id);
$case_featured_image = get_the_post_thumbnail_url($case);
$case_excerpt = $case->post_excerpt;
$the_post_title = $case->post_title;
$permalink = get_permalink($case);
$post_count = get_row_index();
// echo '<pre>' . print_r($post_count, true) . '</pre>';    
?>

<!-- 
pc = post case
l = left
r = right
-->

<!-- left column -->
<?php if(!empty($left_or_right === 'left')) { ?>
<section id="pc-l-wrapper">
    <div id="pc-l-inner-wrapper">
        <div id="pc-l-col-l-wrap" class="pc-l-col-grid-a">
            <div id="pc-l-col-l" class="lazy" data-src="<?= $case_featured_image; ?>"></div>
        </div>
        <div id="pc-l-col-r" class="pc-l-col-grid-b">
            <div class="pc-l-col-r-wrap">
                <p><?= $short_description; ?></p>
                <div class="pc-l-col-r-headline">
                    <div class="pc-counter">(<?= $post_count ?>)</div>
                    <h3><?= $the_post_title; ?></h3>
                </div>
                <div class="pc-line-left">
                    <div class="pc-l-circle"></div>
                    <hr class="pc-line-l">
                </div>
                <p><?= $case_excerpt; ?></p>
                <a href="<?= $permalink; ?>">SE CASE</a>
            </div>
        </div>
    </div>
</section>  
<?php } ?>    

<!-- right column -->

<?php if(!empty($left_or_right === 'right')) { ?>
    <section id="pc-r-wrapper">
    <div id="pc-r-inner-wrapper" class="pc-r-wrapper-grid">
        <div id="pc-r-col-l" class="pc-r-col-grid-b">
            <div class="pc-r-col-l-wrap">
                <p><?= $short_description; ?></p>
                <div class="pc-r-col-l-headline">
                    <div class="pc-counter">(<?= $post_count ?>)</div>
                    <h3><?= $the_post_title; ?></h3>
                </div>
                <div class="pc-line-right">
                    <div class="pc-r-circle"></div>
                    <hr class="pc-line-r">
                </div>
                <p><?= $case_excerpt; ?></p>
                <a href="<?= $permalink; ?>">SE CASE</a>
            </div>
        </div>
        <div id="pc-r-col-r-wrap" class="pc-l-col-grid-a">
            <div id="pc-r-col-r" class="lazy" data-src="<?= $case_featured_image; ?>"></div>
        </div>
    </div>
</section>  
<?php } ?> 