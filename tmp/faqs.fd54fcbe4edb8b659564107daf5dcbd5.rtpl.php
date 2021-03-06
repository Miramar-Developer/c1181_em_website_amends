<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/header") . ( substr("common/header",-1,1) != "/" ? "/" : "" ) . basename("common/header") );?>

<div class="body-container">
	<div class="body-container-inner">
		<div class="body-container-inner-left body-container-inner-left-coaching">
		<div class="body-page-title">Frequently Asked Questions</div>
		<p>
			 <!-- begin of FAQ 1 -->
                        <div class="faq-question">
                          <p>&nbsp;Is coaching the same as counselling?</p></div>
                        <div class="faq-answer">
                        <p> No. Counselling tends to look at the past in order to examine and resolve issues affecting the present. Whilst coaching can look to the past, it is future orientated. Coaching focuses on setting goals and forming a plan of action towards achieving them.</p>
</div>
                        <!-- end of FAQ 1 -->
                            
                        <!-- begin of FAQ 2 -->                            
                        <div class="faq-question">What sort of things can coaching help with?</div>
                        <div class="faq-answer">
                        <p>Absolutely anything that is relevant to you and your life. You are in control of the topics you bring to coaching. I am in control of guiding you towards achieving your goal by ensuring manageable steps. Some examples of topics clients have brought to me are: improving confidence, getting fit, weight loss, changing jobs, becoming more assertive, time management and starting a business.</p>
                       
                        
                        </div>
                        <!-- end of FAQ 2 -->
                            
                        <!-- begin of FAQ 3 -->                            
                        <div class="faq-question">Does it work?</div>
                        <div class="faq-answer">
                        
                        <p>Yes! Read my testimonials or better still, give me a call.</p>
                        </div>
                        <!-- end of FAQ 3 -->
                            
                        <!-- begin of FAQ 4 -->                           
                        <div class="faq-question">How long will a session last?</div>
                        <div class="faq-answer">
                        <p>Sessions last 45 minutes and can be face to face, over the phone or through SKYPE. Most clients use SKYPE as it is simple and FREE. Clients often report they are more focused and feel less pressure conducting sessions over the phone or through SKYPE.</p>
                        </div>
                        <!-- end of FAQ 4 --> 
                            
                        <!-- begin of FAQ 5 -->                      
                        <div class="faq-question">How frequently will sessions take place?</div>
                        <div class="faq-answer">
                                
                         <p>Typically every two weeks although this can be more or less regularly depending upon your requirements.</p>                            
                            </div>
                            
                                                <!-- end of FAQ 5 -->
                            
                        <!-- begin of FAQ 6 -->                            
                        <div class="faq-question">How many sessions will I need?</div>
                        <div class="faq-answer">
                        
                        <p> I intend to help you create a step change that will last far beyond the formal coaching sessions. Depending on the goals you would like to work on, I will devise a package to suit your needs. Typically 6-10 sessions are required. </p>
                        </div>
                        <!-- end of FAQ 6 -->
                            
                        <!-- begin of FAQ 7 -->                           
                        <div class="faq-question">How do I get started?</div>
                        <div class="faq-answer">
                        <p>E-mail or phone me now! You will receive a client information sheet as well as a coaching agreement. Completing your information sheet will help me understand where you are and what you are looking to achieve. It also means we can get straight into coaching.</p>
                        </div>
                        <!-- end of FAQ 7 -->
                            
                        <!-- begin of FAQ 8 -->                       
                        <div class="faq-question">How much does it cost?</div>
                        <div class="faq-answer">
                        <p>Again this entirely depends on what you hope to achieve, prices start from £45. A bespoke package can be made to suit your requirements so call me for your complimentary 15 minute consultation. </p>
                            
                        </div>
                        <!-- end of FAQ 8 -->    
                            
                        <!-- begin of FAQ 9 -->     
                        <div class="faq-question">How do I pay?</div>
                        <div class="faq-answer">
                        <p>Payment can be made by BACs transfer.</p>
                        </div>
                        <!-- begin of FAQ 9 -->     
                            
                        <!-- begin of FAQ 10 -->    
                        <div class="faq-question">Do you have insurance?</div>
                        <div class="faq-answer">
                        <p>Yes. I take my role as a professional coach very seriously and offer a safe environment for both the client and myself.</p>
                        </div>
                        <!-- begin of FAQ 10 -->	
                          <!-- begin of FAQ 11 -->    
                        <div class="faq-question">Do you have a coach?</div>
                        <div class="faq-answer">
                        <p>Absolutely. </p>
                        </div>
                        <!-- begin of FAQ 11 -->				
			
		</p>
	</div>
		<div class="body-container-inner-right">
			<img src="<?php echo $application_url;?>/templates/assets/img/yoda-quote.jpg">
		</div>

	</div>
</div>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("common/footer") . ( substr("common/footer",-1,1) != "/" ? "/" : "" ) . basename("common/footer") );?>