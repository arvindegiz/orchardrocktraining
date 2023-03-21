<?php

    defined( 'ABSPATH' ) || exit();

    $course          = LP_Global::course();
    $instructor      = $course->get_instructor();
    $instructor_link = $course->get_instructor_html();
    $instructor_id   = $course->get_id();

?>

<div class="col-lg-6 col-md-6"> 
    <div class="course__item white-bg mb-30 fix">
        <div class="course__thumb w-img p-relative fix">
           <a href="<?php the_permalink(); ?>">
              <img src="<?php echo  esc_url(get_the_post_thumbnail_url()); ?>" alt="img">
           </a>
           <div class="course__tag">
              <?php
                  echo wp_kses_post(educal_course_cageory_by_id(get_the_id()));
               ?>
           </div>
        </div>
        <div class="course__content">
           <div class="course__meta d-flex align-items-center justify-content-between">
              <div class="course__lesson">
                 <span><i class="far fa-book-alt"></i>
                    <?php   
                        $lessons = $course->get_curriculum_items( 'lp_lesson' )? count( $course->get_curriculum_items( 'lp_lesson' ) ) : 0; 
                        echo esc_html($lessons). esc_html__(' lessons','educal'); 
                    ?>
                 </span>
              </div>

               <?php 
               if ( class_exists( 'LP_Addon_Course_Review_Preload' ) ) :
               $total_rating = 5;
               $reviews = leanr_press_get_ratings_result( get_the_ID() ); 
               $taken_rating = !empty($reviews['rated']) ? $reviews['rated'] : 0;
               $blank_rating = $total_rating - $taken_rating;
               
               ?>
              
               <div class="course__rating">
                  <span>
                     <i class="icon_star"></i><?php echo esc_html($taken_rating); ?> (<?php echo !empty($reviews['total']) ? $reviews['total'] : 0; ?>)</span>
               </div>
               <?php endif; ?>
           </div>
           <h3 class="course__title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>

            <?php 
                $dir = learn_press_user_profile_picture_upload_dir();
                $user = get_user_by( 'id', $instructor->get_id());
                $pro_link = get_user_meta($user->ID,'_lp_profile_picture',true); 
                $base_url = isset($dir['baseurl'])?$dir['baseurl']:'';
                $profile_link =  $base_url.'/'.$pro_link;
            ?>
            <?php if($pro_link !='') : ?>
           <div class="course__teacher d-flex align-items-center">
              <div class="course__teacher-thumb mr-15">
                 <img src="<?php echo esc_url($profile_link); ?>" alt="<?php  echo  esc_attr($user->display_name); ?>">
              </div>
              <h6><?php  echo wp_kses_post($instructor_link) ?></h6>
           </div>
            <?php else : ?>
            <div class="course__teacher d-flex align-items-center">
              <div class="course__teacher-thumb mr-15">
                 <img src="<?php echo esc_url( get_avatar_url( $instructor->get_id() ) ); ?>" alt="<?php  echo  esc_attr($user->display_name); ?>">
              </div>
              <h6><?php  echo wp_kses_post($instructor_link) ?></h6>
           </div>
            <?php endif; ?>
        </div>
        <div class="course__more d-flex justify-content-between align-items-center">
           <div class="course__status">
              <?php if($course->is_free()): ?>
              <span> <?php echo esc_html__('Free','educal'); ?> </span>
              <?php else: ?>
                <span class="blue"><?php echo esc_html($course->get_price_html()); ?> </span>
                <?php if ( $course->get_origin_price() != $course->get_price() ) : ?>
                <span class="old-price"><?php echo esc_html($course->get_origin_price_html()); ?></span>
                <?php endif; ?>
              <?php endif; ?>
           </div>
           <div class="course__btn">
              <a href="<?php the_permalink(); ?>" class="link-btn">
                 <?php  echo esc_html__('Know Details','educal'); ?>
                 <i class="far fa-arrow-right"></i>
                 <i class="far fa-arrow-right"></i>
              </a>
           </div>
        </div>
    </div>
</div>

