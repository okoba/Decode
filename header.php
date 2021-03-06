<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content" class="site-content">
 *
 * @package Decode
 */
?><!DOCTYPE html>
	<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php tha_head_top(); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_theme_mod( 'favicon_image', '' )) { echo '<link rel="icon" href="' . esc_url( get_theme_mod( 'favicon_image', '' ) ) . '">'; } ?>
<?php if ( get_theme_mod( 'favicon_image', '' )) { echo '<link rel="apple-touch-icon-precomposed" href="' . esc_url( get_theme_mod( 'favicon_image', '' ) ) . '">'; } ?>

<?php tha_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php tha_body_top(); ?>

<div id="page" class="hfeed site<?php if ( get_theme_mod( 'show_sidebar', true ) == true) { echo ' sidebar-style-' . get_theme_mod( 'constant_sidebar', 'closing' ) . ' sidebar-style-' . get_theme_mod( 'sidebar_position', 'left' ); }?>">
	<?php tha_header_before(); ?>
	<?php if ( get_theme_mod( 'constant_sidebar', 'closing' ) == 'constant' && get_theme_mod( 'show_sidebar', true ) == true) { echo '<div class="site-scroll">'; } ?>
		
	<header id="masthead" class="site-header" role="banner">
		
		<?php tha_header_top(); ?>
		
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'decode' ); ?></a>
		
		<?php if ( get_theme_mod( 'show_sidebar', true ) == true) : ?>
		<div id="sidebar_link" class="SidebarLink <?php echo get_theme_mod( 'sidebar_button_position', 'left' );?>">
			<svg width="100%" height="100%" viewBox="0 0 240 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<g class="SidebarMenuTrigger" fill-rule="evenodd">
					<path d="M0,160 L0,200 L240,200 L240,160 L0,160 Z M0,160"></path>
					<path d="M0,80 L0,120 L240,120 L240,80 L0,80 Z M0,80"></path>
					<path d="M0,0 L0,40 L240,40 L240,0 L0,0 Z M0,0"></path>
				</g>
			</svg>
		</div>
		<?php endif; ?>
		
		<div class="site-branding">
			
			<?php if ( get_theme_mod( 'header_image', '' )) echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '"><img class="site-logo" src="' . esc_url( get_theme_mod( 'header_image', '' ) ) . '"></a>'; ?>
			
			<?php if ( get_theme_mod( 'show_site_title', true ) == true ) : ?>			
				<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h1>
			<?php endif; ?>
			
			<?php if ( get_theme_mod( 'show_site_description', true ) == true ) : ?>
				<?php if ( get_theme_mod( 'html_description', '' ) !== '' ) : ?>
				<h2 class="site-description"><?php echo get_theme_mod( 'html_description' ); ?></h2>
				<?php elseif ( get_theme_mod( 'html_description', '' ) == '' ) : ?>
				<h2 class="site-description"><?php echo get_bloginfo ( 'description' );?></h2>
				<?php endif; ?>
			<?php endif; ?>
			
		</div>
		
		<?php if ( get_theme_mod( 'show_header_social_icons', false ) == true ) {
			get_template_part( 'social-links' );
		} ?>

		<?php if ( get_theme_mod( 'show_header_menu', true ) == true ) : ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'      => false,
				'menu_class'     => 'menu horizontal-menu header-menu',
				'menu_id'        => 'header-menu',
				'items_wrap'     => '<nav id="%1$s" class="%2$s" role="navigation"><ul>%3$s</ul></nav><!-- #header-menu -->'
			) ); ?>
		<?php endif; ?>
		
		<?php tha_header_bottom(); ?>
		
	</header><!-- #masthead -->
	
		<?php tha_header_after(); ?>
	
		<?php if ( function_exists( 'bcn_display' ) || function_exists( 'breadcrumb_trail' ) ) : ?>
		
			<nav class="site-breadcrumbs" role="navigation">
				
				<div class="site-breadcrumbs-container">
				
				<?php if( function_exists( 'bcn_display' ) ) {
					bcn_display();
				}
		
				if( function_exists( 'breadcrumb_trail' ) ) {
					breadcrumb_trail();
				} ?>
				
				</div>
				
			</nav><!-- .breadcrumbs -->
			
		<?php endif; ?>

	<div id="content" class="site-content">
		<?php tha_content_top(); ?>
