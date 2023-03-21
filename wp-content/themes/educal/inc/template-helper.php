<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package educal
 */

/** 
 *
 * educal header
 */

function educal_check_header() {
    $educal_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $educal_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );


    if ( $educal_header_style == 'header-style-1' && empty($_GET['s']) ) {
        educal_header_style_1();
    } 
    elseif ( $educal_header_style == 'header-style-2' && empty($_GET['s']) ) {
        educal_header_style_2();
    } 
    elseif ( $educal_header_style == 'header-style-3' && empty($_GET['s']) ) {
        educal_header_style_3();
    } 
    elseif ( $educal_header_style == 'header-style-4' && empty($_GET['s']) ) {
        educal_header_style_4();
    }
    elseif ( $educal_header_style == 'header-style-5' && empty($_GET['s']) ) {
        educal_header_style_5();
    } 
    elseif ( $educal_header_style == 'header-style-6' && empty($_GET['s']) ) {
        educal_header_style_6();
    } 
    else {

        /** default header style **/
        if ( $educal_default_header_style == 'header-style-2' ) {
            educal_header_style_2();
        } 
        elseif ( $educal_default_header_style == 'header-style-3' ) {
            educal_header_style_3();
        }
        elseif ( $educal_default_header_style == 'header-style-4' ) {
            educal_header_style_4();
        } 
        elseif ( $educal_default_header_style == 'header-style-5' ) {
            educal_header_style_5();
        }  
        elseif ( $educal_default_header_style == 'header-style-6' ) {
            educal_header_style_6();
        } 
        else {
            educal_header_style_1();
        }
    }

}
add_action( 'educal_header_style', 'educal_check_header', 10 );


// Header deafult
function educal_header_style_1() {

    $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Try For Free', 'educal' ) );
    $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );  

    $educal_course_cat_label = get_theme_mod( 'educal_course_cat_label', __( 'Category', 'educal' ) );
    $educal_course_cat_label_link = get_theme_mod( 'educal_course_cat_label_link' );

    $educal_header_right = get_theme_mod( 'educal_header_right', false );
    $educal_search = get_theme_mod( 'educal_search', false );
    $educal_menu_col = $educal_header_right ? 'col-xxl-5 col-xl-5 d-none d-xl-block' : 'col-xxl-9 col-xl-9 col-lg-9 d-none d-lg-block text-right';
    $educal_menu_right = $educal_header_right ? '' : 'text-end';
   $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );


    $btn_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

    ?>

    <!-- header area start -->
    <header>
         <div id="header-sticky" class="header__area header__transparent header__padding header__white style-1">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo edu-sticky-logo">
                           <?php educal_header_logo();?>
                           <?php educal_header_sticky_logo();?>
                        </div>

                        <?php if(!empty($educal_course_cat_label_link)) : ?>
                        <div class="header__category d-none d-lg-block">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="<?php print esc_url($educal_course_cat_label_link); ?>" class="cat-menu d-flex align-items-center">
                                       <div class="cat-dot-icon d-inline-block">
                                          <svg viewBox="0 0 276.2 276.2">
                                             <g>
                                                <g>
                                                   <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                   <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                   <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                   <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                   <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                   <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                   <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                   <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                   <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                </g>
                                             </g>
                                          </svg>
                                       </div>
                                       <span><?php print esc_html($educal_course_cat_label); ?></span>
                                    </a>
                                    <div class="cat-menu-box">
                                        <?php educal_category_menu();?>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <?php endif; ?>    
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-3">
                           <nav id="mobile-menu">
                                <?php educal_header_menu();?>
                           </nav>
                        </div>
                        <?php if ( !empty( $educal_header_right ) ): ?>
                        <div class="header__search p-relative ml-50 d-none d-md-block">
                           <?php if ( !empty( $educal_header_right ) ): ?>
                           <form action="<?php print esc_url( home_url( '/' ) );?>" method="get">
                              <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search...', 'educal' );?>">
                              <button type="submit"><i class="fad fa-search"></i></button>
                           </form>
                           
                           <?php if (EDUCAL_WOOCOMMERCE_ACTIVED): ?>
                           <div class="header__cart">
                              <a href="<?php echo wc_get_cart_url(); ?>" class="cart-toggle-btn">
                                 <div class="header__cart-icon">
                                    <svg viewBox="0 0 24 24">
                                       <circle class="st0" cx="9" cy="21" r="1"/>
                                       <circle class="st0" cx="20" cy="21" r="1"/>
                                       <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                                    </svg>
                                 </div>
                                 <span class="cart-item"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>
                              </a>
                           </div>
                           <?php endif;  ?>
                           <?php endif;  ?>
                        </div>
                        <?php if ( !empty( $educal_button_text ) ): ?>
                        <div class="header__btn ml-20 d-none d-sm-block">
                           <a href="<?php print esc_url($educal_button_link); ?>" class="e-btn"><?php print esc_html($educal_button_text); ?></a>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </header>
    <!-- header area end -->
    
   <!-- side info start -->
   <?php educal_side_info(); ?>
   <!-- side info end -->     
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}


/**
 * header style 2
 */
 function educal_header_style_2() {

    $educal_signup_button_text = get_theme_mod( 'educal_signup_button_text', __( 'Sign Up', 'educal' ) );
    $educal_signup_button_link = get_theme_mod( 'educal_signup_button_link', __( '#', 'educal' ) );

   $educal_course_cat_label = get_theme_mod( 'educal_course_cat_label', __( 'Category', 'educal' ) );
   $educal_course_cat_label_link = get_theme_mod( 'educal_course_cat_label_link' );

    $educal_header_right = get_theme_mod( 'educal_header_right', false );
    $educal_menu_col = $educal_header_right ? 'col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block' : 'col-xxl-9 col-xl-9 col-lg-9';
    $educal_menu_right = $educal_header_right ? '' : 'text-end';

   $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );

    $btn_link = get_theme_mod( 'educal_signup_button_link', __( '#', 'educal' ) );

    ?>

    <!-- header area start -->
    <header>
         <div id="header-sticky" class="header__area header__transparent header__padding-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                              <?php educal_header_logo(); ?>
                        </div>
                        <?php if(!empty($educal_course_cat_label_link)) : ?>
                        <div class="header__category d-none d-lg-block">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="<?php print esc_url($educal_course_cat_label_link); ?>" class="cat-menu d-flex align-items-center">
                                       <div class="cat-dot-icon d-inline-block">
                                          <svg viewBox="0 0 276.2 276.2">
                                             <g>
                                                <g>
                                                   <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                   <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                   <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                   <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                   <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                   <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                   <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                   <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                   <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                </g>
                                             </g>
                                          </svg>
                                       </div>
                                       <span><?php print esc_html($educal_course_cat_label); ?></span>
                                    </a>
                                    <div class="cat-menu-box">
                                        <?php educal_category_menu();?>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-2">
                           <nav id="mobile-menu">
                              <?php educal_header_menu();?>
                           </nav>
                        </div>
                        <?php if ( !empty( $educal_header_right ) ): ?>
                        <?php if ( !empty( $educal_signup_button_text ) ): ?>
                        <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                           <a href="<?php print esc_url($educal_signup_button_link); ?>" class="e-btn"><?php print esc_html($educal_signup_button_text); ?></a>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </header>
    <!-- header area end -->
    
   <!-- side info start -->
   <?php educal_side_info(); ?>
   <!-- side info end -->     
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}

