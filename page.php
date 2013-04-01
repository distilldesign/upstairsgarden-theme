<?php get_header(); ?>
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
					</div>
				</div>
				<div class="row-fluid">
			    <div class="span12">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<?php include("post-404.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
