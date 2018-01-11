<?php

function create_posttype() {

	register_post_type( 'spectacl',
		// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Спектакли' ),
				'singular_name' => __( 'Спектакль' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'spectacl'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );