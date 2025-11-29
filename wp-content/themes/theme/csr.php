<?php 
    get_header('image');
    // template name: csr
?>
    <div data-elementor-type="wp-page" data-elementor-id="731" class="elementor elementor-731"
        data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
        data-elementor-post-type="page">
        <div class="elementor-element elementor-element-0259d85 e-flex e-con-boxed e-con e-parent" data-id="0259d85"
            data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-48b61cf e-con-full e-flex e-con e-child" data-id="48b61cf"
                    data-element_type="container">
                    <div class="elementor-element elementor-element-b2b087a elementor-widget elementor-widget-heading"
                        data-id="b2b087a" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default"><?php echo get_field('main_title');?></p>
                        </div>
                    </div>
                    <div class="d-none elementor-element elementor-element-5d70cca elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="5d70cca" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7060833 elementor-widget elementor-widget-text-editor"
                        data-id="7060833" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <?php echo get_field('description');?>
                        </div>
                    </div>
                </div>
            <div style="background-image: url(<?php echo get_field('main_image');?>) !important;" class="elementor-element elementor-element-6cc0947 e-con-full e-flex e-con e-child" data-id="6cc0947"
                    data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-element elementor-element-f5eddcc elementor-widget elementor-widget-spacer"
                        data-id="f5eddcc" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php get_footer(); ?>