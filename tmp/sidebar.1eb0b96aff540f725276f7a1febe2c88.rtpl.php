<?php if(!class_exists('raintpl')){exit;}?>			<?php if( $sidebar_small == true ){ ?>

			<div class="body-container-inner-right-small">
			<?php }else{ ?>

		    <div class="body-container-inner-right">
			<?php } ?>

			<div class="contact-form-side-container">
				<div class="contact-form-side">
					<h4>Get in touch</h4>
					<form id="enquiry_form"> 
                                <fieldset>
                                <input type="text" name="name" class="textfield" id="name" placeholder="Name"><br>
                                <input type="text" name="email" class="textfield" id="email" placeholder="Email"><br>
                                <input type="text" name="subject" class="textfield field-nomargin" id="subject" placeholder="Subject"><br>
                                <textarea name="message" id="message" class="textarea" cols="2" rows="7" placeholder="Message"></textarea>
                                <button type="submit" name="submit" id="form-submit" class="btn">Send Now</button><br>
                                </fieldset>
                                </form>
				</div>
			</div>
		</div>
