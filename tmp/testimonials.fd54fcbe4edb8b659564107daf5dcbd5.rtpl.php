<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left body-container-inner-left-coaching">
		<div class="body-page-title">What they say</div>
		<p>
				<div class="testimonial-box">
				<p>Elaine has been a fantastic life coach. If I had known the positive effects our coaching sessions have on my everyday life (both personal life and work life) then I would have contacted her years ago. She has helped me see the glass as half full rather than half empty and so I have gained a clearer insight into what I want from life and how I can achieve my goals.  Elaine has given me the ability to think outside the box, to take inspiration from positive moments and positive people and to have the clarity to make some real life changes which I didn’t even know would be so beneficial before I started my coaching sessions. I would highly recommend Elaine. She is dedicated, polite and extremely caring.</p>
				<p><strong>Mrs P, Business Owner, North East<br>January 2014</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>Elaine, thank you for the course. It was life changing.</p>
				<p><strong>Lisa Clark, Reading<br>September 2013</strong></p>
			</div>
			
			
			<div class="testimonial-box">
				<p>I cannot recommend the three workshops covering Confidence, Time - and Stress Management enough. A lovely supportive environment allowing me to refocus my goals, giving me a more positive outlook and energy. I cannot wait for the refresher sessions for more motivation and practical advice!</p>
				<p><strong>Sylvie Whitfield, Berkshire<br>July 2013</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>I recommend Elaine to anyone. She is extremely positive but has a friendly welcoming manner that puts participants at their ease. She delivers with enthusiasm.</p>
				<p><strong>Frances Parkes, Assistant Headteacher<br>June 2013</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>The coaching sessions have been thought provoking and enjoyable, I have gained confidence and your questioning has and does allow me to look at things from a different perspective. You have been both encouraging and motivating, which has really helped me to focus on what I want to do and what I don’t want to do. Thank you so very much.</p>
				<p><strong>Tania Schwarz, London<br>April 2013</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>Following the coaching sessions I had with Elaine my confidence has increased dramatically and I am so much more assertive. I used to feel really negative about my job but thanks to Elaine I am now really enjoying my job. My manager has also noticed a big difference in my confidence and self-esteem. I already had the answers and Elaine was there to help me find them. Definitely a positive experience and would recommend.</p>
				<p><strong>Lucy Higgins, Wokingham<br>January 2013</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>My sessions with Elaine have been invaluable. She has been so positive yet realistic. I have come a long way since our sessions started and now value the importance of my role as a “stay at home” Mum. Most importantly my time with Elaine has taught me how to make me time again and not feel guilty about it. This has made a remarkable change to my life. Thanks a million.</p>
				<p><strong>Rhonda Felton, Dorset<br>January 2013</strong></p>
			</div>
			
			<div class="testimonial-box">
				<p>Having never participated in any life coaching before the experience of 8 sessions with Elaine was totally life changing. Prior to the coaching I always had lists of goals and ‘to do’ lists in both my personal and professional life. These were never finished in a timely manner. Incomplete goals or tasks did not help my self-esteem or confidence and certainly did not help in achieving these goals. Elaine helped me look at my goals, break them down and make them achievable. With Elaine’s help I was able to visualise my goal and how I would feel when the goal was reached. My confidence and self-belief has improved no end both professionally and personally.</p>
				<p><strong>Tarnya Lansley, Reading<Br>December 2012</strong></p>
			</div>
			
			
			<div class="testimonial-box">
				<p>Following my coaching sessions with Elaine I have increased my confidence, feel more in control of my life and my husband has commented that I am more proactive about addressing challenges.  I also feel that I am now more able to challenge my own obstructive beliefs and schemas, using techniques from Elaine’s sessions.  Specifically I have achieved various specific goals, including improving my fitness, being more patient with my child, improving relationships and breaking from routine.  It has been a wholly positive experience which I would be happy to recommend.</p>
				<p><strong>AR, Bournemouth<br>October 2012</strong></p>
			</div>
			

			


			

			

			
		
			





			
			
		</p>
	</div>
		<div class="body-container-inner-right">
			<img src="<?php echo $application_url;?>/templates/assets/img/napoleon-quote.jpg">
		</div>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>