/**
 * header style 3
 */
 function educal_header_style_3() {

    $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Sign Up', 'educal' ) );
    $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

    $educal_header_right = get_theme_mod( 'educal_header_right', false );
    $educal_menu_col = $educal_header_right ? 'col-xxl-7 col-xl-7 d-none d-xl-block' : 'col-xxl-10 col-xl-10 col-lg-10 d-none d-lg-block text-right';
    $educal_menu_right = $educal_header_right ? '' : 'text-end';

   $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );

    $btn_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

    ?>

    <!-- header area start -->
    <header>
        <div id="header-sticky" class="header__area header__transparent header__padding-2 t__header__sticky ddd">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6 col-6">
                     <div class="header__left d-flex">
                        <div class="logo edu-sticky-logo">
                           <?php educal_header_logo();?>
                           <?php educal_header_sticky_logo();?>
                        </div>
                     </div>
                  </div>
                  <div class="<?php print esc_attr($educal_menu_col); ?>">
                     <div class="main-menu main-menu-3">
                        <nav id="mobile-menu">
                            <?php educal_header_menu();?>
                        </nav>
                     </div>
                  </div>
                  <?php if ( !empty( $educal_header_right ) ): ?>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="header__search-2">
                           <svg class="search-toggle" viewBox="0 0 584.4 584.4">
                              <g>
                                 <g>
                                    <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>
                                    <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>
                                 </g>
                              </g>
                           </svg>
                        </div>

                        <?php if ( !empty( $educal_button_text ) ): ?>
                        <div class="header__btn header__btn-2 ml-30 d-none d-sm-block">
                           <a href="<?php print esc_url($educal_button_link); ?>" class="e-btn"><?php print esc_html($educal_button_text); ?></a>
                        </div>
                        <?php endif; ?>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn sidebar-toggle-btn-white ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                        </div>
                     </div>
                  </div>
                <?php endif; ?>
               </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    
   <!-- search area start -->
   <div class="header__search-3 white-bg transition-3">
      <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="header__search-3-inner text-center">
                     <div class="header__search-3-btn">
                        <a href="javascript:void(0);" class="header__search-3-btn-close"><i class="fal fa-times"></i></a>
                     </div>
                     <div class="header__search-3-header">
                        <h3>Search</h3>
                     </div>
                     <div class="header__search-3-categories">
                        <?php educal_header_search_menu();?>
                     </div>

                     <form action="<?php print esc_url( home_url( '/' ) );?>">
                        <div class="header__search-3-input p-relative">
                           <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search for products...', 'educal' );?>">
                           <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                     </form>

                  </div>
               </div>
            </div>
      </div>
   </div>
   <!-- search area end -->

   <!-- side info start -->
   <?php educal_side_info(); ?>
   <!-- side info end -->     
   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}

/**
 * header style 4
 */
 function educal_header_style_4() {

   $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Try For Free', 'educal' ) );
   $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   $educal_course_cat_label = get_theme_mod( 'educal_course_cat_label', __( 'Category', 'educal' ) );
   $educal_course_cat_label_link = get_theme_mod( 'educal_course_cat_label_link', __( '#', 'educal' ) );

   $educal_header_right = get_theme_mod( 'educal_header_right', false );
   $educal_search = get_theme_mod( 'educal_search', false );
   $educal_menu_col = $educal_header_right ? 'col-xxl-5 col-xl-5 d-none d-xl-block' : 'col-xxl-9 col-xl-9 col-lg-9 d-none d-lg-block text-right';
   $educal_menu_right = $educal_header_right ? '' : 'text-end';

   $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );
   $btn_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   ?>

   <!-- header area start -->
   <header>
      <div id="header-sticky" class="header__area header__transparent header__padding">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                  <div class="header__left d-flex">
                     <div class="logo">
                        <?php educal_header_logo();?>
                     </div>
                     <?php if(!empty($educal_course_cat_label_link)) : ?>
                     <div class="header__category d-none d-lg-block">
                        <nav>
                           <ul>
                              <li>
                                 <a href="<?php print esc_url($educal_course_cat_label_link); ?>" class="cat-menu d-flex align-items-center">
                                    <div class="cat-dot-icon d-inline-block">
                                       <svg viewBox="0 0 276.2 276.2">
                                          <g>
                                             <g>
                                                <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                    <span><?php print esc_html($educal_course_cat_label); ?></span>
                                 </a>
                                 <div class="cat-menu-box">
                                    <?php educal_category_menu();?>
                                 </div>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                  <div class="header__right d-flex justify-content-end align-items-center">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <?php educal_header_menu();?>
                        </nav>
                     </div>
                     <?php if ( !empty( $educal_header_right ) ): ?>
                     <div class="header__search p-relative ml-50 d-none d-md-block">
                        <?php if ( !empty( $educal_search ) ): ?>
                        <form action="<?php print esc_url( home_url( '/' ) );?>">
                           <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search for products...', 'educal' );?>">
                           <button type="submit"><i class="fad fa-search"></i></button>
                        </form>

                        <?php if (EDUCAL_WOOCOMMERCE_ACTIVED): ?>
                        <div class="header__cart">
                           <a href="<?php echo wc_get_cart_url(); ?>" class="cart-toggle-btn">
                              <div class="header__cart-icon">
                                 <svg viewBox="0 0 24 24">
                                    <circle class="st0" cx="9" cy="21" r="1"/>
                                    <circle class="st0" cx="20" cy="21" r="1"/>
                                    <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                                 </svg>
                              </div>
                              <span class="cart-item"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>
                           </a>
                        </div>
                        <?php endif;  ?>    
                        
                        <?php endif;  ?>
                     </div>
                     <?php if ( !empty( $educal_button_text ) ): ?>
                     <div class="header__btn ml-20 d-none d-sm-block">
                        <a href="<?php print esc_url($educal_button_link); ?>" class="e-btn"><?php print esc_html($educal_button_text); ?></a>
                     </div>
                     <?php endif; ?>
                     <?php endif; ?>
                     <div class="sidebar__menu d-xl-none">
                        <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- side info start -->
   <?php educal_side_info(); ?>
   <!-- side info end -->

   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}

