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

			
		</section>
		<!-- _________________________ Finish Content _________________________ -->			
		<div class="cl"></div>
	</div>
</section>
