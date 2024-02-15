

		<!-- _________________________ Start Middle _________________________ -->
		<section id="middle">

			<?php if ($slider): ?>
				<!-- __________________________________________________ Start Top -->		
				<section id="top">
					<div class="wrap_rev_slider">
						
						<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:600px;">
							<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:600px;height:600;">
								<ul>
									<?php foreach ($slider as $key => $slide): ?>
										<!-- SLIDE  -->
										<li class="main-slider-wrap" data-transition="random" data-slotamount="7" data-masterspeed="300" >
											<!-- MAIN IMAGE -->		
											<div class="main-slider-content">
												<h2><?=$slide['heading']?></h2>
												<p><?=$slide['slider_detail']?></p>
											</div>		
											<img src="<?=UPLOADS.$slide['img']?>"  alt="image-<?=$key?>"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
											<!-- LAYERS -->				
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
						<script type="text/javascript">
							var tpj=jQuery;				
							tpj.noConflict();				
							var revapi1;
							
							tpj(document).ready(function() {
											
							if(tpj('#rev_slider_1_1').revolution == undefined)
								revslider_showDoubleJqueryError('#rev_slider_1_1');
							else
							   revapi1 = tpj('#rev_slider_1_1').show().revolution(
								{
									dottedOverlay:"none",
									delay:9000,
									startwidth:1160,
									startheight:600,
									hideThumbs:200,
									
									thumbWidth:100,
									thumbHeight:50,
									thumbAmount:3,
									
									navigationType:"bullet",
									navigationArrows:"solo",
									navigationStyle:"round",
									
									touchenabled:"on",
									onHoverStop:"on",
									
									navigationHAlign:"center",
									navigationVAlign:"bottom",
									navigationHOffset:0,
									navigationVOffset:20,

									soloArrowLeftHalign:"left",
									soloArrowLeftValign:"center",
									soloArrowLeftHOffset:20,
									soloArrowLeftVOffset:0,

									soloArrowRightHalign:"right",
									soloArrowRightValign:"center",
									soloArrowRightHOffset:20,
									soloArrowRightVOffset:0,
											
									shadow:2,
									fullWidth:"on",
									fullScreen:"off",

									stopLoop:"off",
									stopAfterLoops:-1,
									stopAtSlide:-1,

									
									shuffle:"off",
									
									autoHeight:"off",						
									forceFullWidth:"off",						
															
															
									hideThumbsOnMobile:"off",
									hideBulletsOnMobile:"off",
									hideArrowsOnMobile:"off",
									hideThumbsUnderResolution:0,
									
									hideSliderAtLimit:0,
									hideCaptionAtLimit:0,
									hideAllCaptionAtLilmit:0,
									startWithSlide:0,
									videoJsPath:"#",
									fullScreenOffsetContainer: ""	
								});
							
							});	//ready
							
						</script>

					</div>
				</section>
				<!-- _________________________  Finish Top _________________________ -->
			<?php endif ?>

			<!-- _________________________ Start Top Sidebar _________________________ -->		
			<section class="top_sidebar">
				<div class="top_sidebar_inner">

					<?php if ($homepage): ?>
						<div class="one_first">
							<aside id="custom-colored-blocks-2" class="widget widget_custom_colored_blocks_entries">
								<?php if (!(empty($homepage['colored_box_1_heading']))): ?>
									<div id="box_color_1" class="widget_colored_cell four_box">
										<div class="widget_colored_cell_inner">
											<h2 class="widgettitle"><?=$homepage['colored_box_1_heading']?></h2>
											<p><?=$homepage['colored_box_1_detail']?></p>
										</div>
									</div>
								<?php endif ?>
								<?php if (!(empty($homepage['colored_box_2_heading']))): ?>
									<div id="box_color_2" class="widget_colored_cell four_box">
										<div class="widget_colored_cell_inner">
											<h2 class="widgettitle"><?=$homepage['colored_box_2_heading']?></h2>
											<p><?=$homepage['colored_box_2_detail']?></p>
										</div>
									</div>
								<?php endif ?>
								<?php if (!(empty($homepage['colored_box_3_heading']))): ?>
									<div id="box_color_3" class="widget_colored_cell four_box">
										<div class="widget_colored_cell_inner">
											<h2 class="widgettitle"><?=$homepage['colored_box_3_heading']?></h2>
											<p><?=$homepage['colored_box_3_detail']?></p>
										</div>
									</div>
								<?php endif ?>
								<?php if (!(empty($homepage['colored_box_4_heading']))): ?>
									<div id="box_color_4" class="widget_colored_cell four_box">
										<div class="widget_colored_cell_inner">
											<h2 class="widgettitle"><?=$homepage['colored_box_4_heading']?></h2>
											<p><?=$homepage['colored_box_4_detail']?></p>
										</div>
									</div>
								<?php endif ?>
							</aside>
						</div>
					<?php endif ?>


					<div class="one_first">
						<aside id="text-2" class="widget widget_text">
							<div class="textwidget">
								<?php if (!(empty($homepage['features_heading']))): ?>
									<h1><?=$homepage['features_heading']?></h1>
								<?php endif ?>
								<?php if (!(empty($homepage['features_tagline']))): ?>
									<h4><?=$homepage['features_tagline']?></h4>
								<?php endif ?>
							</div>
						</aside>
					</div>

				</div>
			</section>
			<!-- _________________________ Finish Top Sidebar _________________________ -->		
			<div class="content_wrap fullwidth">

				<!--_________________________ Start Content _________________________ -->		
				<section id="middle_content" role="main">
					<div class="entry">
						<div class="cmsms_cc">
