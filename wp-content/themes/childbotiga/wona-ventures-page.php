<?php
/*
Template Name: Wona Ventures Page
*/


get_header();
?>



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


<content id="gridcontainer" class="row">

	
	<?php

		global $query_string; //Need this to make pagination work
		
		/*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts*/
		query_posts($query_string . '&caller_get_posts=1&posts_per_page=12');
		
		if(have_posts()) :  while(have_posts()) :  the_post();
	?>

	<div class="col-md-6 col-lg-4 col-sm-12 griditem">
		<div class="postimage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
		</div>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<div class="price-and-quantity-row">
			<div class="price-and-currency">
				<h5>
					<?php 
						the_field('currency');
						the_field('price'); 
					?>
				</h5>
			</div>
			<span class="quantity-and-unit">
				<?php
					the_field('quantity');
					the_field('unit');
				?>
			</span>
		</div>

		<button class="quick-review-button" onclick="location.href='<?php the_permalink(); ?>'" type="button">סקירה מהירה</button>



	</div>


	<?php
	endwhile;
	//Post Navigation code goes here
	endif;
	?>

</content>

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
