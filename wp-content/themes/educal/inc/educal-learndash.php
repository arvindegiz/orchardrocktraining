<?php

function educal_ld_course_cageory_by_id($post_id = null, $course_category = '', $single = true)
{
   $terms = get_the_terms($post_id,  $course_category);
   $cat = '';
   $cat_with_link = '';

   if (is_array($terms)) :

      foreach ($terms as $tkey => $term) :

         $cat .= $term->slug . ' ';

         $cat_with_link .= sprintf("<a href='%s'>%s</a>", get_category_link($term->term_id), $term->name);

         if ($single) {
            break;
         }

         if ($tkey == 1) {
            break;
         }

      endforeach;

   endif;
   return $cat_with_link;
}

// learndash related course

if ( ! function_exists( 'educal_Learndash_related_courses' ) ) {
      function educal_Learndash_related_courses() { ?>
         <div class="educal-related-course ld-related-course row">
            <?php
            $tags = wp_get_post_terms( get_queried_object_id(), 'ld_course_tag', ['fields' => 'ids'] );
            $args = [
            'post__not_in'        => array( get_queried_object_id() ),
            'posts_per_page'      => 3,
            'post_type'        => 'sfwd-courses',
            'ignore_sticky_posts' => 1,
            'orderby'             => 'rand',
            'tax_query' => [
               [
                  'taxonomy' => 'ld_course_tag',
                  'terms'    => $tags
               ]
            ]
         ];

         $ld_query = new wp_query( $args );
         if( $ld_query->have_posts() ) {
            while( $ld_query->have_posts() ) {
               $ld_query->the_post();
                  get_template_part('template-parts/blog/learndash/learndash', 'related'); 
               ?>
         <?php } 
         wp_reset_postdata(); 
      } ?>
   </div>
   <?php
   }
}