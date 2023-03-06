<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Botiga
 */

?>

<?php
	$single_post_image_placement 	= get_theme_mod( 'single_post_image_placement', 'below' );
	$single_post_meta_position		= get_theme_mod( 'single_post_meta_position', 'above-title' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php botiga_schema( 'article' ); ?>>

		<?php if ( 'above' === $single_post_image_placement ) { //if featured image above title
			botiga_single_post_thumbnail();
		} ?>

	<header class="entry-header">
		
		<?php do_action( 'botiga_before_title' ); ?>

		<?php if ( 'post' === get_post_type() && 'above-title' === $single_post_meta_position ) : ?>
			<?php botiga_single_post_meta( 'entry-meta-above' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title" '. botiga_get_schema( 'headline' ) .'>', '</h1>' );

		if ( 'post' === get_post_type() && 'below-title' === $single_post_meta_position ) : ?>
			<?php botiga_single_post_meta( 'entry-meta-below' ); ?>
		<?php endif; ?>
		
	</header><!-- .entry-header -->
	
	<div class="row entry-description">
		<div class="col-md-5">
			<?php if ( 'below' === $single_post_image_placement ) { //if featured image below title
				botiga_single_post_thumbnail();
			} ?>
		</div>
		<div class="col-md-7 price-and-quantity-single-page">
			<div>
				<h3>
					<?php 
						the_field('currency'); 
						the_field('price'); 
					?>
				</h3>
			</div>
			<div>
				<h4>
					<?php the_field('quantity'); ?>
					<?php the_field('unit'); ?>
				</h4>
			</div>
			<div class="add-to-cart-button-container">
				<button class="add-to-cart-button">Add to cart</button>
				<div class="quantity" data-qty-initialized="true">
					<a href="#" class="botiga-quantity-minus show" role="button">-</a>	
						<label class="screen-reader-text" for="quantity_6405f7e40e2b8"></label>
						<input type="number" id="quantity_6405f7e40e2b8" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
					<a href="#" class="botiga-quantity-plus show" role="button">+</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="entry-content" <?php botiga_schema( 'entry_content' ); ?>>

		<h5>Description</h5>

		<hr>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'botiga' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'botiga' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php botiga_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
