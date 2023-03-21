<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package educal
 */

    $educal_video_url = function_exists( 'get_field' ) ? get_field( 'fromate_style' ) : NULL;
    $categories = get_the_terms( $post->ID, 'category' );

    $educal_blog_date = get_theme_mod( 'educal_blog_date', true );
    $educal_blog_comments = get_theme_mod( 'educal_blog_comments', true );
    $educal_blog_author = get_theme_mod( 'educal_blog_author', true );
    $educal_blog_cat = get_theme_mod( 'educal_blog_cat', false );
    
    if ( is_single() ): 
?>
    <article id="post-<?php the_ID();?>" <?php post_class( 'blog__item white-bg mb-50 transition-3 format-video' );?>>
        <?php if ( has_post_thumbnail() ): ?>
        <div class="postbox__thumb postbox__video">
            <a href="blog-details.html"><?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?></a>
            <?php if(!empty($educal_video_url)) : ?>
            <div class="postbox__play">
                <a href="<?php print esc_url( $educal_video_url );?>" class="blog-play-btn" data-fancybox=""><i class="arrow_triangle-right"></i></a>
            </div>
            <?php endif; ?>
        </div>
        <?php endif;?>

        <div class="postbox__content">
            <div class="postbox__meta mb-20">
                <?php if ( !empty($educal_blog_author) ): ?>
                <span><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i> <?php print get_the_author();?></a></span>
                <?php endif;?>

                <?php if ( !empty($educal_blog_cat) ): ?>
                <?php if ( !empty( $categories[0]->name ) ): ?>  
                <span><i class="icon_tag_alt"></i> <a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a> </span>
                <?php endif;?>
                <?php endif;?>

                <?php if ( !empty($educal_blog_date) ): ?>
                <span><i class="fal fa-calendar-check"></i> <?php the_time( get_option('date_format') ); ?> </span>
                <?php endif;?>

                <?php if ( !empty($educal_blog_comments) ): ?>
                <span><a href="<?php comments_link();?>"><i class="icon_chat_alt"></i> <?php comments_number();?></a></span>
                <?php endif;?>
            </div>
             <h3 class="postbox__title">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h3>
            <div class="post-text mb-20">
               <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'educal' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
            <?php print educal_get_tag();?>
        </div>
    </article>

<?php
else: ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'blog__item white-bg mb-50 transition-3 fix format-video' );?> data-wow-delay=".3s">
        <?php if ( has_post_thumbnail() ): ?>
        <div class="postbox__thumb postbox__video">
            <a href="blog-details.html"><?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?></a>
            <?php if(!empty($educal_video_url)) : ?>
            <div class="postbox__play">
                <a href="<?php print esc_url( $educal_video_url );?>" class="blog-play-btn" data-fancybox=""><i class="arrow_triangle-right"></i></a>
            </div>
            <?php endif; ?>
        </div>
        <?php endif;?>
        <div class="postbox__content">
            <div class="postbox__meta mb-20">
                <?php if ( !empty($educal_blog_author) ): ?>
                <span><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i> <?php print get_the_author();?></a></span>
                <?php endif;?>

                <?php if ( !empty($educal_blog_cat) ): ?>
                <?php if ( !empty( $categories[0]->name ) ): ?>  
                <span><i class="icon_tag_alt"></i> <a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a> </span>
                <?php endif;?>
                <?php endif;?>

                <?php if ( !empty($educal_blog_date) ): ?>
                <span><i class="fal fa-calendar-check"></i> <?php the_time( get_option('date_format') ); ?> </span>
                <?php endif;?>

                <?php if ( !empty($educal_blog_comments) ): ?>
                <span><a href="<?php comments_link();?>"><i class="icon_chat_alt"></i> <?php comments_number();?></a></span>
                <?php endif;?>
            </div>
            <h3 class="postbox__title">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h3>
            <div class="post-text mb-20">
                <?php the_excerpt();?>
            </div>
            <!-- blog btn -->

            <?php
                $educal_blog_btn = get_theme_mod( 'educal_blog_btn', 'Read More' );

                $educal_blog_btn_switch = get_theme_mod( 'educal_blog_btn_switch', true );
            ?>

            <?php if ( !empty( $educal_blog_btn_switch ) ): ?>
            <div class="read-more-btn mt-30">
                <a href="<?php the_permalink();?>" class="e-btn"><?php print esc_html( $educal_blog_btn );?></a>
            </div>
            <?php endif;?>
        </div>
    </article>
<?php
endif;?>


