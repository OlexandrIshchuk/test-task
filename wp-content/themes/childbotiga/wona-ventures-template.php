<?php
/*
Template Name: Wona Ventures Template
Template post type: post, page
*/



get_header();
?>

<main id="primary" class="site-main no-sidebar">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php botiga_schema( 'article' ); ?>>

			
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title" '. botiga_get_schema( 'headline' ) .'>', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
		
		<main class="entry-content" <?php botiga_schema( 'entry_content' ); ?>>

			<section class="row general-information-container">
				<div class="col-md-5 single-post-thumbnail">
					<?php
						botiga_single_post_thumbnail();
					?>
				</div>
				<div class="col-md-7 price-and-quantity-single-page">
						<h3>
							<?php 
								the_field('currency'); 
								the_field('price'); 
							?>
						</h3>
						<h4>
							<?php the_field('quantity'); ?>
							<?php the_field('unit'); ?>
						</h4>
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
			</section>

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

			?>
		</main><!-- .entry-content -->

		<footer class="entry-footer">
			<?php botiga_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article>
</main><!-- #post-<?php the_ID(); ?> -->
