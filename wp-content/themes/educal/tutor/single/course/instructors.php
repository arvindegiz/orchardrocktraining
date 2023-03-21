<?php
/**
 * Template for displaying course instructors/ instructor
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */



do_action('tutor_course/single/enrolled/before/instructors');

$instructors = tutor_utils()->get_instructors_by_course();
if ($instructors){
	$count = is_array($instructors) ? count($instructors) : 0;
	
	?>
	<h4 class="tutor-segment-title tutor-segment-title-700"><?php $count>1 ? _e('About the instructors', 'educal') : _e('About the instructor', 'educal'); ?></h4>

	<div class="tutor-course-instructors-wrap tutor-single-course-segment" id="single-course-ratings">
		<?php
		foreach ($instructors as $instructor){
		    $profile_url = tutor_utils()->profile_url($instructor->ID);
		?>
			<div class="single-instructor-wrap">
				<div class="single-instructor-top">
                    <div class="tutor-instructor-left">
                        <div class="instructor-avatar">
                            <a href="<?php echo esc_url($profile_url); ?>">
                                <?php echo get_avatar(get_the_author_meta('ID'), 500) ?>
                            </a>
			                <?php
			                $instructor_rating = tutor_utils()->get_instructor_ratings($instructor->ID);
			                ?>
							<div class="ratings">
								<i class="fas fa-star"></i>
								<?php
								echo " <span class='rating-digits'>{$instructor_rating->rating_avg}</span> ";
								echo " <span class='rating-total-meta'>/ {$instructor_rating->rating_count}</span> ";
								?>
							</div>
                        </div>
                    </div>
                    <div class="tutor-instructor-right">
                        <div class="instructor-name">
                            <h3><a href="<?php echo esc_url($profile_url); ?>"><?php echo esc_html($instructor->display_name); ?></a> </h3>
                            <?php
                            if ( ! empty($instructor->tutor_profile_job_title)){
                                echo "<h4> / {$instructor->tutor_profile_job_title}</h4>";
                            }
                            ?>
                        </div>
						<div class="courses">
							<p>
								<?php echo tutor_utils()->get_course_count_by_instructor($instructor->ID); ?> <span class="tutor-text-mute"> <?php _e('Courses', 'educal'); ?></span>
							</p>
						</div>
						<div class="instructor-bio">
							<?php echo esc_html($instructor->tutor_profile_bio); ?>
						</div>
						<div class="educal-instructor-social mt-15">
							<?php 
								$tutor_user_social_icons = tutor_utils()->tutor_user_social_icons();
						        foreach ($tutor_user_social_icons as $key => $social_icon){
						            ?>
						            <a target="_blank" href="<?php echo get_user_meta($instructor->ID,$key,true); ?>"><i class="<?php echo esc_html($social_icon['icon_classes']); ?>"></i></a>
						            <?php
						        }
					        ?>	
						</div>
                    </div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	<?php
}

do_action('tutor_course/single/enrolled/after/instructors');
