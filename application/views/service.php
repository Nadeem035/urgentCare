<section id="middle">
	<div class="headline">
	<h1><?=$service['title']?></h1>
	</div>
	<div class="cmsms_breadcrumbs">
		<a href="<?=BASEURL?>" class="cms_home">Home</a>
		<span class="breadcrumbs_sep"> / </span>
		<span><?=$service['title']?></span>
	</div>
	<div class="content_wrap">

		<!--_________________________ Start Content _________________________ -->		
		<section id="content" role="main" style="width: 100%;">
			<div class="accordion">

                <?php if (strlen($service['image']) > 4): ?>
				    <img src="<?=UPLOADS.$service['image']?>" style="width:100%;">
                <?php endif ?>

                <div style="margin: 15px 0;"><?=$service['detail']?></div>

			</div>
		</section>
		<!-- _________________________ Finish Content _________________________ -->			
		<div class="cl"></div>
	</div>
</section>
