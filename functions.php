<?php
  add_theme_support( 'post-thumbnails' );
  add_image_size('thumbs_small', 360, 260, true);
  add_image_size('thumbs_large', 600, 450, true);
  add_image_size('thumbs_portfolio', 324, 324, true);

  function codex_custom_init() {
    register_post_type(
      'accueil', array(
        'labels' => array('name' => __( 'Accueil' ), 'singular_name' => __( 'Accueil' ) ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail')
      )
    );

    register_post_type(
      'profils', array(
        'labels' => array('name' => __( 'Profil' ), 'singular_name' => __( 'Profil' ) ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail')
      )
    );

    register_post_type(
      'portfolio', array(
        'labels' => array('name' => __( 'Portfolio' ), 'singular_name' => __( 'Portfolio' ) ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail')
      )
    );

    register_post_type(
      'realisations', array(
        'labels' => array('name' => __( 'Réalisations' ), 'singular_name' => __( 'Réalisation' ) ),
        'public' => true,
        'has_archive' => false,
        'taxonomies' => array('category'),
        'supports' => array('title', 'editor', 'thumbnail')
      )
    );
  }

  add_action( 'init', 'codex_custom_init' );
?>
