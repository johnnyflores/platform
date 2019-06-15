<footer id="contact" class="contact">
    <div class="container padding-top-large">
        <?php query_posts('category_name=contact'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2>
            <strong class="bold-text"><?php the_title();?></strong>
        </h2>
        <div class="line main-bg"></div>
        <?php endwhile; else: ?>
        <p>Don't find the posts</p>
        <?php endif; ?>
    </div>
    <div class="container padding-large text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php query_posts( 'category_name=accueil'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <figure class="margin-bottom-medium picture">
                  <?php if ( has_post_thumbnail() ){ the_post_thumbnail('thumbs_small');} ?>
                </figure>
                <div class="margin-bottom-medium"><?php the_excerpt();?></div>
                <!-- <ul class="social margin-bottom-medium">
                    <li class="linkedin hvr-pulse">
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul> -->
                <?php endwhile; else: ?>
                 <p>Don't find the posts</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php query_posts( 'post_type=realisations&orderby=date&order=asc'); ?>
<?php if (have_posts()) : $i = 1; while (have_posts()) : the_post(); ?>
<div class="portfolio-modal modal fade" id="team-member-<?php echo $i ?>" tabindex="-<?php echo $i ?>" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2><?php the_title();?></h2>
                        <?php if ( has_post_thumbnail() ){ the_post_thumbnail('thumbs_large');} ?>
                        <p class="item-intro text-muted"><?php the_content();?></p>
                        <?php the_category();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $i+=1; endwhile; else: ?>
<p>Don't find the posts</p>
<?php endif; ?>

<div class="back-to-top" data-rel="header">
    <i class="fas fa-chevron-up"></i>
</div>

<!-- =========================
 JavaScripts
============================== -->
<script src="<?php bloginfo('template_url')?>/js/vendor/jquery-1.11.1.js"></script>
<script src="<?php bloginfo('template_url')?>/js/vendor/bootstrap.js"></script>
<script src="<?php bloginfo('template_url')?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/main.js"></script>
</body>
</html>
