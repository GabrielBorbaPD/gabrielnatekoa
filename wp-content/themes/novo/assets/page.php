<?php get_header(); ?>

<div class="content">
	<div class="container">
		<?php if (is_front_page()): include 'index.php';?>
		<?php elseif (have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</div>
<div class="clear"></div>

<?php get_footer(); ?>