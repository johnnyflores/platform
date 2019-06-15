<section id="profil" class="profil">
    <div class="container margin-top-large">
        <?php query_posts('category_name=profil'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2>
            <strong class="bold-text"><?php the_title();?></strong>
        </h2>
        <?php endwhile; else: ?>
        <p>Don't find the posts</p>
        <?php endif; ?>
        <div class="line main-bg margin-bottom-large"></div>
        <div class="row">
            <?php query_posts( 'post_type=profils&order=asc'); ?>
    				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4">
                <div class="service wow slideInLeft">
                    <div class="row text-center">
                        <div class="icon"><i></i></div>
                        <h4><strong><?php the_title();?></strong></h4>
                        <div class="service-content"><?php the_content();?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; else: ?>
            <p>Don't find the posts</p>
            <?php endif; ?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
