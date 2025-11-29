<!doctype html>
<html dir="ltr" lang="en-US">
<head>
	<meta charset="UTF-8">
	<?php
        $theId=get_the_ID();
        // Enable error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        // echo '_____________'.$theId.'_____________';
        $globalCssPath = __DIR__ . '/globalcss.php';
        if (file_exists($globalCssPath)) {
            include $globalCssPath;
        } 
    ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php bloginfo('template_directory');?>/assets/media/thegroupjo-logo-icon-100x100.png"
		sizes="32x32" />
	<link rel="icon" href="<?php bloginfo('template_directory');?>/assets/media/thegroupjo-logo-icon-256x256.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="<?php bloginfo('template_directory');?>/assets/media/thegroupjo-logo-icon-256x256.png" />
	<meta name="msapplication-TileImage"
		content="<?php bloginfo('template_directory');?>/assets/media/thegroupjo-logo-icon-300x300.png" />
	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body
class="home page-template page-template-elementor_header_footer page page-id-230 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-774 elementor-page elementor-page-230">
<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->
<header data-elementor-type="header" data-elementor-id="1936"
    class="elementor elementor-1936 elementor-location-header"
    data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
    data-elementor-post-type="elementor_library">
    <div class="elementor-element elementor-element-3890204 elementor-hidden-tablet elementor-hidden-mobile e-con-full e-flex e-con e-parent"
        data-id="3890204" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;],&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
        <div class="elementor-element elementor-element-59b6854 e-flex e-con-boxed e-con e-child" data-id="59b6854"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-f4ec485 elementor-shape-square e-grid-align-right elementor-grid-0 elementor-widget elementor-widget-social-icons"
                    data-id="f4ec485" data-element_type="widget" data-widget_type="social-icons.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-social-icons-wrapper elementor-grid">
                        <?php
                            if (!is_404()) { // Only run this on non-404 pages
                                $args = array('post_type' => 'page', 'p' => 15);
                                $loop = new wp_query($args);
                                if ($loop->have_posts()) { $loop->the_post();
                                    if (have_rows('social_media')) {
                                        while (have_rows('social_media')) {
                                            the_row();
                                            $icon_data = get_sub_field('icon');
                                            // Check if it's JSON data
                                            if (strpos($icon_data, '{') === 0) {
                                                $icon_json = json_decode($icon_data, true);
                                                if ($icon_json && isset($icon_json['id']) && isset($icon_json['style'])) {
                                                    // Convert to Font Awesome 6 format
                                                    $icon_class = 'fa-' . $icon_json['style'] . ' fa-' . $icon_json['id'];
                                                    echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-x-twitter elementor-animation-float elementor-repeater-item-cb020be" href="' . get_sub_field('link') . '" target="_blank"><i class="' . $icon_class . '"></i></a></span>';
                                                } else {
                                                    echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-x-twitter elementor-animation-float elementor-repeater-item-cb020be" href="' . get_sub_field('link') . '" target="_blank">' . $icon_data . '</a></span>';
                                                }
                                            } else {
                                                echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-x-twitter elementor-animation-float elementor-repeater-item-cb020be" href="' . get_sub_field('link') . '" target="_blank">' . $icon_data . '</a></span>';
                                            }
                                        }
                                    }
                                }
                                wp_reset_query();
                            }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-8d9bf55 e-flex e-con-boxed e-con e-child" data-id="8d9bf55"
            data-element_type="container"
            data-settings="{&quot;ep_parallax_bg_colors&quot;:&quot;yes&quot;,&quot;ep_parallax_bg_color_start&quot;:&quot;#FFFFFF00&quot;,&quot;ep_parallax_bg_color_end&quot;:&quot;#3C3C3BCC&quot;,&quot;section_parallax_on&quot;:&quot;yes&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-98bfe1e e-con-full e-flex e-con e-child"
                    data-id="98bfe1e" data-element_type="container">
                    <div class="elementor-element elementor-element-240a283 elementor-absolute elementor-widget elementor-widget-image"
                        data-id="240a283" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <a href="<?php echo site_url(); ?>">
                                <img width="181" height="175" src="<?php bloginfo('template_directory');?>/assets/media/thegroup-logo.png"
                                    class="attachment-full size-full wp-image-1229" alt=""> </a>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b2804a3 e-con-full e-flex e-con e-child"
                    data-id="b2804a3" data-element_type="container">
                    <div class="elementor-element elementor-element-0051a33 elementor-nav-menu__align-end elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                        data-id="0051a33" data-element_type="widget"
                        data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                        data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav aria-label="Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-drop-out">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'header_menu',
                                        'menu_class'     => 'elementor-nav-menu',
                                        'container'      => false,
                                    ) );
                                ?>
                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
                                <svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
                                </svg>
                                <svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                                </svg>
                                <span class="elementor-screen-only">Menu</span>
                            </div>
                        </div>
                    </div>
                    <!-- search-not-done -->
                    <div class="d-none elementor-element elementor-element-5152999 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form"
                        data-id="5152999" data-element_type="widget"
                        data-settings="{&quot;skin&quot;:&quot;full_screen&quot;}"
                        data-widget_type="search-form.default">
                        <div class="elementor-widget-container">
                            <search role="search">
                                <form class="elementor-search-form" action="<?php echo site_url(); ?>" method="get">
                                    <div class="elementor-search-form__toggle" tabindex="0" role="button">
                                        <div class="e-font-icon-svg-container"><svg aria-hidden="true"
                                                class="e-font-icon-svg e-fas-search" viewbox="0 0 512 512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                </path>
                                            </svg></div> <span class="elementor-screen-only">Search</span>
                                    </div>
                                    <div class="elementor-search-form__container">
                                        <label class="elementor-screen-only"
                                            for="elementor-search-form-5152999">Search</label>


                                        <input id="elementor-search-form-5152999" placeholder="Search..."
                                            class="elementor-search-form__input" type="search" name="s" value="">


                                        <div class="dialog-lightbox-close-button dialog-close-button" role="button"
                                            tabindex="0">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-close"
                                                viewbox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z">
                                                </path>
                                            </svg> <span class="elementor-screen-only">Close this search box.</span>
                                        </div>
                                    </div>
                                </form>
                            </search>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-b99e66b elementor-hidden-desktop e-flex e-con-boxed e-con e-parent"
        data-id="b99e66b" data-element_type="container"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-aca8fc4 elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-image"
                data-id="aca8fc4" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img fetchpriority="high" width="1024" height="1024"
                        src="<?php bloginfo('template_directory');?>/assets/media/thegroup-logo-horizontal.svg"
                        class="attachment-large size-large wp-image-1249" alt=""> </div>
            </div>
            <div class="menu-div elementor-element elementor-element-6aa4ac6 elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                data-id="6aa4ac6" data-element_type="widget"
                data-settings="{&quot;layout&quot;:&quot;dropdown&quot;,&quot;full_width&quot;:&quot;stretch&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                data-widget_type="nav-menu.default">
                <div class="elementor-widget-container">
                    <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                        aria-expanded="false">
                        <svg aria-hidden="true" role="presentation"
                            class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar"
                            viewbox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z">
                            </path>
                        </svg><svg aria-hidden="true" role="presentation"
                            class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close"
                            viewbox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z">
                            </path>
                        </svg> <span class="elementor-screen-only">Menu</span>
                    </div>
                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                     
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header_menu',
                                'menu_class' => "elementor-nav-menu",
                                'container' => false,
                                'menu_id' =>''
                            ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="elementor-element elementor-element-c754bf9 e-con-full e-flex <?php if(wp_is_mobile()){}else{?> e-con<?php }?> e-parent" data-id="c754bf9"
        data-element_type="container">
        <div class="elementor-element elementor-element-651d21b elementor-widget elementor-widget-template"
            data-id="651d21b" data-element_type="widget" data-widget_type="template.default">
            <div class="elementor-widget-container">
                <div class="elementor-template">
                    <div data-elementor-type="container" data-elementor-id="2615" class="elementor elementor-2615 "
                        data-elementor-post-type="elementor_library">
                        <div class="<?php if(is_post_type_archive('brands')){ echo 'archive-brands'; };?> elementor-element elementor-element-92fe0d5 e-flex e-con-boxed e-con e-parent <?php if(get_field('small_banner')){ echo 'small-375px'; };?>"
                            data-id="92fe0d5" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5.5,&quot;sizes&quot;:[]},&quot;background_motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                            <style>
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5:before, 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.elementor-background-video-container:before, 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.e-con-inner>.elementor-background-video-container:before, 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.elementor-background-slideshow:before, 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.e-con-inner>.elementor-background-slideshow:before, 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.elementor-motion-effects-container>.elementor-motion-effects-layer:before {
                                    <?php if(!get_the_post_thumbnail_url()||is_search()) { ?>
                                        background-color: unset;
                                        <?php } ?>
                                    
                                }
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5:not(.elementor-motion-effects-element-type-background), 
                                .elementor-2615 .elementor-element.elementor-element-92fe0d5>.elementor-motion-effects-container>.elementor-motion-effects-layer 
                                
                                {
                                    background-image: url(<?php 
                                        if(is_search(  ))
                                        {
                                            bloginfo('template_directory');
                                            echo '/assets/media/bggray.png';
                                        }
                                        else if(is_post_type_archive('events')) 
                                        {
                                            echo get_field('events_banner', 226);
                                        } 
                                        else if(is_post_type_archive('brands')) 
                                        {
                                            echo get_field('brands_banner', 226);
                                        } 
                                        elseif(get_the_post_thumbnail_url())
                                        { 
                                            echo get_the_post_thumbnail_url();
                                        }
                                        else
                                        {
                                            bloginfo('template_directory');
                                            echo '/assets/media/bggray.png';
                                        }
                                    ?> )}
                            </style>




                            








