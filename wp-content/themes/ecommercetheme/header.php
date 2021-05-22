<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommercetheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assests/css/templatemo-style.css" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="header">
		<div class="clearfix">
			<div class="logo">
				<?php the_custom_logo();?>
			</div>
		
    
			<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<?php the_custom_logo();?>
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant template</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
							  <li class="tm-nav-li"><?php
								wp_nav_menu(
								array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'navigation',
					
				)
			);
			?></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	</div>