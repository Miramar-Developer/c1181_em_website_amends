<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left body-container-inner-left-coaching">
		<div class="body-page-title">Workshops</div>
		<p>I design and deliver bespoke workshops intended to arm you with information, tools and tips to meet your needs.</p>
		<p>Here is a selection of popular themes:</p>
		<ul class="list">
			<li>Time Management</li>
			<li>Stress Management</li>
			<li>Confidence Building</li>
			<li>Goal Setting</li>
			<li>Introduction to NLP</li>
		</ul>
		<p>For more information, please do get in touch on 07788250073 or email <a href="mailto:elaine@elainemayhew.com">elaine@elainemayhew.com</a>
		<div class="body-page-title">What they say</div>
		<div class="testimonial-box">
				<p>Elaine's Workshop for Women sessions have been excellent, they really helped boost my confidence and helped me to get my home life and business more organised which has left me with time to look after myself a bit more! Thank you Elaine! Look forward to the next lot.</p>
				<p><strong>Anne-Marie Jackson, Wokingham<br></strong></p>
			</div>
		<div class="testimonial-box">
			<p>I recommend Elaine to anyone. She is extremely positive and has a friendly welcoming manner that puts participants at their ease. She delivers with enthusiasm.</p>
			<p><strong>Frances Parkes, Assistant Headteacher</strong></p>
		</div>
		<div class="testimonial-box">
			<p>I cannot recommend the three workshops covering Confidence, Time - and Stress Management enough. A lovely supportive environment allowing me to refocus my goals, giving me a more positive outlook and energy. I cannot wait for the refresher sessions for more motivation and practical advice!</p>
			<p><strong>Sylvie Whitfield, Berkshire</strong></p>
		</div>
		<div class="testimonial-box">
			<p>Elaine, thank you for the course. It was life changing.</p>
			<p><strong>Lisa Clark, Reading</strong></p>
		</div>
	</div>
		<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/sidebar") . ( substr("common/sidebar",-1,1) != "/" ? "/" : "" ) . basename("common/sidebar") );?>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>