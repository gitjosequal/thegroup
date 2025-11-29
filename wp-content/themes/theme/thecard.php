<?php 
    get_header('image');
    // template name: thecard
?>


<div data-elementor-type="wp-page" data-elementor-id="823" class=" the-card-page elementor elementor-823"
	data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
	data-elementor-post-type="page">
    <section
						class="d-none elementor-section elementor-inner-section elementor-element elementor-element-87aa151 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="87aa151" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-06d0f5a"
								data-id="06d0f5a" data-element_type="column">
								<div class="elementor-widget-wrap">
								</div>
							</div>
						</div>
					</section>
	<section
		class="custom-elementor-section elementor-section elementor-top-section elementor-element elementor-element-b4de50b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
		data-id="b4de50b" data-element_type="section"
		data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
		<div class="elementor-container elementor-column-gap-wider">
			<div class="mt-5- elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ffa2c93"
				data-id="ffa2c93" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-ec7ecb8 elementor-widget elementor-widget-text-editor"
						data-id="ec7ecb8" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container"><?php echo get_field('main_description'); ?> </div>
						<div class="mt-4 elementor-element elementor-element-19bffb3b elementor-widget elementor-widget-heading"
							data-id="19bffb2b" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('points_title');?></h2>
							</div>
						</div>
						<div class="elementor-widget-container"><?php echo get_field('points_content'); ?> </div>
					</div>
				</div>
				
				
			</div>
			<div class="mt-5- elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d2dd7b3"
				data-id="d2dd7b3" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-96a091f elementor-widget elementor-widget-image"
						data-id="96a091f" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img decoding="async" width="2001" height="1126" src="<?php echo get_field('main_image'); ?>"
								class="attachment-full size-full wp-image-833" alt=""
								srcset="<?php echo get_field('main_image'); ?> 2001w,
								<?php echo get_field('main_image'); ?> 300w, 
								<?php echo get_field('main_image'); ?> 1024w,
								<?php echo get_field('main_image'); ?> 768w,
								<?php echo get_field('main_image'); ?> 1536w,
								<?php echo get_field('main_image'); ?> 600w"
								sizes="(max-width: 2001px) 100vw, 2001px">
							 </div>
							 
					</div>
					
				</div>
			</div>
			<div class="mt-5 elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ffa2c933"
				data-id="ffa2c93" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-ec7ecb8 elementor-widget elementor-widget-text-editor"
						data-id="ec7ecb8" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-element elementor-element-19bffb3b elementor-widget elementor-widget-heading"
							data-id="19bffb2b" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('other_benefits_title');?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ffa2c93"
				data-id="ffa2c93" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-ec7ecb8 elementor-widget elementor-widget-text-editor"
						data-id="ec7ecb8" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container"><?php echo get_field('other_benefits_content'); ?> </div>
					</div>
				</div>
			</div>
			<div class="mob-mt elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d2dd7b3"
				data-id="d2dd7b3" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					
					<div class="elementor-element elementor-element-88db37b elementor-widget elementor-widget-text-editor"
						data-id="88db37b" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<?php echo get_field('assestant'); ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
</div>



<?php get_footer(); ?>