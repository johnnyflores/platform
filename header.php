<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Developpeur UX/UI Front End</title>

    <meta name="description" content="Johnny Flores - Developpeur UX/UI Front End">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, framework JS, Angular 4, Ionic 3, Responsive Web Design">
    <meta name="author" content="Johnny Flores">

    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/animate.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_url')?>/fonts/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">

    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

    <link href="<?php bloginfo('template_url')?>/css/responsive.css" rel="stylesheet">

    <script src="<?php bloginfo('template_url')?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/queryloader2.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#01274c",
                backgroundColor: "#111",
                percentage: false,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>

</head>

<body>
    <div class="mobilenav">
        <ul>
          <li data-rel="#header">
            <span class="nav-label">Accueil</span>
          </li>
          <li data-rel="#about-us">
            <span class="nav-label">À propos</span>
          </li>
          <li data-rel="#profil">
            <span class="nav-label">Profil</span>
          </li>
          <li data-rel="#portfolio">
            <span class="nav-label">Portfolio</span>
          </li>
          <li data-rel="#contact">
            <span class="nav-label">Contact</span>
          </li>
        </ul>
    </div>

    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>

    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="logo-container">
                    <a href="#">
                        <img src="<?php bloginfo('template_url')?>/img/logo.png" height="37" width="197" alt="Développeur Front End">
                    </a>
                </div>
                <div class="item active">
                    <div class="fill" style="background-image:url('<?php bloginfo('template_url')?>/img/slider/slider.jpg');"></div>
                    <div class="carousel-caption">
                        <?php query_posts('category_name=main'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1 class="light mab-none"><strong class="bold-text"><?php the_title();?></strong></h1>
                        <!-- <span class="light margin-bottom-medium mat-none"><strong class="bold-text"><?php the_content();?></strong></span> -->
                        <p class="light margin-bottom-medium"><?php the_content();?></p>
                        <?php endwhile; else: ?>
                          <p>Don't find the posts</p>
                        <?php endif; ?>
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">Projets</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">À propos</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>

    <section id="call-to-portfolio" class="call-to-portfolio main-bg">
        <div class="container">
            <div class="row">
                <?php query_posts('category_name=details'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
                    <div class="light-text"><?php the_content();?></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated">
                    <a href="#portfolio" class="button light internal-link pull-left hvr-grow" data-rel="#portfolio"><?php the_title();?></a>
                </div>
                <div class="clearfix"></div>
                <?php endwhile; else: ?>
                  <p>Don't find the posts</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
