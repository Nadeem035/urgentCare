<section id="middle">
	<div class="headline">
	<h1><?=$page_title?></h1>
	</div>
	<div class="cmsms_breadcrumbs">
		<a href="<?=BASEURL?>" class="cms_home">Home</a>
		<span class="breadcrumbs_sep"> / </span>
		<span><?=$page_title?></span>
	</div>
	<div class="content_wrap">

		<!--_________________________ Start Content _________________________ -->		
		<section id="content" role="main" style="width: 100%;">
			<div class="accordion">

                <?php if (strlen($page_image) > 4): ?>
				    <img src="<?=UPLOADS.$page_image?>" style="width:100%;">
                <?php endif ?>

                <div style="margin: 15px 0;"><?=$page_detail?></div>

			</div>
		</section>
		<!-- _________________________ Finish Content _________________________ -->			
		<div class="cl"></div>
        <!-- eisay b set krna -->
        <div class="cmsms_cc">
            <div class="one_first first_column">
                <div class="cmsms-form-builder custom-style-form">
                        <div class="box success_box" style="display:none;">
                            <table>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Thank You!<br>Your message has been sent successfully.</td>
                                </tr>
                            </table>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function () { 
                                jQuery('#contactform').validationEngine('init');
                                
                                jQuery('#contactform a#contact_form_formsend').click(function () { 
                                    var form_builder_url = jQuery('#contact_form_url').val();
                                    
                                    jQuery('#contactform .loading').animate( { opacity : 1 }, 250);
                                    
                                    if (jQuery('#contactform').validationEngine('validate')) { 
                                        jQuery.post(form_builder_url, { 
                                            name : jQuery('#contact_name').val(), 
                                            email : jQuery('#contact_email').val(), 
                                            subject : jQuery('#contact_subject').val(), 
                                            msg : jQuery('#contact_message').val(),
                                            type : 'Careers'
                                        }, function () { 
                                            jQuery('#contactform .loading').animate( { opacity : 0 }, 250);
                                            
                                            document.getElementById('contactform').reset();
                                            
                                            jQuery('#contactform').parent().find('.box').hide();
                                            jQuery('#contactform').parent().find('.success_box').fadeIn('fast');
                                            jQuery('html, body').animate( { scrollTop : jQuery('#contactform').offset().top - 100 }, 'slow');
                                            jQuery('#contactform').parent().find('.success_box').delay(5000).fadeOut(1000);
                                        } );
                                        
                                        return false;
                                    } else { 
                                        jQuery('#contactform .loading').animate( { opacity : 0 }, 250);
                                        
                                        return false;
                                    }
                                } );
                            } );
                        </script>
                        <form action="#" method="post" id="contactform">
                            <p>Required fields are marked <span class="color2">*</span></p>
                            <div class="form_info cmsms_input">
                                <label for="contact_name">Name <span class="color2">*</span></label>
                                <input type="text" name="contact_name" id="contact_name" value="" size="22" tabindex="3" class="validate[required,minSize[3],maxSize[100],custom[onlyLetterSp]]"/>
                            </div>
                            <div class="cl"></div>
                            <div class="form_info cmsms_input">
                                <label for="contact_email">Email <span class="color2">*</span></label>
                                <input type="text" name="contact_email" id="contact_email" value="" size="22" tabindex="4" class="validate[required,custom[email]]" />
                            </div>
                            <div class="cl"></div>
                            <div class="form_info cmsms_input">
                                <label for="contact_subject">Subject <span class="color2">*</span></label>
                                <input type="text" name="contact_subject" id="contact_subject" value="" size="22" tabindex="6" class="validate[required,minSize[3],maxSize[100]]" />
                            </div>
                            <div class="cl"></div>
                            <div class="form_info cmsms_textarea">
                                <label for="contact_message">Message <span class="color2">*</span></label>
                                <textarea name="contact_message" id="contact_message" cols="28" rows="3" tabindex="7" class="validate[required,minSize[3]]" ></textarea>
                            </div>
                            <div class="cl"></div>
                            <!-- 
                            <div class="form_info cmsms_checkboxes">
                                <div class="check_parent">
                                    <input type="checkbox" name="check_1" id="check_1" value="I Agree!">
                                    <label for="check_1">I Agree!</label>
                                </div>
                                <div class="check_parent">
                                    <input type="checkbox" name="check_2" id="check_2" value="Yes">
                                    <label for="check_2">Yes</label>
                                </div>
                                <div class="check_parent">
                                    <input type="checkbox" name="check_3" id="check_3" value="No">
                                    <label for="check_3">No</label>
                                </div>
                            </div>
                            <div class="form_info cmsms_radio">
                                <div class="check_parent">
                                    <input type="radio" name="radio" id="radio_1" value="Just cool!">
                                    <label for="radio_1">Just cool!</label>
                                </div>
                                <div class="check_parent">
                                    <input type="radio" name="radio" id="radio_2" value="Supercool!">
                                    <label for="radio_2">Supercool!</label>
                                </div>
                                <div class="check_parent">
                                    <input type="radio" name="radio" id="radio_3" value="Are you kidding? This is awesome!">
                                    <label for="radio_3">Are you kidding? This is awesome!</label>
                                </div>
                            </div>
                            <div class="form_info cmsms_select">
                                <select>
                                    <option>Just cool!</option>
                                    <option>Supercool!</option>
                                    <option>Are you kidding? This is awesome!</option>
                                </select>
                                <span class="db">Description goes here</span>
                            </div> 
                            -->
                            <div class="cl"></div>
                            <div><input type="hidden" name="contact_form_url" id="contact_form_url" value="<?=BASEURL.'submit-contact-form'?>" /></div><!-- Here you need to set the path to the sendmail file -->
                            <div>
                                <a href="#" class="button" id="contact_form_formsend" tabindex="8"><span>Send a message</span></a>
                                <div class="loading"></div>
                            </div>
                        </form>

                        <p style="margin: 10px auto;padding: 20px;background: #eee;">
                            ** This contact form is not to be used in case of an emergency. This contact form is sent to the corporate office for NON EMERGENCY related inquiries about Total Point Urgent Care Center. If you have a medical emergency, please do not fill out this form and contact one of our urgent care centers right away or call 911. No information on this website should be considered medical advice. In order to be treated and given a diagnosis, you must be seen by a doctor. This website is to be used for informational purposed only and information to contact one of our urgent care centers when you need directions to the nearest Urgent Care.**
                        </p>
                    </div>
            </div>
        </div>





	</div>
</section>


