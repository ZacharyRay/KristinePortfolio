<?php 
$header_footer_field_group = get_field('header_footer', 'option');
$header = $header_footer_field_group['header']
?>

<div id="menu-wrap">
    <aside>
        <div>
            <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
             ?>
         </div>
    </aside>
    <?php wp_nav_menu('main'); ?>
    <aside>
        <a href="<?= $header['some_link'] ?>" target="_blank">
            <div style="background-image: url('<?= $header['some_logo'] ?>')"></div>
        </a>
    </aside>
</div>

