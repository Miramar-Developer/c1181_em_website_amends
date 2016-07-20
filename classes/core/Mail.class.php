<?php
require_once("classes/vendor/PHPMailer/PHPMailerAutoload.php");

$Mail = new PHPMailer;		
$Mail->From = 'gareth@miramar-group.co.uk';
$Mail->FromName = "Gareth Parker";
$Mail->addAddress("gareth@miramar-group.co.uk");
$Mail->isHTML(true);

