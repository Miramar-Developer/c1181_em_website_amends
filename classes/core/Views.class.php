<?php

require_once("classes/vendor/rain.tpl.class.php");
raintpl::$tpl_dir = "templates/";
raintpl::$cache_dir = "tmp/";
raintpl::configure( 'base_url', APPLICATION_URL);
raintpl::configure( 'path_replace', false );

function add_underscores($string) {
   	return str_replace(" ", "_", $string);
} 

function remove_underscores($string) {
	return str_replace("_"," ", $string);
}

function remove_linebreaks($string) {
	return preg_replace(array('/\r/', '/\n/'), '', $string);
}
    
/* RainTPL Setup and generic template variables */
$tpl = new raintpl();
$tpl->assign("application_url", APPLICATION_URL);
$tpl->assign("tweet_list", TWEET_LIST);
$tpl->assign("year", date("Y"));