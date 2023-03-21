<?php

/**
 * Template for displaying content of single course.
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 4.0.0
 */


defined('ABSPATH') || exit();

if (post_password_required()) {
	echo get_the_password_form();

	return;
}


$course = LP_Global::course();
$sections = $course->get_sections();
$instructor = $course->get_instructor();
$course_preview_video = function_exists( 'get_field' ) ? get_field( 'course_preview_video' ) : NULL;
$course_language = function_exists( 'get_field' ) ? get_field( 'course_language' ) : 'English';
$user_designation = get_the_author_meta( 'user_designation',$instructor->get_id());
// $educal_user_designation = get_user_meta($instructor->get_id(), 'educal_user_designation', true);
// $preview_video            = educal_meta_option(get_the_id(), 'course_preview_video');
$hide_students_list = get_post_meta($course->get_id(), '_lp_hide_students_list', true);
$questions = $course->get_faqs();

$category = '';
$category = get_the_terms(get_the_id(), 'course_category');

// $sell_price = $course->get_origin_price_html();
// $new_price = $course->get_price_html();

// $test = intval($sell_price);

// var_dump($user_designation);


?>

<div class="row">
  <div class="col-xxl-8 col-xl-8 col-lg-8">
     <div class="course__wrapper">
        <div class="page__title-content mb-25">
           <span class="page__title-pre">
				<?php
					if (is_array($category)) {
						foreach ($category as $kl => $type) {
							if ($kl >= 1) {
								echo ' , ';
							}
							echo esc_html($type->name);
						}
					}
				?>
           </span>
           <h5 class="page__title-3"><?php the_title(); ?></h5>
        </div>
        <div class="course__meta-2 d-sm-flex mb-25">
           <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
              <div class="course__teacher-thumb-3 mr-15">
                 <?php echo educal_kses($instructor->get_profile_picture()); ?>
              </div>
              <div class="course__teacher-info-3">
              	<?php if ( !empty($user_designation) ) : ?>
                 <h5><?php echo esc_html($user_designation); ?></h5>
             	<?php endif; ?>

                 <p><a href="#"><?php echo esc_html($instructor->get_display_name()); ?></a></p>
              </div>
           </div>
           <div class="course__update mr-80 mb-30">
              <h5><?php echo esc_html__('Last Update:','educal'); ?></h5>
              <p><?php the_time( get_option('date_format',$course->get_id()) ); ?></p>
           </div>
           <div class="course__rating-2 mb-30">
              <h5><?php echo esc_html__('Review:','educal'); ?></h5>


              <?php 
              if ( class_exists( 'LP_Addon_Course_Review_Preload' ) ) :
              $total_rating = 5;
              $reviews = leanr_press_get_ratings_result( get_the_ID() ); 
              $taken_rating = !empty($reviews['rated']) ? $reviews['rated'] : 0;
              $blank_rating = $total_rating - $taken_rating;
              ?>
              <div class="course__rating-inner d-flex align-items-center">
                 	<?php 
                    for ($i=0; $i < intval($taken_rating); $i++) { ?>
                        <i class="icon_star"></i>
                    <?php } ?>
                    <?php for ($j=0; $j < intval($blank_rating); $j++) { ?>
                        <i class="icon_star_alt"></i>
                    <?php } ?>
                 <p>(<?php echo esc_html($taken_rating); ?>)</p>
              </div>
              <?php endif; ?>
           </div>
        </div>
		<div class="course-sort-info mb-30">
			<p class="course-intro"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
		</div>
        <div class="course__img w-img mb-30">
           <?php echo wp_kses_post($course->get_image()); ?>
        </div>

        <div class="course__tab-2 mb-45">
            <div id="learn-press-course" class="course-summary learn-press">            
                <div class="course-summary">
                    <?php
                    /**
                     * @since 3.0.0
                     *
                     * @see learn_press_single_course_summary()
                     */
                    do_action( 'learn-press/single-course-summary' );
                    ?>
                </div>             
            </div>
        </div>
     </div>
  </div>
  <div class="col-xxl-4 col-xl-4 col-lg-4">
     <div class="course__sidebar pl-70 p-relative">
        <div class="course__shape">
           <img class="course-dot" src="<?php print get_template_directory_uri(); ?>/assets/img/course/course-dot.png" alt="image">
        </div>
        <div class="course__sidebar-widget-2 white-bg mb-20">
           <div class="course__video">
              <div class="course__video-thumb w-img mb-25">
                 <?php echo wp_kses_post($course->get_image()); ?>
                 <?php if ( !empty($course_preview_video) ) : ?>
                 <div class="course__video-play"> 
                    <a href="<?php echo esc_url($course_preview_video); ?>" data-fancybox="" class="play-btn"> <i class="fas fa-play"></i> </a>
                 </div>
                 <?php endif; ?>
              </div>
              <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                 <div class="course__video-price">
	                 <?php if($course->is_free()): ?>
	                 <h5> <?php echo esc_html__('Free','educal'); ?> </h5>
	                 <?php else: ?>
	                   <h5><?php echo esc_html($course->get_price_html()); ?> </h5>
	                   <?php if ( $course->get_origin_price() != $course->get_price() ) : ?>
	                   <h5 class="old-price"><?php echo esc_html($course->get_origin_price_html()); ?></h5>
	                   <?php endif; ?>
	                 <?php endif; ?>
                 </div>
                 <div class="course__video-discount">
                    <span> - 68% OFF</span>
                 </div>
              </div>
              <div class="course__video-content mb-35">
                 <ul>
                    <li class="d-flex align-items-center">
                       <div class="course__video-icon">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                          </svg>
                       </div>
                       <div class="course__video-info">
                          <h5><span><?php echo esc_html__('Instructor :','educal'); ?></span> <?php echo esc_html($instructor->get_display_name()); ?></h5>
                       </div>
                    </li>
                    <li class="d-flex align-items-center">
                       <div class="course__video-icon">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                             
                             <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                             <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                          </svg>
                       </div>
                       <div class="course__video-info">
                          <h5><span><?php echo esc_html__('Lectures :','educal'); ?> </span><?php echo esc_html($course->count_items()); ?></h5>
                       </div>
                    </li>
                    <li class="d-flex align-items-center">
                       <div class="course__video-icon">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                             <circle class="st0" cx="8" cy="8" r="6.7"/>
                             <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
                          </svg>
                       </div>
                       <div class="course__video-info">
                          <h5><span><?php echo esc_html__('Duration :','educal'); ?> </span><?php echo learn_press_get_post_translated_duration( get_the_id()); ?></h5>
                       </div>
                    </li>
                    <li class="d-flex align-items-center">
                       <div class="course__video-icon">
                          <svg>
                             <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                             <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                          </svg>
                       </div>
                       <div class="course__video-info">
                          <h5><span><?php echo esc_html__('Enrolled :','educal'); ?> </span>
                          	<?php $student = _n('%s  student', '%s students', $course->get_users_enrolled(), 'educal');
							echo sprintf($student, $course->get_users_enrolled());
							?></h5>
                       </div>
                    </li>

                    <?php if ( !empty($course_language) ) : ?>
                    <li class="d-flex align-items-center">
                       <div class="course__video-icon">
                          <svg>
                             <circle class="st0" cx="8" cy="8" r="6.7"/>
                             <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                             <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                          </svg>
                       </div>
                       <div class="course__video-info">
                          <h5><span><?php echo esc_html__('Language:','educal'); ?>  :</span><?php echo esc_html($course_language); ?></h5>
                       </div>
                    </li>
                	<?php endif; ?>
                 </ul>
              </div>
              <div class="course__payment mb-35">
                 <h3><?php echo esc_html__('Payment :','educal'); ?> </h3>
                 <a href="#">
                    <img src="<?php print get_template_directory_uri(); ?>/assets/img/course/payment/payment-1.png" alt="image">
                 </a>
              </div>
              <div class="course__enroll-btn">
				<div class="course-enroll">
					<?php do_action( 'learn-press/before-course-buttons' ); ?>
					<?php
					/**
					 * @see learn_press_course_purchase_button - 10
					 * @see learn_press_course_enroll_button - 10
					 * @see learn_press_course_retake_button - 10
					 */
					do_action( 'learn-press/course-buttons' );
					?>
					<?php do_action( 'learn-press/after-course-buttons' ); ?>
				</div>
              </div>
           </div>
        </div>
        <div class="course__sidebar-widget-2 white-bg mb-20">
           <?php get_template_part('learnpress/single/related-course'); ?>
        </div>
     </div>
  </div>
</div>