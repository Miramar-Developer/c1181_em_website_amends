<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left body-container-inner-left-coaching">
		<div class="body-page-title">Business Services</div>
		<p>As a growing small business you will know it can be challenging keeping on top of the work, whilst at the same time expanding. Attracting and selecting good staff can be an expensive and time consuming process. I work with you to provide a professional process and crucially an impartial view on the candidates’ competencies. This framework includes specific core competency questions, role play and a summary of feedback.</p>
		<p>For more information, please do get in touch on 07788250073 or email <a href="mailto:elaine@elainemayhew.com">elaine@elainemayhew.com</a>
		<div class="body-page-title">What they say</div>
		<div class="testimonial-box">
			<p>As a company looking to expand, Elaine was recommended to us as the ideal person to sit on our interview panel to give us independent feedback on each of the potential candidates. It was important for us to hear the opinions of a neutral person not connected with our company or indeed industry as sometimes we can be very blinkered. Elaine sat in on all interviews and was free to ask any questions she felt beneficial during each interview and then on completion of the process Elaine provided us with a feedback on each of the candidates. We were delighted with the services of Elaine and thanks to her outstanding attention to detail and ability to communicate with each potential employee, we were able to achieve our goal and successfully find who we were looking for. In fact, Elaine was so good with her assistance that we were able to employ 4 candidates instead of the 2 we were initially looking to recruit. I would recommend Elaine without any hesitation and we are looking forward to working with Elaine again in the near future to assist us with in house employee training and reviews.</p>
			<p><img src="<?php echo $application_url;?>/templates/assets/img/simply-the-best-events.jpg">&nbsp;&nbsp;<strong>Trevor Collins, MD, Simply the Best Events Ltd</strong>
				
			</p>
		</div>
	</div>
		<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/sidebar") . ( substr("common/sidebar",-1,1) != "/" ? "/" : "" ) . basename("common/sidebar") );?>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>