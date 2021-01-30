<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base_Underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a name="top"></a>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'base-underscore' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="container">
			<nav id="site-navigation" class="main-navigation">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="Peace Logo"></a>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fa fa-bars"></i>
				</button>
				<div class="menu-nav-icons">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div class="social-icons-container">
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</nav>
		</div>
	</header>