<style>
	.feature-view .icon-view{
		text-align: center;
	}
	.feature-view .icon-view i{
		font-size: 60px;
		color: #c7191a;
	}
</style>
							<?php if ($features): ?>
								<?php foreach ($features as $key => $feature): ?>
									<div class="one_fourth feature-view">
										<div class="icon-view">
												<i class="<?=($feature['feature_icon']) ? $feature['feature_icon']  : 'fa-solid fa-heart-circle-plus' ?>"></i>
										</div>
										<h3 class="block_title tac"><?=$feature['title']?></h3>
										<p class="tac"><?=$feature['detail']?></p>
									</div>
								<?php endforeach ?>
							<?php endif ?>


							<?php if ($featured): ?>
								<div class="one_first first_column">
									<section id="services_shortcode_535774340eace" class="post_type_shortcode">
										<div class="post_type_shortcode_inner">
											<h3>Featured Services</h3>
											<script type="text/javascript"> 
												jQuery(document).ready(function () {
												    jQuery('#services_shortcode_535774340eace .post_type_list').cmsmsResponsiveContentSlider({
												        sliderWidth: '100%',
												        sliderHeight: 'auto',
												        animationSpeed: 500,
												        animationEffect: 'slide',
												        animationEasing: 'easeInOutExpo',
												        pauseTime: 0,
												        activeSlide: 1,
												        touchControls: false,
												        pauseOnHover: false,
												        arrowNavigation: false,
												        slidesNavigation: false
												    });
												});
											</script>
											<ul class="post_type_list services_container responsiveContentSlider">
												<li>
													<?php foreach ($featured as $key => $featuredService): ?>
														<article class="service type-service hentry one_fourth format-slider">
															<a href="<?=BASEURL.'service/'.$featuredService['slug']?>"></a>
															<figure>
																<a class="preloader" href="diagnosis_clinic.html" title="Pediatric Clinic">
																	<img width="440" height="440" src="<?=UPLOADS.$featuredService['image']?>" class="fullwidth wp-post-image" alt="<?=$featuredService['title']?>" title="<?=$featuredService['title']?>" />
																</a>
															</figure>
															<div class="service_rollover">
																<header class="entry-header">
																	<h5 class="entry-title">
																		<a href="diagnosis_clinic.html" title="Pediatric Clinic"><?=$featuredService['title']?></a>
																	</h5>
																</header>
																<footer class="entry-meta">
																	<span class="post_category">
																		<a href="<?=BASEURL.'service/'.$featuredService['slug']?>" rel="tag">Read More</a>
																	</span>
																</footer>
															</div>
														</article>
													<?php endforeach ?>
												</li>
											</ul>
											<div class="cl"></div>
										</div>
									</section>
								</div>
							<?php endif ?>

							<!--_________________________ Start Content _________________________ -->		
							<div class="cl"></div>
							<div class="bg-image" style="background: url(<?=UPLOADS.$setting['home_about_us_image']?>)no-repeat center center/cover;">
								<div class="inside-content">
									<?=$setting['home_about_us']?>
								</div>
							</div>	
							<div class="cl"></div>
							<div class="quality-section">
								<h3><?=$setting['offer_quality_heading']?></h3>
								<div class="quality-section-content">
									<div class="left">
										<p><?=$setting['offer_quality_left_side']?></p>
									</div>
									<div class="right">
										<div class="quality-logo-section">
											<img src="<?=IMG.'logo-jpeg.jpg'?>" alt="">
										</div>
										<p><?=$setting['offer_quality_right_side']?></p>
									</div>
								</div>
							</div>


							<div class="cl"></div>
							<?php if ($blog): ?>
								<div class="one_half first_column">
									<section class="post_type_shortcode type_post">
										<div class="post_type_shortcode_inner">
											<h3>Latest News</h3>
											<?php foreach ($blog as $key => $blogItem): ?>
												<article class="post type-post format-standard hentry category-home-post category-medical one_fourth">
													<figure class="cmsms_post_type_img">
														<img width="150" height="150" src="<?=UPLOADS.$blogItem['image']?>" class="attachment-thumbnail wp-post-image" alt="<?=$blogItem['title']?>" title="<?=$blogItem['title']?>" />		
													</figure>
													<header class="entry-header">
														<h4 class="entry-title">
															<a href="posttype.html"><?=$blogItem['title']?></a>
														</h4>
														<div class="cmsms_post_info"> <abbr class="published" title="January 24, 2014"><?=date('F d, Y',strtotime($blogItem['at']))?></abbr> </div>
													</header>
													<div class="entry-content">
														<p>
															<?=$blogItem['short']?>
														</p>
													</div>
												</article>
											<?php endforeach ?>
											<div class="cl"></div>
										</div>
									</section>
								</div>
							<?php endif ?>
							<?php if ($testimonials): ?>
								<div class="one_half">
									<section id="services_shortcode_5357743422388" class="post_type_shortcode type_testimonial">
										<div class="post_type_shortcode_inner">
											<h3>Testimonials</h3>
											<script type="text/javascript">
												jQuery(document).ready(function () {
												    jQuery('#services_shortcode_5357743422388 .post_type_list').cmsmsResponsiveContentSlider({
												        sliderWidth: '100%',
												        sliderHeight: 'auto',
												        animationSpeed: 500,
												        animationEffect: 'slide',
												        animationEasing: 'easeInOutExpo',
												        pauseTime: 0,
												        activeSlide: 1,
												        touchControls: true,
												        pauseOnHover: false,
												        arrowNavigation: true,
												        slidesNavigation: false
												    });
												});
											</script>
											<ul class="post_type_list services_container responsiveContentSlider">
												<?php foreach ($testimonials as $key => $testimonial): ?>
													<li>
														<article class="testimonial type-testimonial hentry one_first">
															<div class="tl-content_wrap">
																<div class="tl-content">
																	<blockquote>
																		<?=$testimonial['comment']?>
																	</blockquote>
																</div>
															</div>
															<img width="150" height="150" src="<?=UPLOADS.$testimonial['img']?>" class="attachment-thumbnail wp-post-image" alt="Fredrick Keen" title="Fredrick Keen" />		
															<a target="_blank" href="#" class="tl_author"><?=$testimonial['name']?></a>
															<p class="tl_company"><?=$testimonial['age']?> years</p>
														</article>
													</li>
												<?php endforeach ?>
											</ul>
											<div class="cl"></div>
										</div>
									</section>
								</div>
							<?php endif ?>

							<?php if ($teams): ?>
								<div class="one_first first_column">
									<h3>Our Leadership</h3>
								</div>
								<?php foreach ($teams as $key => $team): ?>
									<div class="one_fourth">
										<div class="cmsms_our_team_wrap">
											<div class="cmsms_our_team">
												<div class="wrap_person">
													<figure>
														<img width="440" height="440" src="<?=UPLOADS.$team['img']?>" class="fullwidth" alt="<?=$team['name']?>" />
													</figure>
													<!-- <div class="cmsms_team_rollover glow_blue">
														<a href="dr_michael_linden.html" class="cmsms_link">
															<span></span>
														</a>
													</div> -->
												</div>
												<header class="entry-header">
													<div>
														<h6 class="person_title">
															<a href="dr_michael_linden.html"><?=$team['name']?></a>
														</h6>
														<p class="person_subtitle"><?=$team['designation']?></p>
													</div>
												</header>
												<?php if (1==2): ?>
													<footer class="entry-meta">
														<a href="#" title="facebook" target="_blank">
															<img src="<?=IMG?>img/facebook.png" alt="facebook" />		
														</a>
														<a href="#" title="twitter" target="_blank">
															<img src="<?=IMG?>img/twitter.png" alt="twitter" />		
														</a>
														<a href="#" title="skype" target="_blank">
															<img src="<?=IMG?>img/skype.png" alt="skype" />		
														</a>
														<a href="#" title="linkedin" target="_blank">
															<img src="<?=IMG?>img/linkedin.png" alt="linkedin" />		
														</a>
														<div class="cl"></div>
													</footer>
												<?php endif ?>
											</div>
										</div>
									</div><!-- /one_fourth -->
								<?php endforeach ?>
							<?php endif ?>

						</div>
					</div>
				</section>
				<!-- _________________________ Finish Content _________________________ -->		

				<div class="cl"></div>
			</div>

		</section>
		<!-- _________________________ Finish Middle _________________________ -->

		<div id="cmsms_latest_bottom_tweets">
			<div class="cmsms_latest_bottom_tweets_inner">
				<span class="tweets_icon"></span>
				<ul class="jta-tweet-list responsiveContentSlider">
					<li class="jta-tweet-list-item">
						100 Sales for Meducure theme, and it is only a start!  See why so many people liked it -
						<a href="http://t.co/Xzsvpy8rPQ" target="_blank" rel="nofollow">http://t.co/Xzsvpy8rPQ</a>
					</li>
					<li class="jta-tweet-list-item">
						#Wordpress We LOVE creating GOOD themes... #Medical #Health #Medicine
						<a href="http://t.co/PmSDQs9lHN" target="_blank" rel="nofollow">http://t.co/PmSDQs9lHN</a>
					</li>
					<li class="jta-tweet-list-item">
						CMS Masters And Their Best Web Design Tools #bestwebdesigntools #webdesign
						<a href="http://t.co/9d1vxenoNQ" target="_blank" rel="nofollow">http://t.co/9d1vxenoNQ</a>
						via @SlideShare
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function () { 
				jQuery('#cmsms_latest_bottom_tweets .jta-tweet-list').cmsmsResponsiveContentSlider( {
					sliderWidth : '100%',
					sliderHeight : 'auto',
					animationSpeed : 500,
					animationEffect : 'fade',
					animationEasing : 'linear',
					pauseTime : 7000,
					activeSlide : 1, 
					touchControls : true,
					pauseOnHover : false, 
					arrowNavigation : true, 
					slidesNavigation : false
				} );
			} );
		</script>
		

	
