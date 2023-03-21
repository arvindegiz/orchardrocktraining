<?php
/**
 * the template for displaying all posts.
 */

get_header();
?>
<div id="main-content" class="main-container archive-course-container pt-120 pb-90" role="main">
   <div class="container">
      <div class="row">   
         <?php

         $educal_learndash_post_number = get_theme_mod( 'educal_learndash_post_number', 6 );
         $educal_learndash_order = get_theme_mod( 'educal_learndash_order', 'DESC' );

         // $paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
         $paged        = max(1, (int) filter_input(INPUT_GET, 'pageid'));
        
         $args = array( 
            'post_type' => 'sfwd-courses',
            'orderby' => 'modified',
            'order' => $educal_learndash_order,
            'posts_per_page' => $educal_learndash_post_number,
            'paged' => $paged 
         );

         $ld_query = new \WP_Query($args);

         if ($ld_query->have_posts() ) { 

            while ( $ld_query->have_posts() ) : $ld_query->the_post();
                get_template_part('template-parts/blog/learndash/learndash', 'content'); 
            endwhile;
            wp_reset_postdata(); 
         }
         ?>

         <div class="page_pagination text-center clearfix mt-40">
         <?php
            $current = max(1, (int) filter_input(INPUT_GET, 'pageid'));
            echo paginate_links(
               array(
                  'base'     => add_query_arg('pageid', '%#%'),
                  'format'   => '?pageid=%#%',
                  'total'    => $ld_query->max_num_pages,
                  'current'  => $current,
                  'show_all' => false,
                  'end_size' => 1,
                  'mid_size' => 2,
                  'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
                  'next_text' => '<i class="fa fa-long-arrow-right"></i>',
                  'type'     => 'plain',
                  'add_args' => false,
                  'add_fragment' => '',
               )
            );
            ?>
         </div>
      </div><!-- .row -->
   </div>
</div>
<?php get_footer(); ?>