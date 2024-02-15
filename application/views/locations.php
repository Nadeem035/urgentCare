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

                <!-- Locations loop -->
                <div class="locations">
                	<?php if ($locations): ?>
	                	<?php foreach ($locations as $key => $l): ?>	
	                		<div class="col-4">
		                		<div class="location-block">
		                			<div class="location-image">
		                				<img src="<?=UPLOADS.$l['image']?>" alt="<?=$l['name']?>">
		                			</div>
		                			<div class="location-detail">
		                				<span class="state"><?=$l['state']?></span>
		                				<h2><a href="<?=BASEURL.'location/'.$l['slug']?>"><?=$l['name']?></a></h2>
		                				<h5><?=$l['address']?></h5>
		                				<a class="btn-theme" href="<?=BASEURL.'location/'.$l['slug']?>">View Clinic <i class="fas fa-arrow-right"></i></a>
		                			</div>
		                		</div>
		                	</div>
	            		<?php endforeach ?>	
                	<?php endif ?>
                </div>


			</div>
		</section>
		<!-- _________________________ Finish Content _________________________ -->			
		<div class="cl"></div>






	</div>
</section>
