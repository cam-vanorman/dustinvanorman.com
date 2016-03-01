<?php use Roots\Sage\Nav\NavWalker; ?>

  <header class="banner navbar navbar-custom" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <i class="btl bt-bars bt-2x bt-bordered"></i>
        </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
          <img src="<?= esc_url(get_template_directory_uri('/')); ?>/dist/images/logo.png" />
        </a>
      </div>

      <nav id="main-navigation" class="collapse navbar-collapse navbar-right" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
        ?>
      </nav>
    </div>
  </header>
