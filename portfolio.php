<section id="technologie" class="technologie">
    <div class="overlay">
        <div class="container padding-large text-center">
            <div class="row">
              <?php query_posts('category_name=icon-top'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-3 col-sm-12">
                    <div class="icon hvr-grow">
                        <i class="fab fa-<?php the_title();?>"></i>
                    </div>
                </div>
              <?php endwhile; else: ?>
                <p>Don't find the posts</p>
              <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container padding-top-large">
        <?php query_posts('category_name=portfolio&order=asc'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2>
            <strong class="bold-text"><?php the_title();?></strong>
        </h2>
        <div class="line main-bg"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-texte jumbo-text light-text margin-top-medium wow slideInLeft animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;">
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <?php endwhile; else: ?>
        <p>Don't find the posts</p>
        <?php endif; ?>
    </div>
    <div class="portfolio padding-large text-center">
        <div class="portfolio-wrapper margin-bottom-medium">
            <?php query_posts( 'post_type=portfolio&order=asc'); $i=1; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="portfolio-item print">
                <div class="portfolio">
                    <a href="#" data-toggle="modal" data-target="#team-member-<?php echo $i ?>">
                        <?php if ( has_post_thumbnail() ){ the_post_thumbnail('thumbs_portfolio');} ?>
                        <div class="portfolio-overlay hvr-rectangle-out">
                            <h2 class="margin-bottom-small">
                                <strong class="white-color bold-text"><?php the_title();?></strong>
                            </h2>
                            <div class="button" >
                                <strong>Lire en plus</strong>
                            </div>
                        </div>
                    </a>
               </div>
            </div>
            <?php $i+=1; endwhile; else: ?>
            <p>Don't find the posts</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="technologie" class="technologie">
    <div class="overlay">
        <div class="container padding-large text-center">
          <div class="row">
            <?php query_posts('category_name=icon-bottom'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-3 col-sm-12">
                  <div class="icon hvr-grow">
                      <i class="fab fa-<?php the_title();?>"></i>
                  </div>
              </div>
            <?php endwhile; else: ?>
              <p>Don't find the posts</p>
            <?php endif; ?>
          </div>
        </div>
    </div>
</section>
