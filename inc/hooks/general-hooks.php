<?php
/**
 * Page Start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_page_wrap_start' ) ) :
	function logistico_page_wrap_start() {
        $page_attr = array(
			'class' => array('site', 'logisitco_page_wrap'),
			'id' => 'page'
        );
        $page_attr = apply_filters('logistico_page_attr', $page_attr);
        echo '<div '. logistico_set_attributes( $page_attr ) .'>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo '<a class="skip-link screen-reader-text" href="#content">'. esc_html__('Skip to content', 'logistico') . '</a>';
	}
endif;


/**
 * Page End
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_page_wrap_end' ) ) :
	function logistico_page_wrap_end() {
		echo '</div><!-- #page -->';
	}
endif;


/**
 * Content wrap start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_content_start' ) ) :
	function logistico_content_start() {
        echo '<div id="content" class="site-content">';
    }
endif;


/**
 * Content wrap end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_content_end' ) ) :
	function logistico_content_end() {
        echo '</div><!-- #content -->';
    }
endif;


/**
 * Content wrap start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_content_inner_start' ) ) :
	function logistico_content_inner_start() {
        if ( is_page_template( "template-full.php" ) || is_page_template('elementor_header_footer') || is_page_template('elementor_canvas') )
            return;

        echo '<div class="container">';
        echo '<div class="row">';
    }
endif;

/**
 * Content wrap end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_content_inner_end' ) ) :
	function logistico_content_inner_end() {
        if ( is_page_template( "template-full.php" ) || is_page_template('elementor_header_footer') || is_page_template( 'elementor_canvas' ) )
            return;

        echo '</div> <!-- .container -->';
        echo '</div> <!-- .row -->';
    }
endif;



/**
 * Custom hooks functions are define about general section.
 *
 * @package Logistico
 * @since 1.0.0
 */

