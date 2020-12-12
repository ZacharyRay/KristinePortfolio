<?php 
$case_grid = get_sub_field('choose_cases');
//echo '<pre>' . print_r($case_grid, true) . '<pre/>'
?>


<!-- 
pcg = post case grid
l = left
r = right
-->


<section id="pcg-wrapper">
    <div class="pcg-inner-wrapper">
        <?php foreach($case_grid as $the_case) { 
        $case_info = $the_case['case'];
        $case_grid_featured_image = get_the_post_thumbnail_url($case_info);
        $case_grid_title = $case_info->post_title;
        $case_permalink = get_permalink($case_info);
        ?>
        <a class="pcg-post-link" href="<?= $case_permalink ?>">
        <div class="pcg-post-cases">
            <div class="pcg-image lazy" data-src="<?= $case_grid_featured_image; ?>"></div>
            <div class="pcg-short-description">
                <p><?= $the_case['short_description'] ?></p>
            </div>
            <div class="pcg-title">
                <h3><?= $case_grid_title; ?></h3>
            </div>
        </div>
        </a>
        <?php } ?>
    </div>
</section>