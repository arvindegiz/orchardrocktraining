<?php

	/**
	 * Prevent loading this file directly
	 */
	defined( 'ABSPATH' ) || exit();

	$course_order_by = 'DESC';


	

   $paged    = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  
   $args = array( 
		'post_type' => LP_COURSE_CPT,
		'orderby' => 'modified',
		'order' => $course_order_by,
		'posts_per_page' => LP()->settings->get('learn_press_archive_course_limit') ,
		'paged' => $paged 
	);

	$args = apply_filters('educal_archive_post_args',$args);

	$query = new WP_Query($args);
	
	$total = $query->found_posts;
	if ( $total == 0 ) {
		$message = '<p class="message message-error">' . esc_html__( 'No courses found!', 'educal' ) . '</p>';
		$index   = esc_html__( 'There are no available courses!', 'educal' );
	} elseif ( $total == 1 ) {
		$index = esc_html__( 'Showing only one result', 'educal' );
	} else {
		$courses_per_page = absint( LP()->settings->get( 'archive_course_limit' ) );
		

		$from = 1 + ( $paged - 1 ) * $courses_per_page;
		$to   = ( $paged * $courses_per_page > $total ) ? $total : $paged * $courses_per_page;

		if ( $from == $to ) {
			$index = sprintf(
				esc_html__( 'Showing last course of %s results', 'educal' ),
				$total
			);
		} else {
			$index = sprintf(
				esc_html__( 'Showing %s-%s of %s results', 'educal' ),
				$from,
				$to,
				$total
			);
		}
	}
	?>

   <div class="course__tab-inner grey-bg-2 mb-50">
      <div class="row align-items-center">
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5 col-sm-8">
            <div class="course__tab-wrapper d-flex align-items-center">
               <div class="course__tab-btn">
                  <ul class="nav nav-tabs" id="courseTab" role="tablist">
                     <li class="nav-item" role="presentation">
                       <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                        <svg class="grid" viewBox="0 0 24 24">
                           <rect x="3" y="3" class="st0" width="7" height="7"/>
                           <rect x="14" y="3" class="st0" width="7" height="7"/>
                           <rect x="14" y="14" class="st0" width="7" height="7"/>
                           <rect x="3" y="14" class="st0" width="7" height="7"/>
                           </svg>
                       </button>
                     </li>
                     <li class="nav-item" role="presentation">
                       <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                        <svg class="list" viewBox="0 0 512 512">
                           <g id="Layer_2_1_">
                              <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                              <circle class="st0" cx="64" cy="100" r="31"/>
                              <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                              <circle class="st0" cx="64" cy="256" r="31"/>
                              <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                              <circle class="st0" cx="64" cy="412" r="31"/>
                           </g>
                           </svg>
                       </button>
                     </li>
                  </ul>
               </div>
               <div class="course__view">
                  <h4><?php echo esc_html($index); ?> </h4>
               </div>
            </div>
         </div>
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-12">
            <div class="course__sort d-flex justify-content-md-end">
               <div class="course__sort-inner">
               	  <?php get_template_part('learnpress/filter','category-dropdown'); ?>
               	  <?php get_template_part('learnpress/filter','order'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
	<div class="course-archive-list styel1">
         <div class="row">
            <div class="col-xxl-12">
               <div class="course__tab-conent">
                  <div class="tab-content" id="courseTabContent">
                     <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="row">
									<?php 
										if($query->have_posts()):
											while ($query->have_posts()) : $query->the_post();
												get_template_part( 'learnpress/content-course', 'archive' ); 
											endwhile;
											wp_reset_postdata();
										endif;
							    	?> 
                        </div>
                     </div>
                     <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row">
									<?php 
										if($query->have_posts()):
											while ($query->have_posts()) : $query->the_post();
												get_template_part( 'learnpress/content-course-list', 'archive' ); 
											endwhile;
											wp_reset_postdata();
										endif;
							    	?>
                        </div>
                     </div>
                   </div>
               </div>
            </div>
         </div>
			<?php
				$GLOBALS['wp_query']->max_num_pages = $query->max_num_pages; 
				get_template_part( 'template-parts/blog/paginations/pagination', 'style1' );
			?>
	</div>
	<?php

	