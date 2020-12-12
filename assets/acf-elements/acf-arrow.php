<?php 
$arrow_icon = get_sub_field('arrow_icon')
?>

<?php 
if( get_sub_field('activate_arrow') ) {
?>

<section id="arrow-wrapper">
    <div id="arrow-inner-wrapper">
            <div class="arrow-icon" style="background-image: url('<?= $arrow_icon; ?>')"></div>
    </div>
</section>

<?php
}
?>