/**
 * header style 5
 */
 function educal_header_style_5() {

   $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Sign Up', 'educal' ) );
   $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   $educal_signup_button_text = get_theme_mod( 'educal_signup_button_text', __( 'Sign Up', 'educal' ) );
   $educal_signup_button_link = get_theme_mod( 'educal_signup_button_link', __( '#', 'educal' ) );

   $educal_course_cat_label = get_theme_mod( 'educal_course_cat_label', __( 'Category', 'educal' ) );
   $educal_course_cat_label_link = get_theme_mod( 'educal_course_cat_label_link', __( '#', 'educal' ) );

   $educal_header_right = get_theme_mod( 'educal_header_right', false );
   $educal_menu_col = $educal_header_right ? 'col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block' : 'col-xxl-9 col-xl-9 col-lg-9';
   $educal_menu_right = $educal_header_right ? '' : 'text-end';

    $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );
   $btn_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   ?>

      <!-- header area start -->
      <header>
         <div id="header-sticky" class="header__area header__padding-2 header__shadow edu-header-style-5">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <?php educal_header_logo(); ?>
                        </div>
                        <?php if(!empty($educal_course_cat_label_link)) : ?>
                        <div class="header__category d-none d-lg-block">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="<?php print esc_url($educal_course_cat_label_link); ?>" class="cat-menu d-flex align-items-center">
                                       <div class="cat-dot-icon d-inline-block">
                                          <svg viewBox="0 0 276.2 276.2">
                                             <g>
                                                <g>
                                                   <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                   <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                   <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                   <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                   <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                   <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                   <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                   <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                   <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                </g>
                                             </g>
                                          </svg>
                                       </div>
                                       <span><?php print esc_html($educal_course_cat_label); ?></span>
                                    </a>
                                    <div class="cat-menu-box">
                                       <?php educal_category_menu();?>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-2">
                           <nav id="mobile-menu">
                              <?php educal_header_menu();?>
                           </nav>
                        </div>
                        <?php if ( !empty( $educal_signup_button_link ) ): ?>
                        <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                           <a href="<?php print esc_url($educal_signup_button_link); ?>" class="e-btn"><?php print esc_html($educal_signup_button_text); ?></a>
                        </div>
                        <?php endif; ?>

                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- sidebar area start -->
      <?php educal_side_info(); ?>
      <!-- sidebar area end -->

      <div class="body-overlay"></div>
      <!-- sidebar area end -->
<?php
}


/**
 * header style 6
 */
function educal_header_style_6() {

   $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Try For Free', 'educal' ) );
   $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   $educal_course_cat_label = get_theme_mod( 'educal_course_cat_label', __( 'Category', 'educal' ) );
   $educal_course_cat_label_link = get_theme_mod( 'educal_course_cat_label_link' );

   $educal_header_right = get_theme_mod( 'educal_header_right', false );
   $educal_menu_col = $educal_header_right ? 'col-xxl-5 col-xl-5 d-none d-xl-block' : 'col-xxl-9 col-xl-9 col-lg-9 d-none d-lg-block text-right';
   $educal_menu_right = $educal_header_right ? '' : 'text-end';

   $btn_text = get_theme_mod( 'educal_button_text', __( 'Get A Quote', 'educal' ) );
   $btn_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

   ?>

   <!-- header area start -->
   <header>
      <div id="header-sticky" class="header__area header__transparent header__padding header-default">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                  <div class="header__left d-flex">
                     <div class="logo">
                        <?php educal_header_logo();?>
                     </div>
                     <?php if(!empty($educal_course_cat_label_link)) : ?>
                     <div class="header__category d-none d-lg-block">
                        <nav>
                           <ul>
                              <li>
                                 <a href="<?php print esc_url($educal_course_cat_label_link); ?>" class="cat-menu d-flex align-items-center">
                                    <div class="cat-dot-icon d-inline-block">
                                       <svg viewBox="0 0 276.2 276.2">
                                          <g>
                                             <g>
                                                <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                    <span><?php print esc_html($educal_course_cat_label); ?></span>
                                 </a>
                                 <div class="cat-menu-box">
                                    <?php educal_category_menu();?>
                                 </div>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                  <div class="header__right d-flex justify-content-end align-items-center">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <?php educal_header_menu();?>
                        </nav>
                     </div>
                     <?php if ( !empty( $educal_header_right ) ): ?>
                     <div class="header__search p-relative ml-50 d-none d-md-block">
                        <form action="<?php print educal_header_search_url();?>">
                           <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search for products...', 'educal' );?>">
                           <button type="submit"><i class="fad fa-search"></i></button>
                        </form>

                        <?php if (EDUCAL_WOOCOMMERCE_ACTIVED): ?>
                        <div class="header__cart">
                           <a href="<?php echo wc_get_cart_url(); ?>" class="cart-toggle-btn">
                              <div class="header__cart-icon">
                                 <svg viewBox="0 0 24 24">
                                    <circle class="st0" cx="9" cy="21" r="1"/>
                                    <circle class="st0" cx="20" cy="21" r="1"/>
                                    <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                                 </svg>
                              </div>
                              <span class="cart-item"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>
                           </a>
                        </div>
                        <?php endif;  ?>    
                     </div>
                     <?php if ( !empty( $educal_button_text ) ): ?>
                     <div class="header__btn ml-20 d-none d-sm-block">
                        <a href="<?php print esc_url($educal_button_link); ?>" class="e-btn"><?php print esc_html($educal_button_text); ?></a>
                     </div>
                     <?php endif; ?>
                     <?php endif; ?>
                     <div class="sidebar__menu d-xl-none">
                        <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- side info start -->
   <?php educal_side_info(); ?>
   <!-- side info end -->

   <div class="body-overlay"></div>
   <!-- sidebar area end -->

<?php
}



