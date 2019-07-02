<?php
/**
 * Plugin Name: Show SKU in WooCommerce Shop
 * Plugin URI:  https://github.com/ztickm/show-sku-in-woo
 * Description: Basic WooCommerce Plugin that shows products&#39; SKUs under their names in the shop
 * Version:     0.0.1
 * Author:      Salim Mahboubi
 * Author URI:  https://github.com/ztickm
 * License:     GPL V3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */


    
    add_action( 'woocommerce_shop_loop_item_title' , 'custom_add_sku_to_shop_page',15);
    
    function custom_add_sku_to_shop_page(){
        global $product;
        $sku = $product->get_sku();
                    
        if($sku){
            echo '<span class="sku-in-woo-sku">' . $sku . '</span>';
        }
        else {
            echo ' ';
        }
    }
    
