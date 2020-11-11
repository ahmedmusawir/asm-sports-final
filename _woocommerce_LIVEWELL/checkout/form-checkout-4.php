<?php
/**
 * Checkout Form
 *
 * Template Name: Checkout Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

	<div class="row" id="customer_details">

			<div class="col-sm-12 col-md-7 col-lg-8">

				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			
				<!-- MOOSE BLOCK START -->

				<section id="livewell-membership-orderbump">
						<!--=========================================
					=            MOOSE CHECKBOX AREA            =
					==========================================-->
					<?php
					
			   		$product_id = 5680;


					$product_cart_id = WC()->cart->generate_cart_id( $product_id );
		   			$in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
		 
				   	if ( ! $in_cart ) {

					    WC()->cart->add_to_cart( $product_id, 1 );
						$_POST['checkbox'] = 'livewellgroup';

				   	} else {
				    	
				    	// WC()->cart->add_to_cart( 5680, 1 );
				   		
				   	}			   		
					
					if (isset($_POST['checkbox'])) {
						
						// echo $_POST['checkbox'];
						$yes = 'checked';

			 
			   			$product_cart_id = WC()->cart->generate_cart_id( $product_id );
			   			$in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
			 
					   if ( ! $in_cart ) {

					    	WC()->cart->add_to_cart( $product_id, 1 );

					      	// $notice = 'Product ID ' . $product_id . ' NOT is in the Cart!';
					      	// wc_print_notice( $notice, 'notice' );
					 
					   } else {

					      	// $notice = 'Product ID ' . $product_id . ' is in the Cart!';
					      	// wc_print_notice( $notice, 'notice' );

					   }


					} else {
						
						// echo "Nothing to say";

						$cartId = WC()->cart->generate_cart_id( $product_id );
						$cartItemKey = WC()->cart->find_product_in_cart( $cartId );
						WC()->cart->remove_cart_item( $cartItemKey );
					}

					?>   

					<form action="/checkout/" method="POST" target="_self">
						<input type="checkbox" name="checkbox" value="livewellgroup" onchange="this.form.submit()" <?php echo $yes; ?> >
						Save 15% & Get Daily Health Conscious Meal Plans With A LiveWellGroup Health Account.
					</form>     
					
					
					<!--====  End of MOOSE CHECKBOX AREA  ====-->
				</section>

				




				<section id="stripe-payment-box">
				
				
				<!-- MAIN PAYMENT METHOD BY MOOSE -->

				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					

				</section>

				<!-- MOOSE BLOCK ENDS -->

				<?php // do_action( 'woocommerce_checkout_shipping' ); ?>

			</div>



		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>




	<?php endif; ?>

		<div class="col-sm-12 col-md-5 col-lg-4">
		
			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
			<h3 id="order_review_heading"><?php esc_html_e( 'Order Summery', 'woocommerce' ); ?></h3>
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>



				<!-- MOOSE BLOCK START -->

				<section id="shop-w-confidence">

					<figure class="text-center img-holder">
						<img class="img-fluid" src="/wp-content/uploads/2019/06/norton-small.png">
					</figure>

					<div class="title-holder text-center">

						<img class="" src="/wp-content/uploads/2019/06/lock-e1559436469779.png" alt="">
						<h3 class="title">Shop With Confidence</h3>

					</div>

					<div class="list-holder col-md-10 col-sm-12 col-xs-12 mx-auto">
						<ul>
							<li>
								<i class="fa fa-check-circle" aria-hidden="true"></i>
								Secure Transactions
							</li>
							<li>
								<i class="fa fa-check-circle" aria-hidden="true"></i>
								No Hassle, Free Shipping
							</li>
							<li>
								<i class="fa fa-check-circle" aria-hidden="true"></i>
								CLIA-certified Laboratory
							</li>
							<li>
								<i class="fa fa-check-circle" aria-hidden="true"></i>
								Quick Results
							</li>
						</ul>
					</div>
				
				<!-- MAIN PAYMENT METHOD BY MOOSE -->

				</section>

				<!-- MOOSE BLOCK ENDS -->


			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

		</div> <!-- end col-sm-12 col-md-5 col-lg-4 -->

	</div> <!-- end row -->

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>



<?php 

/**
 *
 * MOOSE MAGIC
 *
 */

// $yes = $_POST['livewell_subscription'];

// echo $yes;

/**
 *
 * CHECK FOR PRODUCT 5680 IN CART
 *
 */
   // $product_id = 5680;
 
   // $product_cart_id = WC()->cart->generate_cart_id( $product_id );
   // $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
 
   // if ( ! $in_cart ) {

   //  	WC()->cart->add_to_cart( 5680, 1 );

   //  	$yes = '';
   //  	$yes = 'checked';

 
   //    	$notice = 'Product ID ' . $product_id . ' NOT is in the Cart!';
   //    	wc_print_notice( $notice, 'notice' );
 
   // } else {

   //    	$notice = 'Product ID ' . $product_id . ' is in the Cart!';
   //    	wc_print_notice( $notice, 'notice' );

   // }



    // if ( ! WC()->cart->is_empty() ) {
    //     return;
    // }






























