<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left body-container-inner-left-coaching">
		<div class="body-page-title">Coaching</div>
		<p><i>Coaching is future orientated taking you from where you are now to where you want to be.</i></p>
		<p>We can get stuck with life, work or family and aren’t sure how to move forward. Coaching is a supportive relationship, which helps you define what you want (your outcome), create a plan and start to take those crucial steps towards ultimately achieving your goal.</p>
		<h3>How can coaching help you?</h3>
		<ul class="list">
			<li>Coaching will help you take a step back and define what you really want.</li>
			<li>Coaching is non-judgmental and completely confidential.</li>
			<li>There is no advice! You are the only person who knows what you want and how to go about achieving it. This is a distraction free, safe environment where you can decide</li>
			<li>Coaching can reshape your whole outlook on life improving relationships at home, work and with friends.</li>

		</ul>
		<p>You may be</p>
		<ul class="list">
			<li>stuck in a rut, thinking "is this it?"</li>
			<li>at a cross roads in your career</li>
			<li>looking for a work/life balance</li>
			<li>stressed</li>
			<li>lacking confidence</li>
			<li>craving some motivation and energy</li>
			<li>negative and looking to be more positive</li>
			<li>looking to be more healthy</li>
			<li>have a specific goal in mind but you simply don't know where or how to start</li>
		</ul>
		</div>
		<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/sidebar") . ( substr("common/sidebar",-1,1) != "/" ? "/" : "" ) . basename("common/sidebar") );?>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>