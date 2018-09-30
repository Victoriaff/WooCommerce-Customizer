<?php

$blocks = array(
    'block_shop' => 0,
    'block_single_product' => 0,
    'block_cart' => 0,
    'block_checkout' => 0,
);

/**
 * Customizer module
 **/
class AVA_WC_Customizer_Module extends AVA_WC_Module{
	
	public $settings = array(
		
		'admin_menu' => array(
			'parent_slug'   => 'ava-woocommerce',
			'slug'          => 'ava-wc-customizer',
			'page_title'    => 'Customizer',
			'menu_title'    => 'Customizer Options'
		)
	);
	
	/**
	 * Constructor
	 **/
	function __construct() {
		
		parent::__construct();
		
		return $this;
	}
	
	/**
	 * Module features
	 **/
	function features() {

	    /********************* Blocks: Shop *****************************/

        add_action('woocommerce_before_main_content', function() {
            block('shop', 'woocommerce_before_main_content');
        });
        add_action('woocommerce_after_main_content', function() {
            block('shop', 'woocommerce_after_main_content');
        });
        // ???
        add_action('woocommerce_before_shop_loop', function() {
            block('shop', 'woocommerce_before_shop_loop');
        });
        add_action('woocommerce_after_shop_loop', function() {
            block('shop', 'woocommerce_after_shop_loop');
        });
        add_action('woocommerce_before_shop_loop_item', function() {
            block('shop', 'woocommerce_before_shop_loop_item');
        });
        add_action('woocommerce_after_shop_loop_item', function() {
            block('shop', 'woocommerce_after_shop_loop_item');
        });
        add_action('woocommerce_before_shop_loop_item_title', function() {
            block('shop', 'woocommerce_before_shop_loop_item_title');
        });
        add_action('woocommerce_shop_loop_item_title', function() {
            block('shop', 'woocommerce_shop_loop_item_title');
        });
        add_action('woocommerce_after_shop_loop_item_title', function() {
            block('shop', 'woocommerce_after_shop_loop_item_title');
        });




	    /********************* Blocks: Single Product ******************/

        add_action('woocommerce_before_main_content', function() {
            block('single_product', 'woocommerce_before_main_content');
        });
        add_action('woocommerce_after_main_content', function() {
            block('single_product', 'woocommerce_after_main_content');
        });
        add_action('woocommerce_before_single_product', function() {
            block('single_product', 'woocommerce_before_single_product');
        });
        add_action('woocommerce_after_single_product', function() {
            block('single_product', 'woocommerce_after_single_product');
        });
        add_action('woocommerce_after_single_product_summary', function() {
            block('single_product', 'woocommerce_after_single_product_summary');
        });
        add_action('woocommerce_single_product_summary', function() {
            block('single_product', 'woocommerce_single_product_summary');
        });
        //add_action('woocommerce_product_meta_start', function() {
        //    block('single_product', 'woocommerce_product_meta_start');
        //});
        //add_action('woocommerce_product_meta_end', function() {
        //    block('single_product', 'woocommerce_product_meta_end');
        //});
        // Products Loop (widgets)
        add_action('woocommerce_before_shop_loop', function() {
            block('single_product', 'woocommerce_before_shop_loop');
        });
        add_action('woocommerce_after_shop_loop', function() {
            block('single_product', 'woocommerce_after_shop_loop');
        });
        add_action('woocommerce_before_shop_loop_item', function() {
            block('single_product', 'woocommerce_before_shop_loop_item');
        });
        add_action('woocommerce_after_shop_loop_item', function() {
            block('single_product', 'woocommerce_after_shop_loop_item');
        });
        add_action('woocommerce_before_shop_loop_item_title', function() {
            block('single_product', 'woocommerce_before_shop_loop_item_title');
        });
        add_action('woocommerce_shop_loop_item_title', function() {
            block('single_product', 'woocommerce_shop_loop_item_title');
        });
        add_action('woocommerce_after_shop_loop_item_title', function() {
            block('single_product', 'woocommerce_after_shop_loop_item_title');
        });
	    add_action('woocommerce_share', function() {
            block('single_product', 'woocommerce_share');
        });


        /********************* Blocks: Cart is empty **********/
        add_action('woocommerce_cart_is_empty', function() {
            block('cart', 'woocommerce_cart_is_empty');
        });


        /********************* Blocks: Cart ******************/
        add_action('woocommerce_before_cart', function() {
            block('cart', 'woocommerce_before_cart');
        });
        add_action('woocommerce_after_cart', function() {
            block('cart', 'woocommerce_after_cart');
        });
        add_action('woocommerce_before_cart_totals', function() {
            block('cart', 'woocommerce_before_cart_totals');
        });
        add_action('woocommerce_after_cart_totals', function() {
            block('cart', 'woocommerce_after_cart_totals');
        });
        add_action('woocommerce_proceed_to_checkout', function() {
            block('cart', 'woocommerce_proceed_to_checkout');
        });
        add_action('woocommerce_before_shipping_calculator', function() {
            block('cart', 'woocommerce_before_shipping_calculator');
        });
        add_action('woocommerce_after_shipping_calculator', function() {
            block('cart', 'woocommerce_after_shipping_calculator');
        });

        /********************* Blocks: Checkout ******************/
        //add_action('woocommerce_before_checkout_registration_form', function() {
        //    block('checkout', 'woocommerce_before_checkout_registration_form');
        //});
        //add_action('woocommerce_after_checkout_registration_form', function() {
        //    block('checkout', 'woocommerce_after_checkout_registration_form');
        //});

        add_action('woocommerce_before_checkout_form', function() {
            block('checkout', 'woocommerce_before_checkout_form');
        });
        add_action('woocommerce_after_checkout_form', function() {
            block('checkout', 'woocommerce_after_checkout_form');
        });
        add_action('woocommerce_before_checkout_billing_form', function() {
            block('checkout', 'woocommerce_before_checkout_billing_form');
        });
        add_action('woocommerce_after_checkout_billing_form', function() {
            block('checkout', 'woocommerce_after_checkout_billing_form');
        });
        add_action('woocommerce_checkout_shipping', function() {
            block('checkout', 'woocommerce_checkout_shipping');
        });
        add_action('woocommerce_before_order_notes', function() {
            block('checkout', 'woocommerce_before_order_notes');
        });
        add_action('woocommerce_checkout_before_order_review', function() {
            block('checkout', 'woocommerce_checkout_before_order_review');
        });
        add_action('woocommerce_checkout_order_review', function() {
            block('checkout', 'woocommerce_checkout_order_review');
        });


        /********************* Blocks: Thank You ******************/
        add_action('woocommerce_order_details_before_order_table', function() {
            block('thankyou', 'woocommerce_order_details_before_order_table');
        });
        add_action('woocommerce_order_details_after_order_table', function() {
            block('thankyou', 'woocommerce_order_details_after_order_table');
        });
        add_action('woocommerce_order_details_after_customer_details', function() {
            block('thankyou', 'woocommerce_order_details_after_customer_details');
        });
        add_action('woocommerce_thankyou', function() {
            block('thankyou', 'woocommerce_thankyou');
        });

        /********************* Blocks: My account -> General ******************/
        /*
        add_action('woocommerce_after_account_navigation', function() {
            block('myaccount', 'woocommerce_after_account_navigation');
        });
        add_action('woocommerce_account_content', function() {
            block('myaccount', 'woocommerce_account_content');
        });
        */

        /********************* Blocks: My account -> Dashboard ******************/
        add_action('woocommerce_account_dashboard', function() {
            block('myaccount', 'woocommerce_account_dashboard');
        });
        /********************* Blocks: My account -> Orders ******************/
        add_action('woocommerce_before_account_orders', function() {
            block('myaccount', 'woocommerce_before_account_orders');
        });
        add_action('woocommerce_after_account_orders', function() {
            block('myaccount', 'woocommerce_after_account_orders');
        });
        add_action('woocommerce_before_account_orders_pagination', function() {
            block('myaccount', 'woocommerce_before_account_orders_pagination');
        });
            /**** View Order ****/
            add_action('woocommerce_order_details_before_order_table', function() {
                block('myaccount', 'woocommerce_order_details_before_order_table');
            });
            add_action('woocommerce_order_details_after_order_table', function() {
                block('myaccount', 'woocommerce_order_details_after_order_table');
            });
            add_action('woocommerce_order_details_after_customer_details', function() {
                block('myaccount', 'woocommerce_order_details_after_customer_details');
            });

        /********************* Blocks: My account -> Downloads ******************/
        add_action('woocommerce_before_available_downloads', function() {
            block('myaccount', 'woocommerce_before_available_downloads');
        });
        add_action('woocommerce_after_available_downloads', function() {
            block('myaccount', 'woocommerce_after_available_downloads');
        });

        /********************* Blocks: My account -> Addresses ******************/
        add_action('woocommerce_before_edit_account_address_form', function() {
            block('myaccount', 'woocommerce_before_edit_account_address_form');
        });
        add_action('woocommerce_after_edit_account_address_form', function() {
            block('myaccount', 'woocommerce_after_edit_account_address_form');
        });
            /**** Edit billing address ****/
            add_action('woocommerce_before_edit_address_form_billing', function() {
                block('myaccount', 'woocommerce_before_edit_address_form_billing');
            });
            add_action('woocommerce_after_edit_address_form_billing', function() {
                block('myaccount', 'woocommerce_after_edit_address_form_billing');
            });
            /**** Edit shipping address ****/
            add_action('woocommerce_before_edit_address_form_shipping', function() {
                block('myaccount', 'woocommerce_before_edit_address_form_shipping');
            });
            add_action('woocommerce_after_edit_address_form_shipping', function() {
                block('myaccount', 'woocommerce_after_edit_address_form_shipping');
            });

        /********************* Blocks: My account -> Accout details ******************/
        add_action('woocommerce_before_edit_account_form', function() {
            block('myaccount', 'woocommerce_before_edit_account_form');
        });
        add_action('woocommerce_edit_account_form', function() {
            block('myaccount', 'woocommerce_edit_account_form');
        });
        add_action('woocommerce_after_edit_account_form', function() {
            block('myaccount', 'woocommerce_after_edit_account_form');
        });










        add_action('woocommerce', function() {
            block('myaccount', 'woocommerce');
        });
        add_action('woocommerce', function() {
            block('myaccount', 'woocommerce');
        });




        add_action('1wc_get_template', function($arg, $arg2=null, $arg3=null, $arg4=null) {
            echo $arg;
            return $arg;
        });

        add_action('1wc_get_template_part', function($arg, $arg2=null, $arg3=null, $arg4=null) {
            echo $arg;
            return $arg;
        });


		add_action('woocommerce_customer_meta_fields', function($arg, $arg2=null, $arg3=null, $arg4=null) {
            
            //dump( $arg );
			//if ($arg2) dump( $arg2 );
            //if ($arg3) dump( $arg3 );
            //if ($arg4) dump( $arg4 );
            
            _log($arg, 1);
            if ($arg2) _log($arg2, 2);
            if ($arg3) _log($arg3, 3);
            if ($arg4) _log($arg4, 4);

			return $arg;
		}, 1000, 4);


        require_once( AVA_WC_DIR . '/includes/address_fields.php');



	}
	/**
	 * Load JavaScript and CSS files
	 **/
	function load_assets() {

	}
}

function block($page, $hook)
{
    global $blocks;

    if ($page=='shop' && !is_shop()) return;
    if ($page=='single_product' && !is_product()) return;
    if ($page=='cart' && !is_cart()) return;
    if ($page=='checkout' && !is_checkout()) return;
    if ($page=='thankyou' && !is_order_received_page()) return;
    if ($page=='myaccount' && !is_account_page()) return;

    $blocks[$page]++;

    echo '<div style="display:inline-block; padding:4px 8px; font-size:12px; margin-bottom:3px; margin-right:3px; background-color:#0073aa; color:#fff; ">#'.$blocks[$page].' - '.$hook.'</div>';
}

