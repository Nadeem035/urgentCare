<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
	<meta content="text/html;charset=utf-8" http-equiv="content-type" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title><?=$meta_title?></title>
    <meta name="keywords" content="<?=$meta_key?>">
    <meta name="description" content="<?=$meta_desc?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=IMG.'favicon'?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=IMG.'favicon'?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=IMG.'favicon'?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=IMG.'favicon'?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=IMG.'favicon'?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=IMG.'favicon'?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=IMG.'favicon'?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=IMG.'favicon'?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=IMG.'favicon'?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=IMG.'favicon'?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=IMG.'favicon'?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=IMG.'favicon'?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=IMG.'favicon'?>/favicon-16x16.png">
    <link rel="manifest" href="<?=IMG.'favicon'?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=IMG.'favicon'?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?=CSS?>style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=CSS?>styles/fonts.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=CSS?>styles/adaptive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=CSS?>styles/retina.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=CSS?>fonts/css/fontello.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,300italic,500,700,500italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=CSS?>styles/jackbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=CSS?>styles/jquery.jPlayer.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=REVOLUTION?>css/dynamic-captions.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=REVOLUTION?>css/static-captions.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=REVOLUTION?>css/settings.css" media="screen" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?=CSS?>styles/ie.css" type="text/css" />
		<link rel="stylesheet" href="<?=CSS?>styles/ieCss3.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
	<script src="<?=JS?>jquery.min.js" type="text/javascript"></script>
	<script src="<?=JS?>modernizr.custom.all.js" type="text/javascript"></script>
	<style>
		.contact_widget_phone > span,
		.contact_widget_email > span {width: 1%;}

		#box_color_1 {background-color: #fd2123;}
		#box_color_2 {background-color: #e21617;}
		#box_color_3 {background-color: #ce0c0d;}
		#box_color_4 {background-color: #c10001;}

		.content_icon.icon-glyph-2:before{color:#c10001;}
		.content_icon.icon-glyph-3:before{color:#c10001;}
		.content_icon.icon-glyph-4:before{color:#c10001;}
		.content_icon.icon-glyph-5:before{color:#c10001;}

		#text-2 .textwidget h1,
		#text-2 .textwidget h4 {
			text-align:center;
		}
		#text-2 .textwidget h1 {color:#c10001;}
		#text-2 .textwidget h4 {color:#898989;}

		.post.type-post.one_fourth .cmsms_post_type_img > img {
			width:130px; 
			height:130px;
		}

		.type-testimonial img.cmsms_img {
			width:60px; 
			height:60px;
		}

		.textwidget #pb_35 {padding-bottom:35px;}
	</style>
</head>
<body class="page">

<?php if (1==2): ?>
	<!-- _________________________ Start Adv Medicure_WP Banner _________________________ -->	
	<div class="adv_medicure">
		<div class="adv_medicure_inner">
		<a href="http://bit.ly/medicure-wp"><img src="<?=IMG?>wp-version.jpg" alt="medicure_wp"></a>
		<span class="close"></span>
		</div>
	</div>
	<script>
		jQuery(window).load(function() {
		  jQuery('.adv_medicure').addClass('banner_animated');
		  jQuery('.close').click(function(){
			jQuery('.adv_medicure').hide();
		  });
		});
	</script>
<?php endif ?>

<!-- _________________________ End Adv Medicure_WP Banner _________________________ -->

<!-- _________________________ Start Page _________________________ -->
<section id="page" class="csstransition cmsms_resp hfeed site">

	<!-- _________________________ Start Container _________________________ -->
	<div class="container">

		<!-- _________________________ Start Header _________________________ -->
		<header id="header">
			<div class="header_inner">
				<div class="custom_header">
					<div class="header_html">
						<span class="contact_widget_phone">
							Contact us:
							<span></span>
							<?=$setting['phone_1']?>
						</span>
						<span class="contact_widget_email">
							<span></span>
							<a href="mailto:<?=$setting['email_1']?>"><?=$setting['email_1']?></a>
						</span>
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
				</div>
				<a href="<?=BASEURL?>" title="Medicure" class="logo">
					<img src="<?=IMG?>logo-jpeg.jpg" alt="Medicure" />
				</a>
				<a class="responsive_nav" href="javascript:void(0);">
					<span></span>
				</a>
				<!-- _________________________ Start Navigation _________________________ -->
				<div class="wrap_nav">
					<nav role="navigation">
						<ul id="navigation" class="navigation">
							<!-- <li class="menu-item <?=($active_menu == 'home') ? 'current_page_item' : ''?> ">
								<a href="<?=BASEURL?>"><span>Home</span></a>
							</li> -->
							<li class="dropdown menu-item menu-item-has-children <?=($active_menu == 'services') ? 'current_page_item' : ''?>">
								<a href="<?=BASEURL.'services'?>"><span>Services</span></a>
								<ul class="sub-menu">
									<?php foreach ($parents as $key => $parent): ?>
										<li class="dropdown menu-item menu-item-has-children">
											<a href="<?=BASEURL.'service/'.$parent['slug']?>"><span><?=$parent['title']?></span></a>
											<ul class="sub-menu">
												<?php foreach ($services as $key => $serviceItem): ?>
													<?php if ($parent['service_id'] == $serviceItem['parent']): ?>
														<li><a href="<?=BASEURL.'service/'.$serviceItem['slug']?>"><span><?=$serviceItem['title']?></span></a></li>
													<?php endif ?>
												<?php endforeach ?>
											</ul>
										</li>
									<?php endforeach ?>
								</ul>
							</li>
							<li class="menu-item <?=($active_menu == 'covid_19_services') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'covid-19-services'?>"><span>Covid 19 Services</span></a></li>
							<li class="dropdown menu-item menu-item-has-children <?=($active_menu == 'locations') ? 'current_page_item' : ''?>">
								<a href="<?=BASEURL.'locations'?>"><span>Locations</span></a>
								<ul class="sub-menu">
									<?php foreach ($locations as $key => $location_item): ?>
										<li class="dropdown menu-item menu-item-has-children">
											<a class="custom-width-menu" href="<?=BASEURL.'location/'.$location_item['slug']?>">
												<span>
													<?=$location_item['name']?> (<?=$location_item['city']?> - <?=$location_item['state']?>)
												</span>
											</a>
										</li>
									<?php endforeach ?>
								</ul>
							</li>
							<li class="menu-item <?=($active_menu == 'faqs') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'faqs'?>"><span>FAQs</span></a></li>
							<li class="menu-item <?=($active_menu == 'employer_resources') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'employer-resources'?>"><span>Employer Resources</span></a></li>
							<li class="menu-item <?=($active_menu == 'about_us') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'about-us'?>"><span>About Us</span></a></li>
							<li class="menu-item <?=($active_menu == 'careers') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'careers'?>"><span>Careers</span></a></li>
							<!-- <li class="menu-item <?=($active_menu == 'contact_us') ? 'current_page_item' : ''?>"><a href="<?=BASEURL.'contact-us'?>"><span>Contacts</span></a></li> -->
						</ul>
						<div class="cl"></div>
						<!-- <div class="wrap_header_search">
							<a class="search_but cmsms_icon" href="javascript:void(0);"></a>
							<div class="search_line">
								<form method="get" action="#">
									<p>
										<input name="s" id="error_search" placeholder="enter keywords" value="" type="text">
										<input value="" type="submit">
									</p>
								</form>
							</div>
						</div> -->
					</nav>
					<div class="cl"></div>
				</div>
				<div class="cl"></div>
				<!-- _________________________ Finish Navigation _________________________ -->
			</div>
			<div class="cl"></div>
		</header>
		<!-- _________________________ Finish Header _________________________ -->