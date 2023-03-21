<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package educal
 */

get_header();
?>

<section class="error__area pt-200 pb-200">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
            <?php 
               $educal_404_bg = get_theme_mod('educal_404_bg',get_template_directory_uri() . '/assets/img/error/error.png');
               $educal_error_title = get_theme_mod('educal_error_title', __('Page not found', 'educal'));
               $educal_error_link_text = get_theme_mod('educal_error_link_text', __('Back To Home', 'educal'));
               $educal_error_desc = get_theme_mod('educal_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'educal'));
            ?>
            <div class="error__item text-center">
               <div class="error__thumb mb-45">
                  <img src="<?php echo esc_url($educal_404_bg); ?>" alt="<?php print esc_attr__('Error 404','educal'); ?>">
               </div>
               <div class="error__content">
                  <h3 class="error__title"><?php print esc_html($educal_error_title);?></h3>
                  <p><?php print esc_html($educal_error_desc);?></p>
                  <a href="<?php print esc_url(home_url('/'));?>" class="e-btn e-btn-3 e-btn-4"><?php print esc_html($educal_error_link_text);?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
