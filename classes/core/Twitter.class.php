<?php
require_once("classes/vendor/TweetPHP.class.php");

$tweets = new TweetPHP(array('consumer_key' => 'KDTpubEmy7BIlRxJMx8YkQ',
		'consumer_secret' => '9LNKjrZ8HvwTGO4HmdLdWKlJen7uD1HLXz31q4cE',
		'access_token' => '550922932-vZXSII0PvG7kKE861j2AyGAj3eUgiAf4NOzgj1rU',
		'access_token_secret' => 'EiWUZTWOmAPoZDcuHlBig5zgYaLqZl65oql2Ep6RyZi4I',
		'twitter_screen_name' => 'ElaineMayhew1',
		'debug' => false,
		'cachetime' => 1,
		'tweets_to_display' => 2,
		'twitter_wrap_open' => '<a href="https://twitter.com/ElaineMayhew1" target="_blank"><h2>Latest Tweets</h2></a><ul id="twitter">',
		'twitter_wrap_close' => '</ul>',
		'tweet_wrap_open' => '<li><div class="status">',
		'meta_wrap_open' => '</div><div class="meta">',
		'meta_wrap_close' => '</div>'));


define("TWEET_LIST",$tweets->get_tweet_list());