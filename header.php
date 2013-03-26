<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<title><?php wp_title(''); ?></title>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
			<div class="row-fluid">
        <div class="span3">
          <div class="ug-site-header">
            <h1 class="ug-brand">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<?php bloginfo('name'); ?>
							</a>
						</h1>
            <?php bones_main_nav(); ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
        <div class="span9">
					<div class="ug-site-content">
