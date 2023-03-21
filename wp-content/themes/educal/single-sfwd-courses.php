<?php
/**
 * the template for displaying all posts.
 */
    get_header();  
   while ( have_posts() ) : the_post(); 
    global $post; $post_id = $post->ID;
    $course_id = $post_id;

    $cat_with_link = '';
    $taxonomy  = 'ld_course_category'; 
    $cat_with_link = get_the_term_list( $course_id, $taxonomy, ' ', '<span class="cat-separator">,</span> ');

    $course_intro_video = function_exists( 'get_field' ) ? get_field( 'course_intro_video' ) : NULL;
    $instructor_name = function_exists( 'get_field' ) ? get_field( 'instructor_name' ) : ' Eleanor Fant';
    $course_language = function_exists( 'get_field' ) ? get_field( 'course_language' ) : 'English';
    $course_duration = function_exists( 'get_field' ) ? get_field( 'course_duration' ) : '6 weeks';
    $course_assesment = function_exists( 'get_field' ) ? get_field( 'course_assesment' ) : 'Yes';
    $total_students = function_exists( 'get_field' ) ? get_field( 'total_students' ) : '20 students';

    $lesson = learndash_get_course_steps( get_the_ID(), array('sfwd-lessons') );
    $topic  = learndash_get_course_steps( get_the_ID(), array( 'sfwd-topic') );

    $quiz_args = new wp_Query(array(   
        'post_type' => 'sfwd-quiz',                         
        'meta_query' => array( 
            array( 'key' => 'course_id', 
            'value' => get_the_ID()
        ))                      
    ));                         
    $quiz = $quiz_args->post_count; 

    $educal_learndash_related = get_theme_mod( 'educal_learndash_related', true );

?>


    <section class="page__title-area pt-120 pb-90">
        <div class="container">
           <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8">
                 <div class="course__wrapper">
                    <div class="page__title-content mb-25">
                       <span class="page__title-pre"><?php echo educal_kses($cat_with_link); ?></span>
                       <h5 class="page__title-3"><?php the_title();?></h5>
                    </div>
                    <div class="course__meta-2 d-sm-flex mb-25">
                       <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                          <div class="course__teacher-thumb-3 mr-15">
                             <?php echo get_avatar(get_the_author_meta('ID'), 50) ?>
                            </div>
                          <div class="course__teacher-info-3">
                             <p><?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?></p>
                          </div>
                       </div>
                       <div class="course__update mr-80 mb-30">
                          <h5><?php echo esc_html__('Last Update:','educal'); ?></h5>
                          <p><?php echo get_the_modified_date( 'F j, Y' ); ?></p>
                       </div>
                    </div>
                    <?php if ( has_post_thumbnail() ):?>
                    <div class="course__img w-img mb-30">
                       <?php the_post_thumbnail();?>
                    </div>
                    <?php endif; ?>

                    
                    <div class="course__description">
                        <?php get_template_part( 'template-parts/blog/learndash/learndash', 'page' ); ?>
                    </div>
                    
                 </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                 <div class="course__sidebar pl-70 p-relative">
                    <div class="course__sidebar-widget-2 white-bg mb-20">
                       <div class="course__video">
                          <?php if ( has_post_thumbnail() ):?>
                          <div class="course__video-thumb w-img mb-25">
                             <?php the_post_thumbnail();?>

                             <?php if(!empty($course_intro_video)): ?>
                             <div class="course__video-play"> 
                                <a href="<?php echo esc_url($course_intro_video); ?>" data-fancybox="" class="play-btn"> <i class="fas fa-play"></i> </a>
                             </div>
                             <?php endif; ?>

                          </div>
                          <?php endif; ?>

                          <div class="course__video-content mb-35">
                             <ul>
                                <?php if( !empty( $instructor_name )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                         <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                         <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                      </svg>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Instructor :','educal'); ?></span> <?php echo esc_html($instructor_name); ?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>


                                <?php if( !empty( $lesson )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                         
                                         <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                                         <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                                      </svg>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Lectures :','educal'); ?> </span><?php echo count($lesson);?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>

                                <?php if( !empty( $course_duration )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                         <circle class="st0" cx="8" cy="8" r="6.7"/>
                                         <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
                                      </svg>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Duration :','educal'); ?> </span> <?php echo esc_html($course_duration); ?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>

                                <?php if( !empty( $total_students )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <svg>
                                         <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                                         <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                                      </svg>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Enrolled :','educal'); ?> </span> <?php echo esc_html($total_students); ?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>

                                <?php if( !empty( $course_language )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <svg>
                                         <circle class="st0" cx="8" cy="8" r="6.7"/>
                                         <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                                         <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                                      </svg>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Language :','educal'); ?>  </span><?php echo esc_html($course_language); ?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>

                                <?php if( !empty( $course_language )) : ?>
                                <li class="d-flex align-items-center">
                                   <div class="course__video-icon">
                                      <i class="fal fa-check-square"></i>
                                   </div>
                                   <div class="course__video-info">
                                      <h5><span><?php echo esc_html__('Assesment :','educal'); ?>  </span><?php echo esc_html($course_assesment); ?></h5>
                                   </div>
                                </li>
                                <?php endif; ?>


                             </ul>
                          </div>
                          <div class="course__payment">
                             <h3><?php echo esc_html__('Payment :','educal'); ?> </h3>
                             <a href="#">
                                <img src="<?php print get_template_directory_uri(); ?>/assets/img/course/payment/payment-1.png" alt="img">
                             </a>
                          </div>
                       </div>
                    </div>

                    <?php if( $educal_learndash_related && class_exists( 'SFWD_LMS' )) : ?>
                    <div class="course__sidebar-widget-2 white-bg mb-20">
                       <div class="course__sidebar-course">
                          <h3 class="course__sidebar-title"><?php echo esc_html__('Related courses','educal'); ?> </h3>
                          <ul>
                               <?php educal_Learndash_related_courses(); ?>
                          </ul>
                       </div>
                    </div>
                    <?php endif; ?>

                 </div>
              </div>
           </div>
        </div>
    </section>

<?php  endwhile; ?>

<?php get_footer(); ?>