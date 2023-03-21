<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package educal
 */

get_header();

?>

<div class="blog-area pt-120 pb-90 cat">
    <div class="container container-box">
        <div class="rows">
			<div class="blog-post-items">
				<div class="blog__wrapper mr-35">
					<div class="row">	
					<?php if ( have_posts() ): ?>
						<?php
							/* Start the Loop */
							while ( have_posts() ):
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', 'blog-grid' );
							endwhile;
						?>

						<div class="row">
							<div class="basic-pagination basic-pagination-2 mb-40 text-center mt-40">
								<?php educal_pagination( '<i class="fas fa-angle-double-left"></i>', '<i class="fas fa-angle-double-right"></i>', '', [ 'class' => '' ] );?>
							</div>
						</div>
						<?php
							else:
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<?php
get_footer();
