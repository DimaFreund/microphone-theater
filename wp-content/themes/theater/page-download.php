<?php



if(isset($_GET['order'])){
	global $wpdb;
	$order_id = esc_sql($_GET['order']);
	$result = $wpdb->get_row("SELECT * FROM `wp_orders` WHERE order_id = '$order_id'");
	if(isset($result)) {
		$date_create = $result->date_create;
		$post_id     = $result->product;
		$link_live   = checkFreshOrder( $date_create );
		if ( $link_live ) {
			$path = get_field( 'specacle_file', $post_id );

			$download_file   = basename( $path );
			$first_part_path = $_SERVER['DOCUMENT_ROOT'];

			$two_part_path = substr( $path, stripos( $path, '/wp-content' ) );
			$local_file    = $first_part_path . $two_part_path;


// set the download rate limit (=> 20,5 kb/s)
			$download_rate = get_field('speed', 160)*1000;
			if ( file_exists( $local_file ) && is_file( $local_file ) ) {
				header( 'Cache-control: private' );
				header( 'Content-Type: application/octet-stream' );
				header( 'Content-Length: ' . filesize( $local_file ) );
				header( 'Content-Disposition: filename=' . $download_file );

				flush();
				$file = fopen( $local_file, "r" );
				while ( ! feof( $file ) ) {
					// send the current file part to the browser
					print fread( $file, round( $download_rate * 1024 ) );
					// flush the content to the browser
					flush();
					// sleep one second
					sleep( 1 );
				}
				fclose( $file );
			} else {
				die( 'not found' );
			}

		}
	}
	else {
		wp_redirect(get_home_url());
	}


} else {
	wp_redirect(get_home_url());
}

function checkFreshOrder($date_create){

	$constant_fresh = get_field('time_live', 160)*3600;
	$time_spend = TimeSpend($date_create);

	if($constant_fresh >= $time_spend){
		return true;
	} else {
		return false;
	}
}

function TimeSpend($date_create){

	$date_create = getTimeInSecond($date_create);
	$date_now = time();
	$time_spend = $date_now - $date_create;

	return $time_spend;
}

function getTimeInSecond($time){
	$t1 = explode(" ", $time);
	$d1 = explode("-", $t1['0']);
	$ti1 = explode(":", $t1['1']);

	return mktime($ti1[0],$ti1[1],$ti1[2],$d1[1],$d1[2],$d1[0]);
}