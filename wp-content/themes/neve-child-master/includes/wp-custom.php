<?php

// add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt' );
	// add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );	



	/* Create Buy Now Button dynamically after Add To Cart button */
	function add_content_after_addtocart() {
		
		// get the current post/product ID
		$current_product_id = get_the_ID();

		// get the product based on the ID
		$product = wc_get_product( $current_product_id );

		// get the "Checkout Page" URL
		$checkout_url = WC()->cart->get_checkout_url();

		// run only on simple products
		if( $product->is_type( 'simple' ) ){
			echo '<a href="'.$checkout_url.'?add-to-cart='.$current_product_id.'" class="buy-now button">Buy Now</a>';
			//echo '<a href="'.$checkout_url.'" class="buy-now button">Buy Now</a>';
		}
	}
	add_action( 'woocommerce_after_add_to_cart_button', 'add_content_after_addtocart' );

?>