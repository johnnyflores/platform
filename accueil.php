<section id="about-us" class="about-us">
    <div class="overlay">
        <div class="container padding-top-large">
            <?php query_posts('category_name=accueil'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><strong class="bold-text"><?php the_title();?></strong></h2>
            <?php endwhile; else: ?>
            <p>Don't find the posts</p>
            <?php endif; ?>
            <div class="line main-bg"></div>
            <?php query_posts( 'post_type=accueil&order=asc'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row margin-bottom-medium">
                <div class="col-md-12">
                    <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                      <strong class="bold-text"><?php the_title();?></strong>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="margin-bottom-medium wow slideInUp"><?php the_content();?></div>
            <?php endwhile; else: ?>
            <p>Don't find the posts</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="observation" class="observation">
    <div class="row mar-none mat-none">
        <div class="col-md-6 observation-left wow slideInLeft">
            <div class="overlay padding-large text-right">
                <?php query_posts('category_name=study-left'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="description">
                    <h3 class="margin-bottom-small light-text"><?php the_title();?></h3>
                    <?php the_content();?>
                </div>
                <?php endwhile; else: ?>
                  <p>Don't find the posts</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6 observation-right wow slideInRight">
            <div class="overlay padding-large">
                <?php query_posts('category_name=study-right'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="description">
                    <h3 class="margin-bottom-small light-text"><?php the_title();?></h3>
                    <?php the_content();?>
                </div>
                <?php endwhile; else: ?>
                  <p>Don't find the posts</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
