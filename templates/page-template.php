<?php
/*
Template Name: Page template
 */
get_header();

if( have_rows('page_constructor') ):
    while ( have_rows('page_constructor') ) : the_row();
?>

<?php //Page explainer left ?>
      <?php if( get_row_layout() == 'page_explainer_left' ):?>
        <?php get_template_part('assets/acf-elements/acf', 'explainer'); ?>
<?php //Quote slider ?> 
      <?php elseif( get_row_layout() == 'quote_slider' ):?>
        <?php get_template_part('assets/acf-elements/acf', 'quoteslider'); ?>

      <?php endif; ?>

<?php
  endwhile;  
  endif;
?>
<?php 
get_footer();
?>