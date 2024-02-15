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
	</div>
</section>
