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
