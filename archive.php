<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h3>
				<?php if (is_category()) { ?>
					<span><?php _e("Posts Categorized:", "bonestheme"); ?></span>
					<?php single_cat_title(); ?>
				<?php } elseif (is_tag()) { ?>
					<span><?php _e("Posts Tagged:", "bonestheme"); ?></span>
					<?php single_tag_title(); ?>
				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author;
				?>
					<span><?php _e("Posts By:", "bonestheme"); ?></span>
					<?php the_author_meta('display_name', $author_id); ?>
				<?php } elseif (is_day()) { ?>
					<span><?php _e("Daily Archives:", "bonestheme"); ?></span>
					<?php the_time('l, F j, Y'); ?>
				<?php } elseif (is_month()) { ?>
					<span><?php _e("Monthly Archives:", "bonestheme"); ?></span>
					<?php the_time('F Y'); ?>
				<?php } elseif (is_year()) { ?>
					<span><?php _e("Yearly Archives:", "bonestheme"); ?></span>
					<?php the_time('Y'); ?>
				<?php } ?>
			</h3>
			<?php include("post-excerpt.php"); ?>
		<?php endwhile; ?>
		<?php include("page-nav.php"); ?>
	<?php else : ?>
		<?php include("post-404.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
