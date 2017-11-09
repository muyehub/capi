<?php
if ( ! function_exists('d') ) {
	function d( $par ) {
		echo '<pre>';
		var_dump($par);
		echo '</pre>';
	}
}