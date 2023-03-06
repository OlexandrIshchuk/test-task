<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botiga
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

<body <?php body_class(); ?> <?php botiga_schema( 'html' ); ?>>
<?php wp_body_open(); ?>

<?php do_action( 'botiga_before_site' ); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'botiga' ); ?></a>

	<header class="menu-header">
    <div class="site-navigation">
      <input type="checkbox" id="menu-toggle" class="menu-toggle" />
      <label for="menu-toggle" class="menu-toggle-label">
        <span class="menu-toggle-icon">
          <span class="menu-toggle-line"></span>
          <span class="menu-toggle-line"></span>
          <span class="menu-toggle-line"></span>
        </span>
      </label>
      <div class="menu-container">
        <ul>
          <li><a href="http://localhost/test-task/">Home</a></li>
          <li><a href="http://localhost/test-task/shop/">Shop</a></li>
          <li class="menu-attachment">
            <a href="#">Services</a>
            <div class="menu-attachment-dropdown">
              <ul>
                <li><a href="#">Service 1</a></li>
                <li><a href="#">Service 2</a></li>
                <li><a href="#">Service 3</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </header>

	<?php 
	/**
	 * Header
	 */
	// if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	// 	do_action( 'botiga_header' );
	// }
	echo do_shortcode('[smartslider3 slider="2"]');
	/**
	 * Page Header
	 */
	do_action( 'botiga_before_page_header' );
	do_action( 'botiga_page_header' );
	do_action( 'botiga_after_page_header' );
	
	/**
	 * Main Wrapper
	 */
	do_action( 'botiga_before_main_wrapper' );
	do_action( 'botiga_main_wrapper_start' ); ?>			