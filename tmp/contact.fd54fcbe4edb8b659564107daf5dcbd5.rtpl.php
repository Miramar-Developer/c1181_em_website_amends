<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-page-title">Get in touch</div>
		<div class="body-container-inner-contact-left">
		<p><i>To book a coaching session, talk about your needs or simply find out a bit more call 07788250073 or email <a href="mailto:elaine@elainemayhew.com">elaine@elainemayhew.com</a>. I endeavour to return messages and voice-mails within 24 hours.</i></p>
<p><i>Alternatively please complete the form below.</i></p>
	<div id="contact-form">                                
    	<form  id="enquiry_form"> 
        	<fieldset>
            	<label>Name :</label><br>
                <input type="text" name="name" class="textfield" id="name" value=""><br>
                <label>Email :</label><br>
                <input type="text" name="email" class="textfield" id="email" value=""><br>
                <label>Subject :</label><br>
                <input type="text" name="subject" class="textfield field-nomargin" id="subject" value=""><br>
                <label>Message :</label><br>
                <textarea name="message" id="message" class="textarea" cols="2" rows="7"></textarea>
                <button type="submit" name="submit" id="form-submit" class="btn">Send Now</button>
             </fieldset>
          </form>                                
     </div>
     <img src="<?php echo $application_url;?>/templates/assets/img/zig-quote.jpg">
		</div>
		<div class="body-container-inner-contact-right">
			<img src="<?php echo $application_url;?>/templates/assets/img/elaine-contact.jpg">
			<h4>Follow Me On</h4>
			<ul class="contact-social-list">
				<li><a href="http://uk.linkedin.com/pub/elaine-mayhew-robertson/45/b64/b22" target="_blank"><img src="<?php echo $application_url;?>/templates/assets/img/social-linkedin-large.jpg"></a></li>
				<li><a href="http://www.facebook.com/ElaineMayhewCoaching#!/ElaineMayhewCoaching" target="_blank"><img src="<?php echo $application_url;?>/templates/assets/img/social-facebook-large.jpg"></a></li>
				<li><a href="http://twitter.com/ElaineMayhew1" target="_blank"><img src="<?php echo $application_url;?>/templates/assets/img/social-twitter-large.jpg"></a></li>
			</ul>
			<img src="<?php echo $application_url;?>/templates/assets/img/logo-contact.png">
		</div>
		
	</div>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>