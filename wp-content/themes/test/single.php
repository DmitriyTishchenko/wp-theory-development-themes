<?php get_header();?>

<div class="container">
    <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="col-md-12">
                <div class="card">
                    <img src="..." class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php the_title(); ?></h1>
                        <p class="card-text"><?php the_content(""); ?></p>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</div>

<?php get_footer();?>
