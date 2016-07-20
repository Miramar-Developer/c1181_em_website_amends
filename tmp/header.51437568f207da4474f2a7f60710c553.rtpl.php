<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Professional development coach helping you to achieve your goals and lead a fulfilling life."/>
<meta name="keywords" content="life coaching, life coach, personal development coaching, personal development coach, life coaches wokingham, berkshire, confidence coaching, maternity coaching, happiness coaching, women's coach, goal setting, change coaching, coaches, coach, corporate coaching, career coaches, career coaching, dilema, procrastinating, procrastination, moving forward, professional coach, looking for happiness, crossroads, looking for fulfillment."/>


<title>Elaine Mayhew - Personal Development Coach</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/noscript.css" rel="stylesheet" type="text/css" media="screen,all" id="noscript" />

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!--<script src="jquery.ztwitterfeed.min.js" type="text/javascript"></script>-->
<script type="text/javascript">
    $('#slideshow').corner("8px");
</script>

<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function(){     
         $('#slideshow ul').cycle({
            timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   '#pager',  // selector for element to use as pager container
            pause:   0,	  // true to enable "pause on hover"
            pauseOnPagerHover: 0 // true to pause when hovering over pager link
        });
     });
</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('ul.navigation',{hover:true});
</script> 
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('#mainmenu') ('ul.tabs li a') 			
			 ('.slogan-heading', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('.slide-type1 h1', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('.slide-type1 h3', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('.slide-type2 h1', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('.slide-type2 h3', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('.slide-type4 h1', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})
			 ('h1.slide-big', {hover:true, textShadow:'0px 1px 0px #f4f4f4'})			 
			 ('.button', {hover:true,	textShadow:'0px 1px 0px #f0d698'})
			 ('.button-big', {hover:true,	textShadow:'0px 1px 0px #f0d698'})
			 ('.button-grey', {hover:true,	textShadow:'0px 1px 0px #ffffff'})
			;
</script>
<script src="js/jquery.bxSlider.min.js" type="text/javascript"></script>
<script src="js/jquery.twitter.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function(){ 
   		//BXSlider Slide Jquery    
        $('#slideshow').bxSlider({
			speed: 700,
			pause: 4000,			       
			auto: true,
			infiniteLoop: false 
		});
		
		//Twitter Jquery	
		$("#twitter").getTwitter({
			tweetName: "ElaineMayhew1",
			numTweets: 4,
			loaderText: "Loading tweets...",
			slideIn: true,
			slideDuration: 750
		});	
		
		//Tab Jquery
		$(".tab_content").hide(); 
		$("ul.tabs li:first").addClass("active").show(); 
		$(".tab_content:first").show(); 
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");
			$(this).addClass("active"); 
			$(".tab_content").hide(); 
			var activeTab = $(this).find("a").attr("href"); 
			$(activeTab).fadeIn(); 
			return false;
		});
     });
</script>
<script type="text/javascript">
$(document).ready(function () {
	$('#ElaineMayhew1').twitterfeed('ElaineMayhew1',{
		limit: 2
	});
});
</script> 
</head>

<body>	
	<div id="container">    	
    	<div id="top-container">
        
        	<!-- BEGIN OF HEADER -->
        	<div id="header">
            
            	<div id="left-header">
                	<!-- begin of logo and mainmenu -->
                	<div id="logo"><a href="index.html"><img src="images/logonew.jpg" alt="" /></a></div>
                    <div id="slogan"><img src="images/heading.jpg" alt="" /></div>
                    <!-- end of logo and mainmenu -->
                </div>
                
                <div id="right-header">
                	<div id="addy"><a href="contact.html"><img src="images/address.jpg" alt="" /></a></div>
               			
                      <div class="socialmedia" style="float:right">
                
                 			<a href = "http://www.facebook.com/ElaineMayhewCoaching#!/ElaineMayhewCoaching" target="_blank"><img src="images/FB.png" alt=""/></a>
                			<a href ="http://twitter.com/ElaineMayhew1" target="_blank"><img src="images/twitter.png" alt=""/></a>
                        	<a href= "http://uk.linkedin.com/pub/elaine-mayhew-robertson/45/b64/b22" target="_blank"><img src="images/Linkedin.png" alt="" /></a>
               
                		</div>	
                 </div>
                 
                    <!-- end of searchbox -->
                    
                    <!-- begin of mainmenu -->
                    <div id="mainmenu">
                    	<ul id="menu">
                            <li class=""><a href="index.html">Home</a></li>
                            <li><a href="aboutelaine.html">About Elaine</a></li>                    
                            <li><a href="coaching.html">What I offer</a></li>    
                            <li><a href="faq.html">FAQs</a></li>
                             <li><a href="testimonials.html">Testimonials</a></li>  
                              <li><a href="contact.html">Contact</a></li>              
                
                            <!-- end of mainmenu -->
                    	</ul>
                    </div>
        	</div>
                
            </div>
            <!-- END OF HEADER -->