<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version     6.3.1
 */

if (!defined('ABSPATH')) {
    exit;
}

if ($related_products) : ?>

    <div class="related products pt-90 col-xl-12">

        <div class="section-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-45">
                        <h2><?php esc_html_e('Related Products', 'educal'); ?></h2>
                        <span>
                            <?php esc_html_e('Street art salvia irony wolf waistcoat actually lomo meh fap jean.', 'educal'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php woocommerce_product_loop_start(); ?>
        <?php
            $related_class = '';
            if (count($related_products) >= 4){
                $related_class = 'product-active';
            }
        ?>
    <div class="rows common-arrows fix">
        <div class="swiper product-active">
            <div class="swiper-wrapper">
                <?php foreach ($related_products as $related_product) : ?>
                <div class="swiper-slide">
                    <?php
                    $post_object = get_post($related_product->get_id());

                    setup_postdata($GLOBALS['post'] =& $post_object);

                    wc_get_template_part('content', 'product'); ?>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php woocommerce_product_loop_end(); ?>
    </div>

<?php endif;

wp_reset_postdata();