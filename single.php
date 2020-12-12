<?php
get_header();
?>

<?php
if( have_rows('post_constructor') ):
    while ( have_rows('post_constructor') ) : the_row();
?>

<?php //Post hero ?>
      <?php if( get_row_layout() == 'hero' ):?>
        <?php get_template_part('assets/acf-elements/acf', 'post-hero'); ?>
<?php //Post two col w image ?> 
        <?php elseif( get_row_layout() == 'two_columns_w_image'): 
          get_template_part('assets/acf-elements/acf', 'post-two-col');
          ?>
<?php //Post explainer ?> 
        <?php elseif( get_row_layout() == 'post_explainer'): 
          get_template_part('assets/acf-elements/acf', 'post-explainer');
          ?>
      <?php endif; ?>

<?php
  endwhile;  
  endif;
?>


<?php
get_footer();
?>
