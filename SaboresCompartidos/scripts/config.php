<?php

if (!function_exists('str_ends_with')) {
	function str_ends_with($str, $end) {
	return (@substr_compare($str, $end, -strlen($end))==0);
	}
}

//if(!defined('ROOT'))
define('ROOT',
	$_SERVER['DOCUMENT_ROOT'] .
	(str_ends_with($_SERVER['DOCUMENT_ROOT'], "/") ? "" : "/") . 
	'polistudios.github.io/SaboresCompartidos/'
);

define('MySQL_USER',
	"root"
);

define('MySQL_PASSWORD',
	""
);

session_start();

?>