<?php
/**
 * Checkout Form
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

			<div class="col-md-6 col-lg-6">

				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			
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
					

				</section>

				<!-- MOOSE BLOCK ENDS -->

				<?php // do_action( 'woocommerce_checkout_shipping' ); ?>

			</div>



		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>



	<?php endif; ?>

		<div class="col-md-6 col-lg-6">
		
			<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
			
			<h3 id="order_review_heading"><?php esc_html_e( 'Order Summery', 'woocommerce' ); ?></h3>
			
			<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>

			<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

		</div>

	</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

