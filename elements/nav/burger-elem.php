<div class="burger-logo">
  <?php 
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
      }
  ?>
</div>
<div id="burger-bg"></div>
<div class="burger-wrap">
<input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
<label for="main-navigation-toggle">
  <span></span>
</label>
<nav id="main-navigation" class="nav-main">
  <ul class="menu">
    <div class="menu__item">
      <?php wp_nav_menu('main'); ?>
    </div>
  </ul>
</nav>
</div>