<?php
require_once("classes/vendor/flight/Flight.php");

/* Include all Controller classes */
foreach (glob("classes/core/Controllers/*.php") as $filename)
{
    include $filename;
}


Flight::route('GET /',array('StaticController','home'));
Flight::route('GET /about',array('StaticController','about'));
Flight::route('GET /services/coaching',array('StaticController','coaching'));
Flight::route('GET /services/workshops',array('StaticController','workshops'));
Flight::route('GET /services/business-services',array('StaticController','businessservices'));
Flight::route('GET /FAQs',array('StaticController','faqs'));
Flight::route('GET /testimonials',array('StaticController','testimonials'));
Flight::route('GET /contact',array('StaticController','contact'));
Flight::route('POST /contact',array('StaticController','contactPost'));


/* HTML addreses for old system compatibilty */

Flight::route('GET /index.html',array('StaticController','home'));
Flight::route('GET /aboutelaine.html',array('StaticController','about'));
Flight::route('GET /coaching.html',array('StaticController','coaching'));
Flight::route('GET /faq.html',array('StaticController','faqs'));
Flight::route('GET /testimonials.html',array('StaticController','testimonials'));
Flight::route('GET /contact.html',array('StaticController','contact'));