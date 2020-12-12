<?php 
$headline = get_sub_field('headline');
$headline_quote_icon = get_sub_field('quote_icon');
?>

<!--
ph = page headline
l = left
r = right
 -->

 <section id="ph-page-name">
     <div id="ph-page-name-content">
        <h1><?= wp_title( '', true, '' ); ?></h1>
     </div>
 </section>

<section id="ph-wrapper">
    <div id="ph-inner-wrapper">
        <div id="ph-quote-icon" style="background-image: url('<?= $headline_quote_icon ?>')"></div>
        <div id="ph-content">
            <?= $headline ?>
        </div>
    </div>
</section>