<div class="e-con-inner">
    <div class="elementor-element elementor-element-27fdfc1 e-con-full e-flex e-con e-child <?php  if($theId==48){echo 'w-partners';} ?>"
        data-id="27fdfc1" data-element_type="container">

        <?php 
        // Determine the condition for displaying description
        $description_on_title = false;
        if (is_post_type_archive('events')) {
            $description_on_title = get_field('description_on_title_events', 226);
        } else if (is_post_type_archive('brands')) {
            $description_on_title = get_field('description_on_title_brands', 226);
        } else {
            $description_on_title = get_field('description_on_title');
        }

        // Show description before the title if true
        if ($description_on_title) { ?>
            <div class="elementor-element elementor-element-35c46372 elementor-widget elementor-widget-heading"
                data-id="35c46372" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <p class="elementor-heading-title elementor-size-default on-header">
                        <?php
                        if (is_post_type_archive('events')) {
                            echo get_field('header_description_events', 226);
                        } else if (is_post_type_archive('brands')) {
                            echo get_field('header_description_brands', 226);
                        } else {
                            echo get_field('header_description');
                        }
                        ?>  
                    </p>
                </div>
            </div>
        <?php } ?>

        <div class="elementor-element elementor-element-5507b3a7 elementor-widget elementor-widget-heading"  
            data-id="5507b3a7" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h1 class="elementor-heading-title elementor-size-default main-page-title <?php  if($theId==48){echo 'font-30px';} ?>">
                    <?php 
                    if (is_404()) { 
                        echo '404 - PAGE NOT FOUND'; 
                    } else if (is_post_type_archive()) { 
                        echo post_type_archive_title(); 
                    } else if (is_search()) {
                        echo 'Search Page'; 
                    } else if (!is_404()) {
                        the_title(); 
                    } 
                    ?>
                </h1>
            </div>
        </div>

        <?php 
        // Show description after the title if false
        if (!$description_on_title) { ?>
            <div class="elementor-element elementor-element-35c46372 elementor-widget elementor-widget-heading"
                data-id="35c46372" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <p class="elementor-heading-title elementor-size-default">
                        <?php 
                        if (is_post_type_archive('events')) {
                            echo get_field('header_description_events', 226);
                        } else if (is_post_type_archive('brands')) {
                            echo get_field('header_description_brands', 226);
                        } else {
                            echo get_field('header_description');
                        }
                        ?>  
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>













                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>