// educal_side_info
function educal_side_info() {

    $educal_side_hide = get_theme_mod( 'educal_side_hide', false );
    $educal_side_logo = get_theme_mod( 'educal_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );
    $educal_login_text = get_theme_mod( 'educal_login_text', __( 'Login', 'educal' ) );
    $educal_login_link = get_theme_mod( 'educal_login_link', __( '#', 'educal' ) );
    $educal_button_text = get_theme_mod( 'educal_button_text', __( 'Get Started', 'educal' ) );
    $educal_button_link = get_theme_mod( 'educal_button_link', __( '#', 'educal' ) );

    ?>


   <!-- sidebar area start -->
   <div class="sidebar__area">
      <div class="sidebar__wrapper">
         <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
            </button>
         </div>
         <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="<?php print esc_url( home_url( '/' ) );?>" class="mobile_logo">
                    <img src="<?php print esc_url($educal_side_logo); ?>" alt="<?php print esc_attr__('Side Logo', 'educal'); ?>">
                </a>
            </div>

            <div class="mobile-menu fix"></div>

            <?php if ( !empty( $educal_side_hide ) ): ?>
            <div class="sidebar__search p-relative mt-40 ">
               <form action="<?php print esc_url( home_url( '/' ) );?>">
                  <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search...', 'educal' );?>">
                  <button type="submit"><i class="fad fa-search"></i></button>
               </form>
            </div>

            <?php if (EDUCAL_WOOCOMMERCE_ACTIVED): ?>
            <div class="sidebar__cart mt-30">
               <a href="<?php echo wc_get_cart_url(); ?>">
                  <div class="header__cart-icon">
                     <svg viewBox="0 0 24 24">
                        <circle class="st0" cx="9" cy="21" r="1"/>
                        <circle class="st0" cx="20" cy="21" r="1"/>
                        <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                     </svg>
                  </div>
                  <span class="cart-item"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>
               </a>
            </div>
            <?php endif;  ?>
            <?php endif;?>
         </div>
      </div>
   </div>
   <!-- sidebar area end -->  

<?php }

/**
 * [educal_header_lang description]
 * @return [type] [description]
 */
function educal_header_lang_defualt() {
    $educal_header_lang = get_theme_mod( 'educal_header_lang', false );
    if ( $educal_header_lang ): ?>

    <ul>
        <li><a href="#0" class="lang__btn"><?php print esc_html__( 'EN', 'educal' );?> <i class="ti-arrow-down"></i></a>
        <?php do_action( 'educal_language' );?>
        </li>
    </ul>

    <?php endif;?>
<?php
}

/**
 * [educal_language_list description]
 * @return [type] [description]
 */
function _educal_language( $mar ) {
    return $mar;
}
function educal_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'USA', 'educal' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'UK', 'educal' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'CA', 'educal' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'AU', 'educal' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _educal_language( $mar );
}
add_action( 'educal_language', 'educal_language_list' );

// favicon logo
function educal_favicon_logo_func() {
        $educal_favicon = get_template_directory_uri() . '/assets/img/favicon.png';
        $educal_favicon_url = get_theme_mod( 'favicon_url', $educal_favicon );
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $educal_favicon_url );?>">

    <?php
}
add_action( 'wp_head', 'educal_favicon_logo_func' );

// header logo
function educal_header_logo() {
    ?>
    <?php
        $educal_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $educal_logo = get_template_directory_uri() . '/assets/img/logo/logo.png';
        $educal_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';

        $educal_site_logo = get_theme_mod( 'logo', $educal_logo );
        $educal_secondary_logo = get_theme_mod( 'seconday_logo', $educal_logo_black );
    ?>

        <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                if ( !empty( $educal_logo_on ) ) {
                    ?>
                        <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
                            <img src="<?php print esc_url( $educal_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'educal' );?>" />
                        </a>
                    <?php
                } else {
                    ?>
                        <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
                            <img src="<?php print esc_url( $educal_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'educal' );?>" />
                        </a>
                    <?php
                }
            }
        ?>
    <?php
}

// header logo
function educal_header_sticky_logo() {?>
    <?php
        $educal_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $educal_secondary_logo = get_theme_mod( 'seconday_logo', $educal_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $educal_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'educal' );?>" />
      </a>
    <?php
}

function educal_mobile_logo() {
    // side info
    $educal_mobile_logo_hide = get_theme_mod( 'educal_mobile_logo_hide', false );

    $educal_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    ?>

    <?php if ( !empty( $educal_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $educal_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'educal' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }

/**
 * [educal_header_social_profiles description]
 * @return [type] [description]
 */
function educal_header_social_profiles() {
    $educal_topbar_fb_url = get_theme_mod( 'educal_topbar_fb_url', __( '#', 'educal' ) );
    $educal_topbar_twitter_url = get_theme_mod( 'educal_topbar_twitter_url', __( '#', 'educal' ) );
    $educal_topbar_instagram_url = get_theme_mod( 'educal_topbar_instagram_url', __( '#', 'educal' ) );
    $educal_topbar_linkedin_url = get_theme_mod( 'educal_topbar_linkedin_url', __( '#', 'educal' ) );
    $educal_topbar_youtube_url = get_theme_mod( 'educal_topbar_youtube_url', __( '#', 'educal' ) );
    ?>
        <ul>
        <?php if ( !empty( $educal_topbar_fb_url ) ): ?>
          <li><a href="<?php print esc_url( $educal_topbar_fb_url );?>"><span><i class="fab fa-facebook-f"></i></span></a></li>
        <?php endif;?>

        <?php if ( !empty( $educal_topbar_twitter_url ) ): ?>
            <li><a href="<?php print esc_url( $educal_topbar_twitter_url );?>"><span><i class="fab fa-twitter"></i></span></a></li>
        <?php endif;?>

        <?php if ( !empty( $educal_topbar_instagram_url ) ): ?>
            <li><a href="<?php print esc_url( $educal_topbar_instagram_url );?>"><span><i class="fab fa-instagram"></i></span></a></li>
        <?php endif;?>

        <?php if ( !empty( $educal_topbar_linkedin_url ) ): ?>
            <li><a href="<?php print esc_url( $educal_topbar_linkedin_url );?>"><span><i class="fab fa-linkedin"></i></span></a></li>
        <?php endif;?>

        <?php if ( !empty( $educal_topbar_youtube_url ) ): ?>
            <li><a href="<?php print esc_url( $educal_topbar_youtube_url );?>"><span><i class="fab fa-youtube"></i></span></a></li>
        <?php endif;?>
        </ul>

<?php
}

function educal_footer_social_profiles() {
    $educal_footer_fb_url = get_theme_mod( 'educal_footer_fb_url', __( '#', 'educal' ) );
    $educal_footer_twitter_url = get_theme_mod( 'educal_footer_twitter_url', __( '#', 'educal' ) );
    $educal_footer_instagram_url = get_theme_mod( 'educal_footer_instagram_url', __( '#', 'educal' ) );
    $educal_footer_linkedin_url = get_theme_mod( 'educal_footer_linkedin_url', __( '#', 'educal' ) );
    $educal_footer_youtube_url = get_theme_mod( 'educal_footer_youtube_url', __( '#', 'educal' ) );
    ?>

        <ul>
        <?php if ( !empty( $educal_footer_fb_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $educal_footer_fb_url );?>">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $educal_footer_twitter_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $educal_footer_twitter_url );?>">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $educal_footer_instagram_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $educal_footer_instagram_url );?>">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $educal_footer_linkedin_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $educal_footer_linkedin_url );?>">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif;?>

        <?php if ( !empty( $educal_footer_youtube_url ) ): ?>
            <li>
                <a href="<?php print esc_url( $educal_footer_youtube_url );?>">
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif;?>
        </ul>
<?php
}

/**
 * [educal_header_menu description]
 * @return [type] [description]
 */
function educal_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Educal_Navwalker_Class::fallback',
            'walker'         => new Educal_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [educal_header_menu description]
 * @return [type] [description]
 */
function educal_mobile_menu() {
    ?>
    <?php
        $educal_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ] );

    $educal_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $educal_menu );
        echo wp_kses_post( $educal_menu );
    ?>
    <?php
}

