<?php 
    get_header('image');
?>
<div data-elementor-type="wp-page" data-elementor-id="622"
    class="elementor elementor-622 elementor-motion-effects-parent"
    data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
    data-elementor-post-type="page">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-256e26b elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="256e26b" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
        style="width: 1543px; left: 0px;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb20fc5"
                data-id="fb20fc5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c19a29c bdt-custom-gallery-skin-fedara-style-center elementor-widget elementor-widget-bdt-post-gallery"
                        data-id="c19a29c" data-element_type="widget"
                        data-settings="{&quot;columns_tablet&quot;:&quot;1&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_mobile&quot;:&quot;1&quot;}"
                        data-widget_type="bdt-post-gallery.bdt-abetis">
                        <div class="elementor-widget-container">
                            <div class="bdt-post-gallery-wrapper">

                                <div id="bdt-post-galleryc19a29c"
                                    class="bdt-post-gallery bdt-ep-grid-filter-container bdt-post-gallery-skin-abetis bdt-grid bdt-grid-medium"
                                    data-bdt-grid=""
                                    data-settings="{&quot;id&quot;:&quot;#bdt-post-galleryc19a29c&quot;,&quot;tiltShow&quot;:false}"
                                    bdt-scrollspy="cls: bdt-animation-fade; delay: 300; target: > div > .bdt-post-gallery-inner;">
                                        <?php
                                            $args = array('post_type' => 'page','p' => 37);
                                            $loop = new wp_query($args);
                                            if($loop->have_posts()) { $loop->the_post();
                                        ?>
                                            <div
                                                class="bdt-gallery-item bdt-transition-toggle bdt-width-1-1 bdt-width-1-1@s bdt-width-1-3@m bdt-first-column">
                                                <div class="bdt-post-gallery-inner bdt-scrollspy-inview" style="">
                                                    <div class="bdt-gallery-thumbnail">
                                                        <img fetchpriority="high" decoding="async" width="960" height="640"
                                                            src="<?php echo get_field('brand_thumbnail'); ?>"
                                                            class="attachment-full size-full" alt="Cozmo Supermarket"> </div>
                                                    <div
                                                        class="bdt-position-cover bdt-overlay bdt-overlay-default bdt-transition-fade">
                                                        <div class="bdt-post-gallery-content">
                                                            <div class="bdt-gallery-content-inner">
                                                                <div class="bdt-flex-inline bdt-gallery-item-link-wrapper">
                                                                    <a class="bdt-gallery-item-link bdt-link-icon"
                                                                        href="<?php echo get_permalink(); ?>">
                                                                        <i class="ep-icon-link" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bdt-post-gallery-skin-abetis-desc bdt-padding-small">
                                                    <a class="bdt-post-gallery-title-link"
                                                        href="<?php echo get_permalink(); ?>">
                                                        <h2 class="bdt-gallery-item-title bdt-margin-remove">
                                                            <?php the_title(); ?> 
                                                        </h2>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } wp_reset_query();?>


















                                    <?php
                                        $args = array('post_type' => 'brands','posts_per_page' => -1);
                                        $loop = new wp_query($args);
                                        if($loop->have_posts()) { 
                                    ?>
                                        <?php while($loop->have_posts()) { $loop->the_post();?>
                                            <div
                                                class="bdt-gallery-item bdt-transition-toggle bdt-width-1-1 bdt-width-1-1@s bdt-width-1-3@m bdt-first-column">
                                                <div class="bdt-post-gallery-inner bdt-scrollspy-inview" style="">
                                                    <div class="bdt-gallery-thumbnail">
                                                        <img fetchpriority="high" decoding="async" width="960" height="640"
                                                            src="<?php echo get_the_post_thumbnail_url();?>"
                                                            class="attachment-full size-full" alt="Cozmo Supermarket"> </div>
                                                    <div
                                                        class="bdt-position-cover bdt-overlay bdt-overlay-default bdt-transition-fade">
                                                        <div class="bdt-post-gallery-content">
                                                            <div class="bdt-gallery-content-inner">
                                                                <div class="bdt-flex-inline bdt-gallery-item-link-wrapper">
                                                                    <a class="bdt-gallery-item-link bdt-link-icon"
                                                                        href="<?php echo get_permalink(); ?>">
                                                                        <i class="ep-icon-link" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bdt-post-gallery-skin-abetis-desc bdt-padding-small">
                                                    <a class="bdt-post-gallery-title-link"
                                                        href="<?php echo get_permalink(); ?>">
                                                        <h2 class="bdt-gallery-item-title bdt-margin-remove">
                                                            <?php the_title(); ?> 
                                                        </h2>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } wp_reset_query();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?><?php get_footer(); ?>
