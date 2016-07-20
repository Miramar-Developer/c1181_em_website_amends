<?php

class StaticController {

	public function home() {
		global $tpl;
		$tpl->assign("sidebar_small",true);
		$tpl->draw("home");
	}
	
	public function about() {
		global $tpl;
		$tpl->draw("about");
	}	
	
	public function coaching() {
		global $tpl;
		$tpl->draw("coaching");
	}
	
	public function workshops() {
		global $tpl;
		$tpl->draw("workshops");
	}
	
	public function businessservices() {
		global $tpl;
		$tpl->draw("business-services");
	}
	
	public function faqs() {
		global $tpl;
		$tpl->draw("faqs");
	}
	
	public function testimonials() {
		global $tpl;
		$tpl->draw("testimonials");
	}
	
	public function contact() {
		global $tpl;
		$tpl->draw("contact");
	}
	
	public function contactPost() {
		global $Mail;
		$Mail->Subject = "Enquiry from Elaine Mayhew website";
		$Mail->Body    = str_replace("{message}",$_POST["message"],str_replace("{subject}",$_POST["subject"],str_replace("{email}",$_POST["email"],str_replace("{name}",$_POST["name"],file_get_contents("templates/email.html")))));
		if(!$Mail->send()) {
			echo '500';
		exit;
		} else {
			echo "200";
		}

	}
}