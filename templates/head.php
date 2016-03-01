<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Description -->
    <meta name="keywords" content="Dustin Van Orman"/>
    <meta name="description" content="Dustin Van Orman"/>
      
    <meta name="robots" content="noodp,noydir"/>
    <meta name="author" content="Dustin Van Orman"/>

    <!-- Social Meta -->
    <meta property="og:title" content="Dustin Van Orman"/>
    <meta property="og:url" content="//dustinvanorman.com"/>
    <meta property="og:site_name" content="Dustin Van Orman"/>
    <meta property="og:image" content="//dustinvanorman.com/wp-content/themes/dustin2016/dist/images/dvanorman-homepage.jpg"/>

  	<link rel="author" href="//www.linkedin.com/in/dustinvanorman" title="Dustin Van Orman"/>

    <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= esc_url(get_feed_link()); ?>">
    <?php wp_head(); ?>
    
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700">
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700'>

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri('/')); ?>/assets/styles/black-tie/css/black-tie.min.css">
    <link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri('/')); ?>/style.css">

    <!-- Analytics -->
    <?php get_template_part('templates/google-analytics'); ?>
  </head>
