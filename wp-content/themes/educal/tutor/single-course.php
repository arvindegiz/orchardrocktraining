<?php
/**
 * Template for displaying single course
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

 //tutor_course_lead_info(); 

// Prepare the nav items
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), get_the_ID() );

tutor_utils()->tutor_custom_header();
do_action('tutor_course/single/before/wrap');


?>
<div <?php tutor_post_class('tutor-full-width-course-top tutor-course-top-info tutor-page-wrap educal-course-details'); ?>>
    <div class="tutor-container">
       
        <div class="tutor-row s-course-main">
            <div class="tutor-col-8 tutor-col-md-100">
                <?php (isset($is_enrolled) && $is_enrolled) ? tutor_course_enrolled_lead_info() : tutor_course_lead_info(); ?>
                <?php do_action('tutor_course/single/before/inner-wrap'); ?>
                 <div class="tutor-course-details-tab tutor-mt-32">
                    <div class="tutor-is-sticky">
                        <?php tutor_load_template( 'single.course.enrolled.nav', array('course_nav_item' => $course_nav_item ) ); ?>
                    </div>
                    <div class="tutor-tab tutor-pt-24">
                    <?php foreach( $course_nav_item as $key => $subpage ) : 
                         
                    ?>

                        <div id="tutor-course-details-tab-<?php echo esc_attr($key); ?>" class="tutor-tab-item<?php echo esc_attr($key) == 'info' ? ' is-active' : ''; ?>">
                            <?php

                                do_action( 'tutor_course/single/tab/'.$key.'/before' );
                                
                                $method = $subpage['method'];
                                if ( is_string($method) ) {
                                    $method();
                                } else {
                                    $_object = $method[0];
                                    $_method = $method[1];
                                    $_object->$_method(get_the_ID());
                                }

                                do_action( 'tutor_course/single/tab/'.$key.'/after' );
                            ?>
                        </div>

                           
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php do_action('tutor_course/single/after/inner-wrap'); ?>
            </div>
            <!-- end of /.tutor-course-details-page-main-left -->
            <div class="tutor-col-4">
                <div class="tutor-single-course-sidebar educal-course-sidebar">
                    <?php do_action('tutor_course/single/before/sidebar'); ?>
                    <?php tutor_utils()->has_video_in_single() ? tutor_course_video() : get_tutor_course_thumbnail(); ?>
                    <?php tutor_load_template('single.course.course-entry-box'); ?>
                    <?php do_action('educal_course_enroll_info_list'); ?>
                    <?php tutor_course_requirements_html(); ?>
                    <?php tutor_course_tags_html(); ?>
                    <?php tutor_course_target_audience_html(); ?>
                    <?php do_action('tutor_course/single/after/sidebar'); ?>
                </div>
            </div>
            <!-- end of /.tutor-course-details-page-main-right -->
        <!-- end of /.tutor-course-details-page-main -->
        </div>
    </div>
</div>

<?php do_action('tutor_course/single/after/wrap'); ?>

<?php
tutor_utils()->tutor_custom_footer();

get_footer();