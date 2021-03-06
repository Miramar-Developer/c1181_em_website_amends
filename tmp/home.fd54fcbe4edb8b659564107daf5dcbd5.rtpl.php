<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="banner-container" style="display:block;">
	<div class="banner-container-inner">
		<img src="<?php echo $application_url;?>/templates/assets/img/home-slide-1.jpg">
	</div>
</div>
<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left">
		<div class="body-title">"A journey of a thousand miles begins with a single step" Lao Tzu</div>
		<p>How true this is! Behind that single step is the decision to make a change. When you make the decision to make a change, you can create brilliant results. You really can.</p>
		<p>I work with individuals and businesses who want to be the best they can. Wherever your starting point is, together we create your future; the success you want.</p>
		<p>From 121 life coaching and group workshops to bespoke training programmes and small business consulting I design and deliver to suit you and your needs.</p>
		<p>My goal is to achieve the results you want. What’s yours?</p>
		<p>Make the decision to make a change that will lead to you building a bright, fulfilling and successful future. Take that step and fill out the contact box.</p>
		</div>
		<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/sidebar") . ( substr("common/sidebar",-1,1) != "/" ? "/" : "" ) . basename("common/sidebar") );?>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>