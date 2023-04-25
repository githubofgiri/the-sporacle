<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();?>
    <section class="products section-area">
        <div class="container">
            <div class="product-in">
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <div class="left-area">
                            <?php echo do_shortcode('[woof]'); ?>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9">
                        <section class="latest-collections product-collection">
                            <div class="row">
                                <div class="col-md-12 product-description">
                                    <?php
                                    /**
                                     * Hook: woocommerce_archive_description.
                                     *
                                     * @hooked woocommerce_taxonomy_archive_description - 10
                                     * @hooked woocommerce_product_archive_description - 10
                                     */
                                    do_action( 'woocommerce_archive_description' );
                                    ?>
                                </div>
                                <?php if ( woocommerce_product_loop() ) {?>
                                    <div class="col-md-12 mb-3">
                                        <?php
                                        /**
                                         * Hook: woocommerce_before_shop_loop.
                                         *
                                         * @hooked woocommerce_output_all_notices - 10
                                         * @hooked woocommerce_result_count - 20
                                         * @hooked woocommerce_catalog_ordering - 30
                                         */
                                        do_action( 'woocommerce_before_shop_loop' );
                                        ?>
                                    </div>
                                    <?php
                                    if ( wc_get_loop_prop( 'total' ) ) {
                                        while ( have_posts() ) { the_post();
                                            /**
                                             * Hook: woocommerce_shop_loop.
                                             */
                                            do_action( 'woocommerce_shop_loop' );

                                            wc_get_template_part( 'content', 'product' );
                                        }
                                    } ?>
                                    <div class="col-md-12">
                                        <?php
                                        /**
                                         * Hook: woocommerce_after_shop_loop.
                                         *
                                         * @hooked woocommerce_pagination - 10
                                         */
                                        do_action( 'woocommerce_after_shop_loop' );
                                        ?>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <?php
                                        /**
                                         * Hook: woocommerce_no_products_found.
                                         *
                                         * @hooked wc_no_products_found - 10
                                         */
                                        do_action( 'woocommerce_no_products_found' );
                                        ?>
                                    </div>
                                <?php }?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();
