<!-- _________________________ Start Bottom _________________________ -->
	<section id="bottom">
		<div class="bottom_inner">
			<div class="one_fourth custom-width-footer">
				<aside id="text-3" class="widget widget_text">
					<h3 class="widgettitle">About</h3>
					<div class="textwidget">
						<p id="pb_35">
							<?=$setting['footer_about_note']?>
						</p>
						<aside class="widget widget_custom_contact_info_entries" id="custom-contact-info-2">
							<div class="contact_widget_info">
								<span class="contact_widget_name"><?=$setting['address_1']?></span>
							</div>
							<span class="contact_widget_phone"><?=$setting['phone_1']?></span>
							<span class="contact_widget_email">
								<a href="mailto:<?=$setting['email_1']?>"><?=$setting['email_1']?></a>
							</span>
						</aside>
					</div>
				</aside>
			</div>
			<div class="one_fourth custom-width-footer">
				<aside id="nav_menu-2" class="widget widget_nav_menu">
					<h3 class="widgettitle">Quick Links</h3>
					<div class="menu-doctors-container">
						<ul id="menu-doctors" class="menu footer-quick-links">
							<li class="menu-item">
								<a href="<?=BASEURL.'services'?>">Services</a>
							</li>
							<li class="menu-item">
								<a href="<?=BASEURL.'locations'?>">Locations</a>
							</li>
							<li class="menu-item">
								<a href="<?=BASEURL.'careers'?>">Careers</a>
							</li>
							<li class="menu-item">
								<a href="<?=BASEURL.'about-us'?>">About Us</a>
							</li>
							<li class="menu-item">
								<a href="<?=BASEURL.'contact-us'?>">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="wrap_social_icons">
						<ul class="social_icons">
							<?php
                            if (isset($setting['facebook']) && strlen($setting['facebook']) > 5) {
                                echo '<li><a href="'.$setting['facebook'].'" target="_blank"><img src="'.IMG.'img/facebook.png" alt="#" /></a></li>';
                            }
                            if (isset($setting['linkedin']) && strlen($setting['linkedin']) > 5) {
                                echo '<li><a href="'.$setting['linkedin'].'" target="_blank"><img src="'.IMG.'img/linkedin.png" alt="#" /></a></li>';
                            }
                            if (isset($setting['twitter']) && strlen($setting['twitter']) > 5) {
                                echo '<li><a href="'.$setting['twitter'].'" target="_blank"><img src="'.IMG.'img/twitter.png" alt="#" /></a></li>';
                            }
                            ?>
						</ul>
						<div class="cl"></div>
						<a href="#" class="social_toggle">
							<span></span>
						</a>
					</div>
				</aside>
			</div>
			<div class="cl_resp"></div>
			<!--<div class="one_fourth">-->
			<!--	<aside id="nav_menu-4" class="widget widget_nav_menu">-->
			<!--		<h3 class="widgettitle">Services</h3>-->
			<!--		<div class="menu-services-container">-->
			<!--			<ul id="menu-services" class="menu">-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Pediatric Clinic</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Diagnosis Clinic</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Cardiac Clinic</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Laboratory Analysis</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Dental Clinic</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Gynecological Clinic</a>-->
			<!--				</li>-->
			<!--				<li class="menu-item">-->
			<!--					<a href="#">Psychological Counseling</a>-->
			<!--				</li>-->
			<!--			</ul>-->
			<!--		</div>-->
			<!--	</aside>-->
			<!--</div>-->
			<div class="one_fourth custom-width-footer">
				<aside class="widget widget_custom_contact_form_entries">
					<h3 class="widgettitle">Quick Contacts</h3>
					<div class="cmsms-form-builder">
						<div class="box success_box widgetinfo">
							<table>
								<tr>
									<td>&nbsp;</td>
									<td>Thank You!<br>Your message has been sent successfully.</td>
								</tr>
							</table>
						</div>
						<script type="text/javascript">
							jQuery(document).ready(function () { 
								jQuery('#form_contact_form_widget_001').validationEngine('init');
								
								jQuery('#form_contact_form_widget_001 a#contact_form_widget_001_wformsend').click(function () { 
									var form_builder_url = jQuery('#contact_form_widget_001_wurl').val();
									
									jQuery('#form_contact_form_widget_001 .loading').animate( {
										opacity : 1
									} , 250);
									
									if (jQuery('#form_contact_form_widget_001').validationEngine('validate')) { 
										jQuery.post(form_builder_url, { 
											email : jQuery('#field_003').val(), 
											msg : jQuery('#field_004').val(),
											type : 'Quick Contacts'
										}, function () { 
											jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);
											document.getElementById('form_contact_form_widget_001').reset();
											jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').hide();
											jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').fadeIn('fast');
											jQuery('html, body').animate( { scrollTop : (jQuery('#form_contact_form_widget_001').offset().top - 100) }, 'slow');
											jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').delay(5000).fadeOut(1000);
										} );
										
										return false;
									} else { 
										jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);
										
										return false;
									}
								} );
							} );
						</script>
						<form action="#" method="post" id="form_contact_form_widget_001">
							<div class="form_info cmsms_input">
								<label for="field_003">Your Email<span class="color_3"> *</span></label>
								<input type="text" name="wemail" id="field_003" size="22" tabindex="12" class="validate[required,custom[email]]" />
							</div>
							<div class="form_info cmsms_textarea">
								<label for="field_004">Your message<span class="color_3"> *</span></label>
								<textarea name="wmessage" id="field_004" cols="28" rows="6" tabindex="13" class="validate[required,minSize[3]]"></textarea>
							</div>
							<div class="loading"></div>
							<div><input type="hidden" name="contact_form_widget_001_wurl" id="contact_form_widget_001_wurl" value="<?=BASEURL.'submit-contact-form'?>" /></div><!-- Here you need to set the path to the sendmail file -->
							<div><a href="#" id="contact_form_widget_001_wformsend" class="button_small" tabindex="14"><span>Submit</span></a></div>
						</form>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<!-- _________________________ Finish Bottom _________________________ -->

	<a href="javascript:void(0);" id="slide_top"></a>
