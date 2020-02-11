<?php get_header();?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="<?php the_permalink();?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                    </div>

                    <div class="card-body">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail', array('class'=> 'float-left mr-3'));?>
                        <?php else: ?>
                            <img src="https://picsum.photos/seed/picsum/150/150" width="150" height="150" alt="" class="float-left mr-3">
                        <?php endif;?>
                        <p class="card-text"><?php the_excerpt(); ?></p>

                    </div>
                    <div class="card-footer">
                        <a href="<?php the_permalink();?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
            <!-- Post navigation -->
            <?php the_posts_pagination(array(
                'show_all' => false,     // показаны все страницы участвующие в пагинации
                'end_size'     => 1,     // количество страниц на концах
                'mid_size'     => 1,     // количество страниц вокруг текущей
                'type'         => 'list',

            ));?>
        <?php else: ?>
            <!-- No post found -->
            <p>Записей нет.</p>
        <?php endif; ?>
    </div>
</div>



<?php get_footer();?>