/**
 * [educal_search_menu description]
 * @return [type] [description]
 */
function educal_header_search_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Educal_Navwalker_Class::fallback',
            'walker'         => new Educal_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [educal_footer_menu description]
 * @return [type] [description]
 */
function educal_footer_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Educal_Navwalker_Class::fallback',
        'walker'         => new Educal_Navwalker_Class,
    ] );
}


/**
 * [educal_category_menu description]
 * @return [type] [description]
 */
function educal_category_menu() {
    wp_nav_menu( [
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'Educal_Navwalker_Class::fallback',
        'walker'         => new Educal_Navwalker_Class,
    ] );
}

/**
 *
 * educal footer
 */
add_action( 'educal_footer_style', 'educal_check_footer', 10 );

function educal_check_footer() {
    $educal_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $educal_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $educal_footer_style == 'footer-style-1' ) {
        educal_footer_style_1();
    } elseif ( $educal_footer_style == 'footer-style-2' ) {
        educal_footer_style_2();
    } elseif ( $educal_footer_style == 'footer-style-3' ) {
        educal_footer_style_3();
    } else {

        /** default footer style **/
        if ( $educal_default_footer_style == 'footer-style-2' ) {
            educal_footer_style_2();
        } elseif ( $educal_default_footer_style == 'footer-style-3' ) {
            educal_footer_style_3();
        } else {
            educal_footer_style_1();
        }

    }
}

/**
 * footer  style_defaut
 */
function educal_footer_style_1() {

    $footer_bg_img = get_theme_mod( 'educal_footer_bg' );
    $educal_footer_logo = get_theme_mod( 'educal_footer_logo' );
    $educal_footer_top_space = function_exists('get_field') ? get_field('educal_footer_top_space') : '0';
    $educal_copyright_center = $educal_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $educal_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg' ) : '';
    $educal_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'educal_footer_bg_color' );

    // bg image
    $bg_img = !empty( $educal_footer_bg_url_from_page['url'] ) ? $educal_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $educal_footer_bg_color_from_page ) ? $educal_footer_bg_color_from_page : $footer_bg_color;


    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[2] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[3] = 'col-lg-3 col-md-6 col-sm-6';
        $footer_class[4] = 'col-lg-3 col-md-6 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>

    <!-- footer area start --> 

   <footer>
      <div class="footer__area footer-bg" data-bg-color="<?php print esc_attr( $bg_color );?>" data-top-space="<?php print esc_attr($educal_footer_top_space); ?>px"  data-background="<?php print esc_url( $bg_img );?>">
      <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') OR is_active_sidebar('footer-3-5') ): ?>
         <div class="footer__top pt-90 pb-40">
            <div class="container">
               <div class="row">
                <?php
                    if ( $footer_columns > 3 ) {
                    print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class="col-xxl-3  col-xl-3  col-lg-3 col-md-4 col-sm-5">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>
               </div>
            </div>
         </div>
         <?php endif; ?>

         <div class="footer__bottom">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="footer__copyright text-center">
                        <p><?php print educal_copyright_text(); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
<?php
}

/**
 * footer  style 2
 */
function educal_footer_style_2() {
    $footer_bg_img = get_theme_mod( 'educal_footer_bg' );
    $educal_footer_logo = get_theme_mod( 'educal_footer_logo' );
    $educal_footer_top_space = function_exists('get_field') ? get_field('educal_footer_top_space') : '0';
    $educal_copyright_center = $educal_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $educal_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg' ) : '';
    $educal_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'educal_footer_bg_color' );
    $footer_top_space = get_theme_mod( 'educal_footer_top_space' );
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

    // bg image
    $bg_img = !empty( $educal_footer_bg_url_from_page['url'] ) ? $educal_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $educal_footer_bg_color_from_page ) ? $educal_footer_bg_color_from_page : $footer_bg_color;

   // footer space
    $footer_space = !empty( $educal_footer_top_space ) ? $educal_footer_top_space : $footer_top_space;

    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-2-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        break;
    case '5':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-70';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-90';
        $footer_class[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[5] = 'col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>

    <!-- footer area start -->
   <footer>
   <?php if ( is_active_sidebar( 'footer-2-1' ) OR is_active_sidebar( 'footer-2-2' ) OR is_active_sidebar( 'footer-2-3' ) OR is_active_sidebar( 'footer-2-4' ) ): ?>
      <div class="footer__area grey-bg-2" data-top-space="<?php print esc_attr($footer_top_space); ?>" data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">
      <?php if ( is_active_sidebar('footer-2-1') OR is_active_sidebar('footer-2-2') OR is_active_sidebar('footer-2-3') OR is_active_sidebar('footer-2-4') ): ?>
         <div class="footer__top pt-190 pb-40">
            <div class="container">
               <div class="row">
                <?php
                    if ( $footer_columns < 5 ) {
                    print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-2-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-0">';
                    dynamic_sidebar( 'footer-2-2' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">';
                    dynamic_sidebar( 'footer-2-3' );
                    print '</div>';

                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">';
                    dynamic_sidebar( 'footer-2-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-2-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-2-' . $num );
                            print '</div>';
                        }
                    }
                ?>
               </div>
            </div>
         </div>
         <?php endif; ?>

         <div class="footer__bottom footer__bottom-2">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="footer__copyright footer__copyright-2 text-center">
                        <p><?php print educal_copyright_text(); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
   </footer>
<?php
}


