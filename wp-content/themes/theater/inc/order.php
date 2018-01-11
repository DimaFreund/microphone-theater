<?php

function get_path_download() {
	return 'test';
}

function create_new_order() {

	global $wpdb;

	$wpdb->insert(
		'wp_orders',
		array( 'id' => $_POST['id'],
		       'product' => $_POST['description'],
				'order_id' => $_POST['order'],
				'email' => $_POST['email'],
				'name' => $_POST['ext1'],
				'date_create' => $_POST['date'],
				'ip_address' => $_POST['ip'],
				'payment_data' => $_POST['card'],
				'price' => $_POST['amount']

		)
	);

	return header("HTTP/1.1 200 OK");
}