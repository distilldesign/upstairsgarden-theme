<?php get_header(); ?>
	<?php get_sidebar('index1'); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article class="ug-post">
				<div class="row-fluid">
					<div class="span8">
						<header class="ug-post-header">
							<h1>
								<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
						</header>
						<div class="ug-post-by">
							<span class="ug-post-by-extra">by</span>
							<span class="ug-post-by-author"><?php echo(bones_get_the_author_posts_link()); ?></span>
							<span class="ug-post-by-extra">in</span>
							<span class="ug-post-by-category">
							<?php echo(get_the_category_list(', ')); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="row-fluid">
	        <div class="span9">
						<?php the_content(); ?>
					</div>
					<div class="span3">
	          <aside class="ug-post-date">
	            <span class="ug-post-date-month"><?php echo(get_the_time('M')); ?></span>
	            <span class="ug-post-date-day"><?php echo(get_the_time('d')); ?></span>
	            <span class="ug-post-date-year"><?php echo(get_the_time('Y')); ?></span>
	          </aside>
	        </div>
				</div>
			</article>
		<?php endwhile; ?>
		<?php if (function_exists('bones_page_navi')) { ?>
				<?php bones_page_navi(); ?>
		<?php } else { ?>
				<nav class="wp-prev-next">
						<ul class="clearfix">
							<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
							<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
						</ul>
				</nav>
		<?php } ?>
	<?php else : ?>
		<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
			</footer>
		</article>
	<?php endif; ?>
<?php get_footer(); ?>