/**
 * Header section wrap
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_header_wrap' ) ) :
	function logistico_header_wrap() {
        ?>
        <!-- Header Topbar -->
        <div class="top-bar font2-title1 white-clr">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6 col-sm-5">
                        <ul class="list-items fs-10">
                            <li><i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> 081092837353636 </span></li>
                            <li class="active"><i class="fa fa-envelope"></i> Email: <span class="theme-clr"> info@logistico.com </span></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-7 fs-12">
                        <?php

                            date_default_timezone_set('Asia/Manila'); // set it to the right value
                            function areWeOpen($day, $hour, $minutes) {
                            $hour = (int)$hour;
                            switch($day) {
                                case 'Monday':
                                    if($hour >= 9 && $hour < 17) {
                                        return true;
                                    }
                                    break;
                                case 'Tuesday':
                                    if($hour >= 9 && $hour < 17) {
                                        return true;
                                    }
                                    break;
                                case 'Wednesday':
                                    if($hour >= 9 && $hour < 17) {
                                        return true;
                                    }
                                    break;
                                case 'Thursday':
                                    if($hour >= 9 && $hour < 17) {
                                        return true;
                                    }
                                    break;
                                case 'Friday':
                                    if($hour >= 9 && $hour < 17) {
                                        return true;
                                    }
                                    break;
                                case 'Saturday':
                                    if($hour >= 8 && $hour < 13) {
                                        return true;
                                    }
                                    break;
                                case 'Sunday':
                                    if($hour >= 0 && $hour < 24) {
                                        return false;
                                    }
                                    break;
                            }
                            return false;
                            }

                            $weAreOpen = areWeOpen(date('l'), date('G'), date('i'));

                            if($weAreOpen) {
                                if (date('l') == 'Saturday') {
                                    $close_time = '1pm';
                                }else{
                                    $close_time = '5pm';
                                }
                            echo '<p class="contact-num" style="color: #00ff00; font-weight: 600;">Office Open | <span style="color: #e03418;"> Closes by '.$close_time.'</span></p>';
                            } else {
                            echo '<p class="contact-num" style="color: #e03418; font-weight: 600;">Office Closed | <span style="color: #00ff00;">Available Online</span></p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <a href="https://shenzhenaircargo.com/wp-admin" class="sign-in fs-12 theme-clr-bg"> sign in </a>
        </div>
        <!-- /.Header Topbar -->

        <!-- Header Logo & Navigation -->
        <nav class="menu-bar font2-title1">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-logo" href="https://shenzhenaircargo.com"> <img src="https://shenzhenaircargo.com/wp-content/uploads/2021/07/logo.png" alt="logo" /> </a>
                    </div>
                    <div class="col-md-10 col-sm-10 fs-12">
                        <div id="navbar" class="collapse navbar-collapse no-pad">
                            <ul class="navbar-nav theme-menu">
                                <li><a href="https://shenzhenaircargo.com">Home </a></li>
                                <li> <a href="about">about</a> </li>
                                <li> <a href="track"> track </a> </li>
                                <li class="dropdown"> 
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" href="javascript:void(0)"> freights </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="air-freights">air freights</a></li>
                                        <li><a href="sea-freights">sea freights</a></li>
                                        <li><a href="project-cargo">project cargo</a></li>
                                    </ul>

                                </li>
                                <li class="dropdown"> 
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" href="javascript:void(0)"> services </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="warehousing">ware housing</a></li>
                                        <li><a href="personal-baggage">personal baggage</a></li>
                                        <li><a href="custom-clearance">custom clearance</a></li>
                                    </ul>

                                </li>
                                <li> <a href="contact"> contact </a> </li>

                                <li> <a href="career"> career </a> </li>
                            </ul>                                                      
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /.Header Logo & Navigation -->
        <?php
    }
endif;

/**
 * Header section start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_header_start' ) ) :
	function logistico_header_start() {
        echo '<header id="masthead" class="site-header">';
        echo '<div class="container">';
        echo '<div class="row">';
    }
endif;


/**
 * Header section end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_header_end' ) ) :
	function logistico_header_end() {
        echo '</div><!-- .row -->';
        echo '</div><!-- .container -->';
        echo '</header><!-- .side-header -->';
    }
endif;


/**
 * Header banner section start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_banner_section_start' ) ) :
	function logistico_banner_section_start() {
        if ( is_page_template( "template-full.php" ) || is_page_template('elementor_header_footer') || is_page_template( 'elementor_canvas' ) )
            return;
        $breadcrumb_attr = array(
            'class' => array(
                'lgtico-breadcrumb-section',
                'p-t-b-55'
            )
        );
        $breadcrumb_attr = apply_filters('logistico_breadcrumb_class', $breadcrumb_attr);
        echo '<section '. logistico_set_attributes( $breadcrumb_attr ) .'>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo '<div class="container breadcrumb-container">';
        echo '<div class="lgtico-breadcrumb-content-wrap lgtico-breadcrumb-content-wrap-3 text-center">';
    }
endif;


/**
 * Header banner title
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_banner_title' ) ) :
	function logistico_banner_title() {
        if ( is_page_template( "template-full.php" ) || is_page_template('elementor_header_footer') || is_page_template( 'elementor_canvas' ) )
            return;

        $breadcrumb = new Logistico_BreadCrumb();
        echo wp_kses_post( $breadcrumb->init() );
    }
endif;


/**
 * Header banner section end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_banner_section_end' ) ) :
	function logistico_banner_section_end() {
        if ( is_page_template( "template-full.php" ) || is_page_template('elementor_header_footer') )
            return;
            
		echo '</div>';
		echo '</div>';
		echo '</section><!-- .lgtico-breadcrumb-section-->';
	}
endif;



/**
 * Footer section start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_footer_section_start' ) ) :
	function logistico_footer_section_start() {
        echo '<footer id="colophon" class="site-footer lgtico-section bg-cloud-burst">';
	}
endif;



/**
 * Footer section widget area
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_footer_section_widgets' ) ) :
	function logistico_footer_section_widgets() {
        if ( is_active_sidebar( 'footer-widget-area' ) ) :
        $footer_layout = get_theme_mod('footer_widget_layout', 'column_four');
        ?>
        <div class="lgtico-footer-top p-t-b-95 p-sm-t-b-70 logistic-footer-<?php echo esc_attr($footer_layout); ?>">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!--.lgtico-footer-top -->
        <?php
        endif;
	}
endif;


/**
 * Footer section widget area
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_footer_section_bottom' ) ) :
	function logistico_footer_section_bottom() {
        ?>
        <div class="lgtico-footer-bottom lgtico-footer-border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 d-flex d-lg-flex d-md-flex d-sm-block d-xs-block align-items-center justify-content-lg-start justify-content-md-center">
                        <?php 
                        $copyright = get_theme_mod( 'logistico_copyright_text' );
                        if( $copyright ) :
                        $allowed_html = array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array(),
                        );
                        ?>
                        <p class="lgtico-copywright lgtico-font-14 m-0 lgtico-text-sm-center m-sm-b-10">
                            <?php echo wp_kses($copyright, $allowed_html); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex d-lg-flex d-md-flex d-sm-block d-xs-block justify-content-lg-end justify-content-md-center">
                        <div class="lgtico-footer-extra-menu lgtico-text-sm-center">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                ) );
                            ?>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .lgtico-footer-bottom -->
        <?php
	}
endif;


/**
 * Footer section end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'logistico_footer_section_end' ) ) :
	function logistico_footer_section_end() {
		echo '</footer><!-- #colophon-->';
	}
endif;





/**
 * Page Wrapper
 *
 * @since 1.0.0
 */
add_action('logistico_before_page', 'logistico_page_wrap_start' );
add_action('logistico_after_page', 'logistico_page_wrap_end' );


/**
 * Main content wrapper
 *
 * @since 1.0.0
 */
add_action( 'logistico_content_start', 'logistico_content_start', 10 );
add_action( 'logistico_content_start', 'logistico_content_inner_start', 20 );
add_action( 'logistico_content_end', 'logistico_content_inner_end', 10 );
add_action( 'logistico_content_end', 'logistico_content_end', 20 );



/**
 * Managed functions for Header section hooking
 *
 * @since 1.0.0
 */
add_action( 'logistico_header_section', 'logistico_header_start', 10 );
add_action( 'logistico_header_section', 'logistico_header_wrap', 20 );
add_action( 'logistico_header_section', 'logistico_header_end', 30 );


/**
 * Managed functions for top banner hook
 *
 * @since 1.0.0
 */
add_action( 'logistico_banner_section', 'logistico_banner_section_start', 10 );
add_action( 'logistico_banner_section', 'logistico_banner_title', 20 );
add_action( 'logistico_banner_section', 'logistico_banner_section_end', 30 );


/**
 * Managed functions for footer area hook
 *
 * @since 1.0.0
 */
add_action( 'logistico_footer_before', 'logistico_footer_section_start' );
add_action( 'logistico_footer_section', 'logistico_footer_section_widgets' );
add_action( 'logistico_footer_bottom', 'logistico_footer_section_bottom' );
add_action( 'logistico_footer_after', 'logistico_footer_section_end' );
