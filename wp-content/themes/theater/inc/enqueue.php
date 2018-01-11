<?php

function theater_scripts() {
	$ver = '0.12';

	wp_enqueue_style( 'theater-style', get_template_directory_uri(). '/style.css', array(), $ver, false );

	wp_enqueue_style( 'slick', get_template_directory_uri(). '/css/slick.css', array(), $ver, false );

	wp_enqueue_style( 'slick-theme', get_template_directory_uri(). '/css/slick-theme.css', array(), $ver, false );

	wp_enqueue_style( 'main', get_template_directory_uri(). '/css/main.css', array(), $ver, false );

	wp_enqueue_style( 'mine', get_template_directory_uri(). '/css/mine.css', array(), $ver, false );

	wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/css/magnific-popup.css', array(), $ver, false );

	wp_enqueue_script( 'theater-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $ver, true );

	wp_enqueue_script( 'theater-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), $ver, true );

	wp_enqueue_script( 'theater-skip-link-focus-fix', get_template_directory_uri() . '/js/mine.js', array(), $ver, true );

	wp_enqueue_script( 'theater-skip-link-focus-fix', get_template_directory_uri() . '/js/scripts.js', array(), $ver, true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), $ver, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'theater_scripts' );