// footer style 03
function educal_footer_style_3() {

    $footer_bg_img = get_theme_mod( 'educal_footer_bg' );
    $educal_footer_logo = get_theme_mod( 'educal_footer_logo' );
    $educal_footer_top_space = function_exists('get_field') ? get_field('educal_footer_top_space') : '0';
    $educal_copyright_center = $educal_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $educal_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg' ) : '';
    $educal_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'educal_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'educal_footer_bg_color' );
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

    // bg image
    $bg_img = !empty( $educal_footer_bg_url_from_page['url'] ) ? $educal_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $educal_footer_bg_color_from_page ) ? $educal_footer_bg_color_from_page : $footer_bg_color;

    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-3-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-70';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-90';
        $footer_class[4] = 'col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        break;
    case '5':
        $footer_class[1] = 'col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-70';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-90';
        $footer_class[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6';
        $footer_class[5] = 'col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>

    <!-- footer area start --> 
    <footer class="footer__area grey-bg-3 p-relative fix" data-top-space="<?php print esc_attr($educal_footer_top_space); ?>px" data-bg-color="<?php print esc_attr( $bg_color );?> data-background="<?php print esc_url( $bg_img );?>>
        <?php if ( is_active_sidebar('footer-3-1') OR is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') OR is_active_sidebar('footer-3-5') ): ?>
         <div class="footer__shape">
            <img class="footer-circle-1 footer-2-circle-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer/home-1/circle-1.png" alt="<?php print esc_attr__('image','educal'); ?>">
            <img class="footer-circle-2 footer-2-circle-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/footer/home-1/circle-2.png" alt="<?php print esc_attr__('image','educal'); ?>">
         </div>
         
         <div class="footer__top pb-65 pt-120">
            <div class="container">
                <div class="row">
                <?php
                    if ( $footer_columns < 5 ) {
                    print '<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-3-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-70">';
                    dynamic_sidebar( 'footer-3-2' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 footer__pl-90">';
                    dynamic_sidebar( 'footer-3-3' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-3-4' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">';
                    dynamic_sidebar( 'footer-3-5' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-3-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-3-' . $num );
                            print '</div>';
                        }
                    }
                ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
         <div class="footer__bottom">
            <div class="container">
               <div class="footer__copyright">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="footer__copyright-wrapper footer__copyright-wrapper-2 text-center">
                           <p><?php print educal_copyright_text(); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->
<?php
}


// educal_copyright_text
function educal_copyright_text() {
   print get_theme_mod( 'educal_copyright', esc_html__( '© 2021 Educal, All Rights Reserved. Design By Theme Pure', 'educal' ) );
}

/**
 * [educal_breadcrumb_func description]
 * @return [type] [description]
 */
function educal_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod( 'breadcrumb_blog_title', __( 'Blog', 'educal' ) );
        $breadcrumb_class = 'home_front_page';
    } 
    elseif ( is_front_page() ) {
        $title = get_theme_mod( 'breadcrumb_blog_title', __( 'Blog', 'educal' ) );
        $breadcrumb_show = 0;  
    } 

    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    
    elseif ( is_home() && function_exists('tutor') ) {
         if ( get_option( 'page_for_posts' ) ) {

            $user_name = sanitize_text_field(get_query_var('tutor_student_username'));
            $get_user = tutor_utils()->get_user_by_login($user_name);
   
            if ( $get_user == NULL ) {
               $title = get_the_title( get_option( 'page_for_posts' ) );
               $id = get_option( 'page_for_posts' );
            }
            else {
               $title = ucwords($get_user->user_login);
            }
            
        }
        
    } 
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'educal' ) );
    } 
    elseif ( is_single() && 'bdevs-services' == get_post_type() ) {
        $title = get_the_title();

    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'educal' );
    } 
    elseif ( is_single() && 'bdevs-event' == get_post_type() ) {
      $title = esc_html__( 'Event Details', 'educal' );
    } 
    elseif ( is_single() && 'bdevs-cases' == get_post_type() ) {
        $title = get_the_title();
    } 
    elseif ( is_search() ) {

        $title = esc_html__( 'Search Results for : ', 'educal' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'educal' );
    } 
    elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'educal' ) );
    } 
    elseif ( is_archive() ) {

        $title = get_the_archive_title();
    } 
    // elseif( get_option('page_for_posts') == true ) {
    //   $title = get_the_title( get_option('page_for_posts', true) );
    // }
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
    if( !empty($_GET['s']) ) {
      $is_breadcrumb = null;
    }

      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        // get_theme_mod
        $bg_img_url = get_template_directory_uri() . '/assets/img/page-title/page-title.jpg';
        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );
        $educal_breadcrumb_shape_switch = get_theme_mod( 'educal_breadcrumb_shape_switch', true );
        $breadcrumb_info_switch = get_theme_mod( 'breadcrumb_info_switch', true );

        if ( $hide_bg_img && empty($_GET['s']) ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }?>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay page__title-wrapper d-flex align-items-center <?php print esc_attr( $breadcrumb_class );?>" data-background="<?php print esc_attr($bg_img);?>">
            <div class="container">
               <div class="row">
                  <?php if (!empty($breadcrumb_info_switch)) : ?>
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper">
                        <h3 class="page__title"><?php echo wp_kses_post( $title ); ?></h3>

                        <div class="breadcrumb-trail">
                        <?php 
                        if(function_exists('bcn_display')) {
                           bcn_display();
                        } ?>
                        </div>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </section>
         <!-- page title area end -->
        <?php
      }
}

add_action( 'educal_before_main_content', 'educal_breadcrumb_func' );

// educal_search_form
function educal_search_form() {
    ?>
     <div class="search-wrapper p-relative transition-3 d-none">
         <div class="search-form transition-3">
             <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                 <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'educal' );?>" >
                 <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
             </form>
             <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
         </div>
     </div>
   <?php
}

add_action( 'educal_before_main_content', 'educal_search_form' );


/**
 *
 * pagination
 */
if ( !function_exists( 'educal_pagination' ) ) {

    function _educal_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function educal_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _educal_pagi_callback( $pagi );
    }
}


