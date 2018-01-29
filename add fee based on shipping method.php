function fuel_surcharge_fee() {
    global $woocommerce;
	
    if($chosen_method !== "shipping_method_0_local_pickup14") {
  	 $fee = 1.15;
	 $woocommerce->cart->add_fee( 'Fuel Surcharge', $fee, true, 'standard' );
	}
  
}
add_action( 'woocommerce_cart_calculate_fees','fuel_surcharge_fee' );
