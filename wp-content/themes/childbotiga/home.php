<?php
/**
 * The home template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Botiga
 */

get_header();
?>
	
	<main id="primary" class="site-main <?php echo esc_attr( apply_filters( 'botiga_content_class', '' ) ); ?>" <?php botiga_schema( 'blog' ); ?>>

	<div class="description-container">
		<h4>םוספיא םרול ,לאזעזעל ,הז המ?</h4>
  		<p>וא טסקט ימד םג םימעפל ארקנה - ןיטולחל תועמשמ רסח טסקטל יוניכ אוה םוספיא םרול
		</p>  
		<p>
		ירתא ,תועדומ ,םיניזגמ ,םינולע לש - תויבוציע תוציקסב םקוממ תויהל דעוימו - שירבי'ג 
			<span id="more">וא טסקט ימד םג םימעפל ארקנה - ןיטולחל תועמשמ רסח טסקטל יוניכ אוה םוספיא םרול
ירתא ,תועדומ ,םיניזגמ ,םינולע לש - תויבוציע תוציקסב םקוממ תויהל דעוימו - שירבי'ג וא טסקט ימד םג םימעפל ארקנה - ןיטולחל תועמשמ רסח טסקטל יוניכ אוה םוספיא םרול
ירתא ,תועדומ ,םיניזגמ ,םינולע לש - תויבוציע תוציקסב םקוממ תויהל דעוימו - שירבי'ג</span>
		</p>
		<div class="read-more-button-container">
			<span class="read-more-button" onclick="readMore()" id="readMore">Read More</span>
			<span class="read-more-icon-down" onclick="readMore()" id="iconDown"></span>
			<span class="read-more-icon-up"onclick="readMore()" id="iconUp"></span>
		</div>
	</div>

		<?php
		if ( have_posts() ) :

			?>

			<div class="posts-archive <?php echo esc_attr( apply_filters( 'botiga_blog_layout_class', 'layout3' ) ); ?>" <?php botiga_masonry_data(); ?>>
				<div class="row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; ?>
				</div>
			</div>
		<?php
		the_posts_pagination( array(
			'mid_size'  => 1,
			'prev_text' => '&#x2190;',
			'next_text' => '&#x2192;',
		) );

		do_action( 'botiga_after_the_posts_pagination' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</main><!-- #main -->

<?php
do_action( 'botiga_do_sidebar' );
get_footer();
?>

<script>
function readMore() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("readMore");
  var iconDown = document.getElementById("iconDown");
  var iconUp = document.getElementById("iconUp");

  if (moreText.style.display === "inline") {
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
	iconUp.style.display = "none";
	iconDown.style.display = "block";
  } else {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
	iconDown.style.display = "none";
	iconUp.style.display = "block";
  }
}
</script>