// header top bg color
function educal_breadcrumb_bg_color() {
    $color_code = get_theme_mod( 'educal_breadcrumb_bg_color', '#222' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style( 'educal-breadcrumb-bg', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_breadcrumb_bg_color' );

// breadcrumb-spacing top
function educal_breadcrumb_spacing() {
    $padding_px = get_theme_mod( 'educal_breadcrumb_spacing', '160px' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style( 'educal-breadcrumb-top-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_breadcrumb_spacing' );

// breadcrumb-spacing bottom
function educal_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod( 'educal_breadcrumb_bottom_spacing', '160px' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style( 'educal-breadcrumb-bottom-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_breadcrumb_bottom_spacing' );

// scrollup
function educal_scrollup_switch() {
    $scrollup_switch = get_theme_mod( 'educal_scrollup_switch', false );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $scrollup_switch ) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style( 'educal-scrollup-switch', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_scrollup_switch' );

// theme color
function educal_custom_color() {
    $color_code = get_theme_mod( 'educal_color_option', '#2b4eff' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".main-menu ul li .submenu li a::before, .e-btn, .category__item:hover, .course__menu button .tag, .course__tag a, .events__item::after, .price__tab-btn .nav-tabs .nav-link.active, .e-btn.e-btn-border:hover, .blue-bg, .footer__subscribe-input button, .teacher__social ul li a:hover, .cta__form-inner .wpcf7-submit.e-btn.e-btn-6, .header__cart a .cart-item, .tutor-course-filter-nested-terms input:checked, .tutor-course-loop-header-meta .tutor-course-wishlist:hover, .tutor-pagination-wrap span.current, .tutor-pagination-wrap a:hover, .page__title-pre, .tutor-progress-bar .tutor-progress-filled, .tutor-progress-bar .tutor-progress-filled::after, .course__tab-2 .nav-tabs .nav-item .nav-link.active, .tutor-course-enrolled-review-wrap .write-course-review-link-btn, .tutor-lead-info-btn-group .tutor-course-complete-form-wrap button:hover, .tutor-course-tags a:hover, .basic-pagination ul li .page-numbers.current, .basic-pagination ul li a:hover, .sidebar__widget.widget_tag_cloud a:hover, blockquote cite::before, div.tagcloud a:hover, .sidebar__widget ul li a:hover::after, .header__area.sticky .main-menu-3 ul li .submenu li a::before, .teacher__follow-btn:hover, .product-action a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .cart .site-btn.brand-btn, .rev-btn button, .single_add_to_cart_button.tutor-button-primary, .tutor-button.tutor-button-primary, .tutor-btn.tutor-button-primary, .single_add_to_cart_button, .tutor-button, .tutor-btn, .tutor-course-filter-wrapper .tutor-clear-all-filter > a, .basic-pagination ul li.active a, .course__tab-btn .nav-tabs .nav-item .nav-link.active, .learnpress-page .course__enroll-btn .lp-button, #learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active::before, .page_pagination span.current, .page_pagination a:hover, .learndash-wrapper .ld-expand-button, .learndash-wrapper .ld-expand-button:hover, .learndash-wrapper .ld-expand-button.ld-button-alternate .ld-icon, .learndash-wrapper .ld-expand-button.ld-button-alternate:hover .ld-icon, .learndash-wrapper .ld-table-list .ld-table-list-header, .main-menu.main-menu-2 ul li .submenu li.current_page_item.active > a, .tutor-pagination-numbers.course-archive-page span.page-numbers.current, .tutor-ui-pagination ul.tutor-pagination-numbers a.page-numbers:hover, .tutor-pagination-numbers.course-archive-page a span:hover, .tutor-ui-pagination ul.tutor-pagination-numbers .page-numbers.prev:hover, .tutor-ui-pagination ul.tutor-pagination-numbers .page-numbers.next:hover, .tutor-wrap .tutor-default-tab .tab-header-item.is-active, .tutor-default-tab .tab-header-item::before, .tutor-wrap .tutor-pagination-wrapper-replacable .write-course-review-link-btn, .tutor-wrap .tutor-pagination-wrapper-replacable .write-course-review-link-btn:hover, .educal-course-sidebar .list-item-progress .progress-bar .progress-value, .educal-course-sidebar .tutor-course-sidebar-card-body .tutor-is-fullwidth, .educal-course-sidebar .tutor-course-sidebar-card-body .tutor-btn-lg.tutor-btn-full:hover, .educal-course-sidebar .tutor-course-sidebar-card-body .tutor-is-fullwidth:hover, .educal-course-sidebar .tutor-course-details-widget-tags li a:hover, .tutor-bg-primary, .tutor-dashboard .tutor-dashboard-left-menu .tutor-dashboard-permalinks li.active a, .list-item-progress .progress-bar .progress-value, .tutor-react-datepicker .react-datepicker__day--keyboard-selected, .tutor-btn.tutor-is-outline:not(.tutor-no-hover):hover, .tutor-dashboard .tutor-dashboard-content .tutor-dashboard-qna-vew-as.current-view-student .tutor-form-toggle-control::before, .tutor-dashboard .tutor-dashboard-content .tutor-dashboard-qna-vew-as.current-view-instructor .tutor-form-toggle-control::before, .tutor-btn:not(.tutor-is-outline), .tutor-btn:not(.tutor-is-outline):not(.tutor-no-hover):hover, .tutor-dashboard .tutor-dashboard-content #tutor_profile_cover_photo_editor #tutor_cover_area .tutor_cover_uploader, .tutor-dashboard .tutor-dashboard-content #tutor_profile_cover_photo_editor #tutor_cover_area .tutor_cover_uploader:hover, .tutor-dashboard .tutor-dashboard-left-menu .tutor-dashboard-permalinks li.active a:hover, .tutor-pagination-numbers span.page-numbers.current, .tutor-pagination .tutor-pagination-numbers a.page-numbers:hover, .tutor-pagination-numbers a span:hover, .tutor-wrap .tutor-course-details-tab .tutor-nav-item .tutor-nav-link.is-active, .tutor-avatar-text { background-color: " . $color_code . "}";

        $custom_css .= ".header__area.sticky .cat-menu:hover, .cat-menu:hover, .header__category ul li .cat-submenu li:hover > a, .main-menu ul li:hover > a, .main-menu ul li:hover > a::after, .brand__more .link-btn:hover, .course__menu button:hover, .course__menu button.active, .course__title a:hover, .course__teacher h6 a:hover, .course__btn .link-btn:hover, .course__status span, .events__title a:hover, .events__more .link-btn:hover, .section__sub-title, .why__btn .link-btn:hover, .blog__title a:hover, .grey-bg-2 div.footer__widget ul li a:hover, .course__title-2 a:hover, .tutor-course-filter-wrapper > div:first-child label:hover, .tutor-course-loop-header-meta .tutor-course-wishlist a, .tutor-custom-list-style li::before, .course__tag-2 i, .tutor-course-lesson h5 a, .tutor-course-lesson h5 a:hover, .educal-instructor-social a:hover, .educal-course-sidebar .course__video-icon i, .tutor-course-enrolled-wrap p i, .tutor-course-enrolled-wrap p span, .postbox__meta span i, .postbox__meta span a:hover, .postbox__title a:hover, .widget-post-title a:hover, .sidebar__widget ul li a:hover, blockquote::before, .blog-area .sidebar__widget ul li a:hover, .events__tag span, .events__tag a:hover, .pro-title h6:hover, .pro-desc-tab .nav-link.active, .rev-btn button:hover, .course__status span.blue, .course__sm-content h5 a:hover, .course__sm-price span, div.course-extra-box__content li::before, div#learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item .section-item-link:hover .item-name, .portfolio__menu button.active, .portfolio__menu button:hover, .portfolio__content h4 a:hover, .link-btn2:hover, .play-btn, div.course-tab-panel-faqs .course-faqs-box:hover .course-faqs-box__title, #learn-press-course-tabs input[name='course-faqs-box-ratio']:checked + .course-faqs-box .course-faqs-box__title, div#learn-press-course-curriculum.course-curriculum ul.curriculum-sections .section-content .course-item .section-item-link::before, div#learn-press-course-tabs input[name='learn-press-course-tab-radio']:nth-child(3):checked ~ .learn-press-nav-tabs .course-nav:nth-child(3) label, .course__video-icon i, .learndash-wrapper .ld-expand-button.ld-button-alternate, .learndash-wrapper .ld-expand-button.ld-button-alternate:hover, .main-menu.main-menu-2 .has-dropdown.active > a, .tutor-color-design-brand, .tutor-wrap .tab-body .tutor-accordion-item-header.is-active, .educal-course-sidebar .tutor-color-muted .tutor-icon-26, .educal-course-sidebar .tutor-course-sidebar-card-body .tutor-enrolled-info-date, .educal-course-sidebar .educal_single_course_wrapper li .tutor-icon-24, .tutor-btn.tutor-is-outline, .tutor-dashboard .tutor-dashboard-left-menu .tutor-dashboard-menu-item-icon, .tutor-dashboard .tutor-dashboard-content .tutor-dashboard-round-icon i, .tutor-dashboard .tutor-dashboard-inline-links ul li.active a, .tutor-dashboard .tutor-dashboard-inline-links ul li a:hover, .tutor-dashboard .tutor-dashboard-content .tutor-given-review-action > span:hover, .tutor-dashboard .tutor-dashboard-content .tutor-dashboard-qna-vew-as.current-view-student .tutor-form-toggle-label.tutor-form-toggle-checked, div.tutor-dashboard .tutor-dashboard-content .tutor-dashboard-qna-vew-as.current-view-instructor .tutor-form-toggle-label.tutor-form-toggle-checked, .tutor-announcement-big-icon, .tutor-course-filter .course__sidebar-widget li > label:hover, .tutor-course-filter-nested-terms label:hover, .educal-course-sidebar .tutor-sidebar-card .tutor-card-footer .tutor-color-black, .educal-course-sidebar .tutor-sidebar-card .tutor-color-success, .tutor-color-primary, .tutor-accordion-item-header::after, .tutor-nav-link.is-active, .tutor-nav-link:hover, .tutor-course-card .tutor-course-name a:hover { color: " . $color_code . "}";

        $custom_css .= ".cat-menu:hover svg .cat-dot, .category__icon svg .st1, .category__icon svg .st4 { fill: " . $color_code . "}";
        $custom_css .= ".category__item:hover, .price__tab-btn .nav-tabs .nav-link.active, .e-btn.e-btn-border:hover, .teacher__social ul li a:hover, .basic-pagination ul li a:hover, .sidebar-search-form input:focus, .post-input input:focus, .post-input textarea:focus, .teacher__follow-btn:hover { border-color: " . $color_code . "}";
        $custom_css .= ".course__menu button .tag::after { border-left-color: " . $color_code . "}";
        $custom_css .= ".course__video-icon svg .st0, .events__info-icon svg .st0, .contact__info-icon svg, .contact__icon svg .st0 { stroke: " . $color_code . "}";
        $custom_css .= ".tutor-pagination-wrap span.current, .tutor-pagination-wrap a:hover, .course__tab-2 .nav-tabs .nav-item:not(:last-child) .nav-link.active, .cart .site-btn.brand-btn, .rev-btn button, .product-review-box input:focus, .product-review-box textarea:focus, .single_add_to_cart_button.tutor-button-primary, .tutor-button.tutor-button-primary, .tutor-btn.tutor-button-primary, .tutor-option-field textarea:focus, .tutor-option-field input:not([type='submit']):focus, .tutor-form-group textarea:focus, .tutor-form-group input:not([type='submit']):focus, .single_add_to_cart_button, .tutor-button, .tutor-btn, .contact__form-input input:focus, .contact__form-input textarea:focus, .basic-pagination ul li.active a, .page_pagination span.current, .page_pagination a:hover, .tutor-pagination-numbers.course-archive-page span.page-numbers.current, .tutor-ui-pagination ul.tutor-pagination-numbers a.page-numbers:hover, .tutor-pagination-numbers.course-archive-page a span:hover, .tutor-wrap .tutor-pagination-wrapper-replacable .write-course-review-link-btn:hover, .tutor-wrap .tutor-pagination-wrapper-replacable .write-course-review-link-btn, .tutor-btn:not(.tutor-is-outline):not(.tutor-no-hover):hover, .tutor-btn:not(.tutor-is-outline), .course__sidebar-search input:focus, .tutor-btn.tutor-is-outline, .tutor-btn.tutor-is-outline:not(.tutor-no-hover):hover, .tutor-dashboard .tutor-dashboard-inline-links ul li.active a, .tutor-dashboard .tutor-dashboard-inline-links ul li a:hover, .tutor-react-datepicker__selects-range .react-datepicker__navigation:hover, .tutor-screen-frontend-dashboard .tutor-react-datepicker .react-datepicker__input-container input:focus ::before, .tutor-dashboard .tutor-dashboard-content .tutor-dashboard-qna-vew-as.tutor-form-toggle .tutor-form-toggle-control, .tutor-dropdown-select-options-container.is-active + .tutor-dropdown-select-selected, input.tutor-form-control:focus, textarea.tutor-form-control:focus, .tutor-pagination-numbers span.page-numbers.current, .tutor-pagination .tutor-pagination-numbers a.page-numbers:hover, .tutor-pagination-numbers a span:hover, .tutor-nav:not(.tutor-nav-pills):not(.tutor-nav-tabs) .tutor-nav-link.is-active { border-color: " . $color_code . "}";
        wp_add_inline_style( 'educal-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_custom_color' );


// theme color
function educal_custom_color_primary() {
    $color_code = get_theme_mod( 'educal_color_option_2', '#f2277e' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".course__tag a:nth-child(2), .price__offer span, .cta__content span, .page__title-pre:hover, .banner__item span, .events__join-btn a { background-color: " . $color_code . "}";

        $custom_css .= ".row .col-xxl-4:nth-child(3) .blog__tag a, .events__info-discount span { color: " . $color_code . "}";

        $custom_css .= ".price__offer span::after { border-left-color: " . $color_code . "}";
        wp_add_inline_style( 'educal-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_custom_color_primary' );
// theme color
function educal_custom_color_scrollup() {
    $color_code = get_theme_mod( 'educal_color_scrollup', '#2b4eff' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".progress-wrap::after { color: " . $color_code . "}";
        $custom_css .= ".progress-wrap svg.progress-circle path { stroke: " . $color_code . "}";
        wp_add_inline_style( 'educal-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_custom_color_scrollup' );

// theme color
function educal_custom_color_secondary() {
    $color_code = get_theme_mod( 'educal_color_option_3', '#30a820' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".price__features ul li:hover i { background-color: " . $color_code . "}";

        $custom_css .= ".price__features ul li:hover, .price__features ul li i, .about__list ul li i, .price__features ul li:hover, .price__features ul li i, .about__list ul li i, .events__allow ul li i { color: " . $color_code . "}";

        $custom_css .= "asdf { border-color: " . $color_code . "}";
        wp_add_inline_style( 'educal-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_custom_color_secondary' );

// theme color
function educal_custom_color_secondary_2() {
    $color_code = get_theme_mod( 'educal_color_option_3_2', '#ffb352' );
    wp_enqueue_style( 'educal-custom', EDUCAL_THEME_CSS_DIR . 'educal-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".asf { background-color: " . $color_code . "}";

        $custom_css .= ".slider__content > span { color: " . $color_code . "}";

        $custom_css .= "asdf { border-color: " . $color_code . "}";
        wp_add_inline_style( 'educal-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'educal_custom_color_secondary_2' );


// educal_kses_intermediate
function educal_kses_intermediate( $string = '' ) {
    return wp_kses( $string, educal_get_allowed_html_tags( 'intermediate' ) );
}

function educal_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function educal_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}