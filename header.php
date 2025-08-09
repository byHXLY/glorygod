<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="nav">
  <div class="nav-container">
    <div class="nav-left">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
        <span class="logo-mark"></span>
        <span class="site-title"><?php bloginfo('name'); ?></span>
      </a>
    </div>
    <div class="nav-center">
      <?php wp_nav_menu([
        'theme_location' => 'main',
        'container'      => false,
        'fallback_cb'    => false
      ]); ?>
    </div>
    <div class="nav-right">
      <a href="<?php echo esc_url(is_user_logged_in() ? admin_url() : wp_login_url()); ?>" class="btn btn-ghost btn-sm"><?php echo is_user_logged_in() ? 'Админка' : 'Sign in'; ?></a>
      <a href="#" class="btn btn-primary btn-sm">Get started</a>
    </div>
  </div>
</header>
<main class="site-main">
