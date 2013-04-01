<?php get_header(); ?>
	<?php get_sidebar('index1'); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php include("post.php"); ?>
		<?php endwhile; ?>
		<?php include("page-nav.php"); ?>
	<?php else : ?>
		<?php include("post-404.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
