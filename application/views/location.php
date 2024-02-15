<section id="middle">
	<div class="headline">
	<!-- <h1><?=$location['name']?></h1> -->
	</div>
	<div class="cmsms_breadcrumbs">
		<a href="<?=BASEURL?>" class="cms_home">Home</a>
		<span class="breadcrumbs_sep"> / </span>
		<span><?=$location['name']?></span>
	</div>
	<div class="content_wrap">

		<!--_________________________ Start Content _________________________ -->		
		<section id="content" role="main" style="width: 100%;">
			<div class="accordion">
                <div class="custom-container">
            		<div class="col-6">
            			<div class="heading-section">
            				<h3><?=$location['name']?> | <?=$location['state'].' '. $location['city']?></h3>
            			</div>
            			<div class="full-image">
            				<img src="<?=UPLOADS.$location['image']?>" alt="">
            			</div>
            		</div>
            		<div class="col-6">
            			<div class="clinic-address">
            				<h4>URGENT CARE CLINIC IN</h4>
            				<div class="address-section">
            					<i class="fas fa-location-dot"></i>
            					<div>
            						<h4><?=$location['state'].' '. $location['city']?></h4>
            						<h5><?=$location['state']?></h5>
            					</div>
            				</div>
        					<ul class="other-address-info">
        						<li>
        							<p>
        								<i class="fas fa-location-dot"></i>&nbsp; <a href="<?=$setting['google_map']?>" target="_blank"><?=$setting['address_1']?></a>
        							</p>
        						</li>
        						<li>
        							<p>
        								<i class="fas fa-phone"></i>
        								<a href="tel:<?=$setting['phone_1']?>"><?=$setting['phone_1']?></a>
        							</p>
        						</li>

        						<li>
        							<p>
        								<i class="fas fa-envelope"></i>
        								<a href="mailto:<?=$setting['email_1']?>">Contact Us</a>
        							</p>
        						</li>

        						<li>
        							<p>
        								<i class="fas fa-clock"></i>
        								<?=$location['timings']?>
        							</p>
        						</li>
        					</ul>
            			</div>
            		</div>
                </div>
                <div class="schedule-today">
                	<div class="custom-container">
                		<div class="col-6">
		                	<div class="address-section">
		    					<i class="fas fa-location-dot"></i>
		    					<div>
		    						<h4>Schedule Today</h4>
		    						<h5>Schedule your appointment Online or Call</h5>
		    					</div>
		    				</div>
                		</div>
                		<div class="col-6">
                			<div class="buttons-section">
                				<a href="tel:<?=$setting['phone_1']?>"><?=$setting['phone_1']?></a>
                				<a href="<?=$setting['google_map']?>" target="_blank">Directions</a>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="custom-container">
            		<div class="col-6">
            			<div class="address-iframe">
            				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$setting['google_map']?>&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
            			</div>
            		</div>
            		<div class="col-6">
            			<div class="address-rightside">
            				<h2><i class="fas fa-home"></i> Walk-In Urgent Care</h2>
            				<p><?=$location['walk_in_urgent_care']?></p>
            				<h4><i class="fas fa-clock"></i> Open: <?=$location['timings']?></h4>
            				<div class="buttons-section">
                				<a href="tel:<?=$setting['phone_1']?>"><?=$setting['phone_1']?></a>
                				<a href="<?=$setting['google_map']?>" target="_blank">Directions</a>
                			</div>
            			</div>
            		</div>
                </div>
                <div class="urgent-care-service">
                	<?=$location['detail']?>
                	<?php 
                	if (!(empty($location['services']))){
                		$servicesIds = explode(',',$location['services']);
                		?>
	                	<ul>
	                		<?php foreach ($services as $key => $service): ?>
	                			<?php if (in_array($service['service_id'], $servicesIds)): ?>
	                				<li><a href="<?=BASEURL.'service/'.$service['slug']?>"><h4><?=$service['title']?></h4></a></li>
	                			<?php endif ?>
	                		<?php endforeach ?>
	                	</ul>
                		<?php
                	}
                	?>
                </div>
                <div class="custom-container services-test">
                	<div class="col-4">
                		<div class="tests-services">
	                		<h3>URGENT CARE</h3>
	                		<ul>
	                			<?php foreach ($facilities as $key => $fac): ?>
	                				<?php if ($fac['heading'] == "urgent care"): ?>
		                				<li><?=$fac['title']?></li>
	                				<?php endif ?>
		                		<?php endforeach ?>
	                		</ul>
                		</div>
                	</div>
                	<div class="col-4">
                		<div class="tests-services">
	                		<h3>ONSITE LAB & X-RAYS</h3>
	                		<ul>
	                			<?php foreach ($facilities as $key => $fac): ?>
	                				<?php if ($fac['heading'] == "onsite lab & x-rays"): ?>
		                				<li><?=$fac['title']?></li>
	                				<?php endif ?>
		                		<?php endforeach ?>
	                		</ul>
                		</div>
                	</div>
                	<div class="col-4">
                		<div class="tests-services">
	                		<h3>VACCINATIONS</h3>
	                		<ul>
	                			<?php foreach ($facilities as $key => $fac): ?>
	                				<?php if ($fac['heading'] == "vaccinations"): ?>
		                				<li><?=$fac['title']?></li>
	                				<?php endif ?>
		                		<?php endforeach ?>
		                	</ul>
                		</div>
                	</div>

                	<div class="col-6">
                		<div class="tests-services">
	                		<h3>PRIMARY CARE</h3>
	                		<ul>
	                			<?php foreach ($facilities as $key => $fac): ?>
	                				<?php if ($fac['heading'] == "primary care"): ?>
		                				<li><?=$fac['title']?></li>
	                				<?php endif ?>
		                		<?php endforeach ?>
		                	</ul>
                		</div>
                	</div>

                	<div class="col-6">
                		<div class="tests-services">
	                		<h3>PHYSICAL EXAMS</h3>
	                		<ul>
	                			<?php foreach ($facilities as $key => $fac): ?>
	                				<?php if ($fac['heading'] == "physical exams"): ?>
		                				<li><?=$fac['title']?></li>
	                				<?php endif ?>
		                		<?php endforeach ?>
		                	</ul>
                		</div>
                	</div>
                </div>
                <div class="about-service">
                	<h1>About Our Services:</h1>
                	<div>
                		<p><?=$location['about_our_services']?></p>
                		<p>We Are Open: <?=$location['timings']?></p>
                	</div>
                </div>
            	<div class="footer-info-logo">
            		<a href="<?=BASEURL?>" title="Medicure">
						<img src="<?=IMG?>logo-jpeg.jpg" alt="Medicure" />
					</a>
            	</div>
                <div class="footer-info">
                	<div class="col-4">
                		<a target="_blank" href="<?=$setting['google_map']?>">
	                		<div class="icon">
	                			<i class="fas fa-location-dot"></i>
	                		</div>
                			<?=$setting['address_1']?>
                		</a> 
                	</div>
                	<div class="col-4">
                		<a href="tel:<?=$setting['phone_1']?>">
	                		<div class="icon">
	                			<i class="fas fa-phone"></i>
	                		</div>
                			<?=$setting['phone_1']?>
                		</a> 
                	</div>
                	<div class="col-4">
                		<a target="_blank" href="<?=$setting['google_map']?>">
	                		<div class="icon">
	                			<i class="fas fa-map"></i>
	                		</div>
	                		Get Directions
	                	</a> 
                	</div>
                </div>
			</div>
		</section>
		<!-- _________________________ Finish Content _________________________ -->			
		<div class="cl"></div>
	</div>
</section>


