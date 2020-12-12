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
<?php //Quote slider ?> 
      <?php elseif( get_row_layout() == 'page_explainer_right' ):?>
        <?php get_template_part('assets/acf-elements/acf', 'explainer-right'); ?>
<?php //Quote slider ?> 
      <?php elseif( get_row_layout() == 'headline' ):?>
        <?php get_template_part('assets/acf-elements/acf', 'headline'); ?>
<?php // Showcase cases ?>
        <?php elseif( get_row_layout() == 'showcase_case' ): ?>
          <?php get_template_part('assets/acf-elements/acf', 'showcase-cases'); ?>
<?php // Showcase cases grid ?>
        <?php elseif( get_row_layout() == 'showcase_case_grid' ): ?>
          <?php get_template_part('assets/acf-elements/acf', 'showcase-case-grid'); ?>
<?php // Arrow ?>
        <?php elseif( get_row_layout() == 'arrow' ): ?>
          <?php get_template_part('assets/acf-elements/acf', 'arrow'); ?>
        <?php endif; ?>
<?php
  endwhile;  
  endif;
?>
<?php 
get_footer();
?>