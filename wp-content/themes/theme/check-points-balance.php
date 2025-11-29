<?php 
    get_header('image');
    // template name: Check Points Balance
?>
<div data-elementor-type="wp-page" data-elementor-id="839" class="elementor elementor-839"
		data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
		data-elementor-post-type="page">
		<section
			class="elementor-section elementor-top-section elementor-element elementor-element-ae500ef elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
			data-id="ae500ef" data-element_type="section"
			data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c127bf3"
					data-id="c127bf3" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<!-- <div class="elementor-element elementor-element-1598591 elementor-widget elementor-widget-text-editor"
							data-id="1598591" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p><?php echo get_field('main_title'); ?></p>
							</div>
						</div> -->
						<div class="elementor-element elementor-element-af33105 elementor-widget elementor-widget-image"
							data-id="af33105" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img decoding="async" width="800" height="533" src="<?php echo get_field('main_image'); ?>" class="attachment-large size-large wp-image-440"> 
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d59284"
					data-id="7d59284" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-8f280eb elementor-button-align-start elementor-widget elementor-widget-form"
							data-id="8f280eb" data-element_type="widget"
							data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
							data-widget_type="form.default">
							<div class="elementor-widget-container">
                                <div class="elementor-form" id="the_card_registration">
                                    <h2>Please Enter Your Card ID</h2>
                                    <p>Check your balance below:</p>
                                    <?php echo do_shortcode('[customer_points]'); ?>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php get_footer(); ?>