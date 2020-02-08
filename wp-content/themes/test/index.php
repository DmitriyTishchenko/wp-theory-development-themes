<?php get_header();?>

<h1>Hello, world!</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Post -->
	<h4><?php the_title() ?></h4>
<?php endwhile; ?>
    <!-- Post navigation -->
<?php else: ?>
	<!-- No post found -->
	<p>Записей нет.</p>
<?php endif; ?>

<?php get_footer();?>
