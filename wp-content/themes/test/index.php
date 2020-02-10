<?php get_header();?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="col-md-12">
                <div class="card">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('my-thumb');?>
                    <?php else: ?>
                        <img src="https://picsum.photos/seed/picsum/150/150" width="100" height="50" alt="">
                    <?php endif;?>
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
