<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php include("post.php"); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php include("post-404.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
