<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h3>
				<span><?php _e('Search Results for:', 'bonestheme'); ?></span>
				<?php echo esc_attr(get_search_query()); ?>
			</h3>
			<?php include("post-excerpt.php"); ?>
		<?php endwhile; ?>
		<?php include("page-nav.php"); ?>
	<?php else : ?>
		<?php include("post-404.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
