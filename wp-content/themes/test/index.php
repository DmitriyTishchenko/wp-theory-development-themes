<?php get_header();?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="col-md-12">
                <div class="card">
                    <img src="..." class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <a href="<?php the_permalink();?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink();?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
            <!-- Post navigation -->
        <?php else: ?>
            <!-- No post found -->
            <p>Записей нет.</p>
        <?php endif; ?>
    </div>
</div>



<?php get_footer();?>
