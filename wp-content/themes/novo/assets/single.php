<?php get_header(); ?>

<div class="content">
	<div class="container">
		<div class="breadcrumb"><?php wp_custom_breadcrumbs(); ?></div>
		<div class="clear"></div>
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_post_thumbnail( 'full') ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>