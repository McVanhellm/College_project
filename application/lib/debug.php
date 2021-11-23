<?php 

	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', '1');

	function echo_Log($param)
	{
		echo '<pre>';
		var_dump($param);
		echo '</pre>';
	}

?>