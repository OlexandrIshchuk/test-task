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

  <div class="slider">
  	<div class="slide active">
    	<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Slider_1.png" alt="Slide 1">
  	</div>
  	<div class="slide">
    	<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Slider_2.png" alt="Slide 2">
  	</div>
  	<div class="slide">
    	<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Slider_3.png" alt="Slide 3">
  	</div>
  	<div class="dots">
    	<span class="dot active"></span>
    	<span class="dot"></span>
    	<span class="dot"></span>
  	</div>
  </div>

  <nav class="hamburger-menu">
    <input type="checkbox" id="hamburger-toggle">
    <label for="hamburger-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <ul class="menu">
      <li><a href="<?php echo home_url(); ?>">Home</a></li>
      <li>
        <span class="icon-left-arrow" ></span>
        <a href="#">Products</a>
        <ul class="submenu">
          <li><a href="#">Product 1</a></li>
          <li><a href="#">Product 2</a></li>
          <li><a href="#">Product 3</a></li>
        </ul>
      </li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>


	<?php 
	/**
	 * Header
	 */
	// if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	// 	do_action( 'botiga_header' );
	// }
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

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/menu.js"></script>