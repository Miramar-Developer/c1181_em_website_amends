<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-page-title">About Elaine</div>
		<div class="body-about-left">
			<img src="<?php echo $application_url;?>/templates/assets/img/elaine-about.jpg">
		</div>
		<div class="body-about-right">
		<i>I am a professional coach passionate about helping you to live the most fulfilling life you can. Energetic, positive and straight talking, I help you move from "I can't" to "I can" and "I am". Coaching changed my world, it can change yours too.</i>
		<h4>What's my story?</h4>
		<p>My potted history…..well I have a degree in English and Drama and a diverse career background spanning 10 years working in sales and marketing. I’ve managed Tesco and Sainsbury’s and totally get the rat race concept. Ironically I also worked for a company called the Rat Race. Google it! I have worked hard, played hard, lived the London commute, had two children, worked full time, part time and had a stint at home as a ‘homemaker’ (who thought up that name?!)</p>
		<p>It is my positive attitude combined with the fact it was the people part of every role I had that truly makes me tick, which spurred me on to train for the thing I love most ; the product ‘people’. Hence I trained to become a life coach, NLP Practitioner and DISC Practitioner.</p>
		<p>I am passionate and committed to help you make the change you need to deliver the results you want.</p>
		<p>So whether you are taking a big step in your life or simply feel like you aren’t fulfilling your potential, I will help you to get focused, get motivated and get going.</p>
		<p>I live in the South East with my lovely husband and two mischievous daughters. I’m a keen runner and love period dramas and snow-boarding. I prefer Mr Whippy to Haagen Dazs and find my patience wanes with people misusing disabled or parents’ car parking spaces. One day I will make the jump from half to full marathon, learn to dance and do a PhD.</p>
		<hr>

		</div>
	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>