<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<div <?php wc_product_class( 'col-md-6 my-product', $product ); ?>>
    <div class="product-area p-area">
        <div class="product">
            <div class="img-area">
                <?php
                /**
                 * Hook: woocommerce_before_shop_loop_item_title.
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                 */
                do_action( 'woocommerce_before_shop_loop_item_title' );
                ?>
            </div>
            <div class="txt-area">
                <ul class="left-txt">
                    <li>
                        <ul>
                            <li><a href="<?php the_permalink();?>"><h5><?=$product->get_title();?></h5></a></li>
                            <li><h6><?=$product->get_price_html();?></h6></li>
                        </ul>
                    </li>
                    <li class="icon">
                        <ul>
                            <li>
                                <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
                            </li>
                            <li>
                                <?php wc_get_template_part( 'loop/add-to', 'cart' );?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-bg p-bg"></div>
    </div>
</div>