</div>
<!-- _________________________ Finish Container _________________________ -->

<!-- _________________________ Start Footer _________________________ -->

	<footer id="footer" role="contentinfo">
		<span class="copyright">Medicure © <?=date('Y')?> | All Rights Reserved</span>
		<ul id="footer_nav" class="footer_nav">
			<li class="menu-item">
				<a href="<?=BASEURL.'privacy'?>">Privacy</a>
			</li>
			<li class="menu-item">
				<a href="<?=BASEURL.'terms'?>">Terms</a>
			</li>
		</ul>
	</footer>
	<!-- _________________________ Finish Footer _________________________ -->

</section>
<!-- _________________________ Finish Page _________________________ -->

	<script src="<?=JS?>respond.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=REVOLUTION?>js/jquery.themepunch.revolution.js"></script>
	<script type="text/javascript" src="<?=REVOLUTION?>js/jquery.themepunch.revolution.min.js"></script>	
	<script type="text/javascript" src="<?=REVOLUTION?>js/jquery.themepunch.plugins.min.js"></script>
	<script type='text/javascript' src='<?=JS?>jquery.easing.min6f3e.js?ver=1.3.0'></script>
	<script src="<?=JS?>jquery.script.js" type="text/javascript"></script>
	<script src="<?=JS?>jackbox-lib.js" type="text/javascript"></script>
	<script src="<?=JS?>jackbox.js" type="text/javascript"></script>
	<script src="<?=JS?>jquery.flickrfeed.min.js" type="text/javascript"></script>
	<script src="<?=JS?>jquery.tweet.min.js" type="text/javascript"></script>
	<script src="<?=JS?>jquery.validationEngine-lang.js" type="text/javascript"></script>
	<script src="<?=JS?>jquery.validationEngine.min.js" type="text/javascript"></script>
</body>

<!-- Mirrored from medicure-html.cmsmasters.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2024 09:55:52 GMT -->
</html>
