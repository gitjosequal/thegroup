<?php 
    get_header('image');
    // template name: about us
?>
<div data-elementor-type="wp-page" data-elementor-id="747" class="about-us-page elementor elementor-747"
    data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
    data-elementor-post-type="page">
    
    <div class="elementor-element elementor-element-30f2b8c e-flex e-con-boxed e-con e-parent" data-id="30f2b8c"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner ">
        <div class="elementor-element elementor-element-692255d e-con-full e-flex e-con e-child" data-id="692255d"
                data-element_type="container">
                <div class="elementor-element elementor-element-a64790c elementor-widget elementor-widget-heading"
                    data-id="a64790c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default"><?php echo get_field('first_section_small_title');?></h4>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a50aabc elementor-widget elementor-widget-heading"
                    data-id="a50aabc" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default perspective-title"><?php echo get_field('first_section_main_title');?></p>
                    </div>
                </div>
                
                <div class="elementor-element elementor-element-e2ff1d3 elementor-widget elementor-widget-heading"
                    data-id="e2ff1d3" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('vision_title');?></h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-421f84f elementor-widget elementor-widget-text-editor"
                    data-id="421f84f" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><?php echo get_field('vision_description');?></p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-868a1e4 elementor-widget elementor-widget-heading"
                    data-id="868a1e4" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('what_sets_title');?></h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ecfd9a5 elementor-widget elementor-widget-text-editor"
                    data-id="ecfd9a5" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <ul>
                            <?php if( have_rows('what_list') ): ?>
                                <?php while( have_rows('what_list') ): the_row(); ?>
                                    <li><?php echo get_sub_field('list_item'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6816b00 elementor-widget elementor-widget-heading"
                    data-id="6816b00" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('our_mission_title');?></h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-254b134 elementor-widget elementor-widget-text-editor"
                    data-id="254b134" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><span style="color: #d5a74f;">
                            <strong>
                            <?php echo get_field('our_mission_sub_text');?>
                            </strong></span></p>
                        <ul>
                            <?php if( have_rows('our_mission_list') ): ?>
                                <?php while( have_rows('our_mission_list') ): the_row(); ?>
                                    <li><?php echo get_sub_field('list_item'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div  class="elementor-element elementor-element-0b724c1 elementor-hidden-tablet- elementor-hidden-mobile- e-con-full e-flex e-con e-child"
                data-id="0b724c1" data-element_type="container">
                <div class="elementor-element elementor-element-4d27899 elementor-widget elementor-widget-spacer"
                    data-id="4d27899" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <img src="<?php echo get_field('first_section_image');?>" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="elementor-element elementor-element-9d39ae9 e-flex e-con-boxed e-con e-parent" data-id="9d39ae9"
        data-element_type="container">
        <div class="e-con-inner">
            <div class="values-main-container">
                <div class="elementor-element elementor-element-ad74609 elementor-widget elementor-widget-heading"
                    data-id="ad74609" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default values-main-title"><?php echo get_field('value_title');?></h2>
                        <p class="value_description"><?php echo get_field('value_description');?></p>
                    </div>
                </div>
                <div class="values-grid-container">
                    <?php if( have_rows('value_repeater') ): ?>
                        <?php while( have_rows('value_repeater') ): the_row(); ?>
                            <div class="value-block">
                                <div class="value-block-content">
                                    <h3 class="value-title"><?php echo get_sub_field('title'); ?></h3>
                                    <p class="value-description"><?php echo get_sub_field('description'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



    
    <div class="ceo-area elementor-element elementor-element-5210127 e-flex e-con-boxed e-con e-parent" data-id="5210127"
        data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
             
        <div class=" e-con-inner">
            <div class="elementor-element elementor-element-bb3f919 e-con-full e-flex e-con e-child" data-id="bb3f919"
                data-element_type="container">
                <div class="elementor-element elementor-element-b8e1b97 elementor-widget elementor-widget-text-editor"
                    data-id="b8e1b97" data-element_type="widget" >
                    <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default ceo-title"><?php echo get_field('ceo_title');?></p>
                        <?php echo get_field('ceo_middle_text');?>
                    </div>
                </div>
				<?php if(get_field('ceo_sign')){ ?>
                    <div class="elementor-element elementor-element-932efa6 elementor-widget elementor-widget-image"
                        data-id="932efa6" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="768" height="204" src="<?php echo get_field('ceo_sign');?>" class="attachment-full size-full wp-image-815 "> </div>
                    </div>
				<?php }; ?>
            </div>
            <div class="elementor-element elementor-element-4c270e8 e-con-full e-flex e-con e-child" data-id="4c270e8"
                data-element_type="container">
                <div class="elementor-element elementor-element-fd80d11 elementor-widget elementor-widget-image"
                    data-id="fd80d11" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container right-div-content">
                        <img decoding="async" width="720" height="720" src="<?php echo get_field('ceo_image');?>"class="attachment-full size-full wp-image-1168">
                        <?php echo get_field('ceo_last_text');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>