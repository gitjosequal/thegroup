<?php 
    get_header();
?>
<div data-elementor-type="wp-page" data-elementor-id="2184" class="elementor elementor-2184"
		data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
		data-elementor-post-type="page">
		<section
			class="elementor-section elementor-top-section elementor-element elementor-element-3578b8ef elementor-section-height-min-height elementor-section-items-bottom elementor-section-stretched elementor-section-full_width elementor-section-content-middle elementor-section-height-default"
			data-id="3578b8ef" data-element_type="section"> 
			<div class="elementor-background-video-container">
			<video class="elementor-background-video-hosted elementor-html5-video" autoplay="" muted="" playsinline=""
				loop="" src="<?php echo get_field('video');?>"
				style="width: 1903px; height: 1070.44px;"></video>
			</div>
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-63852b19"
					data-id="63852b19" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<!-- <section
							class="elementor-section elementor-inner-section elementor-element elementor-element-6d539ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
							data-id="6d539ad" data-element_type="section"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7c42c15e"
									data-id="7c42c15e" data-element_type="column">
									<div class="elementor-widget-wrap">
									</div>
								</div>
							</div>
						</section> -->
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-6e01456 elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
			data-id="6e01456" data-element_type="section"
			data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4cc0bae0 animated-slow animated fadeIn"
					data-id="4cc0bae0" data-element_type="column"
					data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-32c4b705 elementor-widget elementor-widget-image"
							data-id="32c4b705" data-element_type="widget" data-widget_type="image.default">
							<div class="elementor-widget-container">
								<img decoding="async" width="226" height="75" src="<?php echo get_field('logo');?>"
									class="attachment-full size-full wp-image-1315" alt=""> </div>
						</div>
						
						<div class="elementor-element elementor-element-2f0d20b8 elementor-hidden-mobile elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
							data-id="2f0d20b8" data-element_type="widget" data-widget_type="social-icons.default">
							<div class="elementor-widget-container">
								<div class="elementor-social-icons-wrapper elementor-grid">
								<?php if( have_rows('social_media') ): ?>
									<?php while( have_rows('social_media') ): the_row();
										$icon_data = get_sub_field('icon');
										// Check if it's JSON data
										if (strpos($icon_data, '{') === 0) {
											$icon_json = json_decode($icon_data, true);
											if ($icon_json && isset($icon_json['id']) && isset($icon_json['style'])) {
												// Convert to Font Awesome 6 format
												$icon_class = 'fa-' . $icon_json['style'] . ' fa-' . $icon_json['id'];
												echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span><i class="' . $icon_class . '"></i></a></span>';
											} else {
												echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span>' . $icon_data . '</a></span>';
											}
										} else {
											echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span>' . $icon_data . '</a></span>';
										}
									?>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1625bae9 animated-slow animated fadeIn"
					data-id="1625bae9" data-element_type="column"
					data-settings="{&quot;animation&quot;:&quot;slideInUp&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-19bffb2b elementor-widget elementor-widget-heading"
							data-id="19bffb2b" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default" style="<?php if(get_field('title_color')){echo 'color:'.get_field('title_color');} ?>"><?php echo get_field('main_title');?></h2>
							</div>
						</div>
						<div class="elementor-element elementor-element-3423b80 elementor-hidden-desktop elementor-hidden-tablet elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
							data-id="3423b80" data-element_type="widget" data-widget_type="social-icons.default">
							<div class="elementor-widget-container">
								<div class="elementor-social-icons-wrapper elementor-grid">
									<?php if( have_rows('social_media') ): ?>
									<?php while( have_rows('social_media') ): the_row();
										$icon_data = get_sub_field('icon');
										// Check if it's JSON data
										if (strpos($icon_data, '{') === 0) {
											$icon_json = json_decode($icon_data, true);
											if ($icon_json && isset($icon_json['id']) && isset($icon_json['style'])) {
												// Convert to Font Awesome 6 format
												$icon_class = 'fa-' . $icon_json['style'] . ' fa-' . $icon_json['id'];
												echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span><i class="' . $icon_class . '"></i></a></span>';
											} else {
												echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span>' . $icon_data . '</a></span>';
											}
										} else {
											echo '<span class="elementor-grid-item"><a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-animation-sink elementor-repeater-item-d258a42" href="' . get_sub_field('link') . '" target="_blank"><span class="elementor-screen-only"></span>' . $icon_data . '</a></span>';
										}
									?>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="d-none elementor-element elementor-element-6c8d2b10 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
							data-id="6c8d2b10" data-element_type="widget" data-widget_type="divider.default">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
									</span>
								</div>
							</div>
						</div>
						<div class="elementor-element elementor-element-734c064e elementor-widget elementor-widget-text-editor single-brand-m-p"
							data-id="734c064e" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container <?php if( get_field('small_font_size') ){ echo 'font-10px'; } ?>">
							<?php echo get_field('main_description');?>
<?php $shop_link = get_field('shop_now_link'); ?>
<?php $title_color = get_field('title_color'); ?>

<?php if ($shop_link) : ?>

	<?php if ($title_color) : ?>
	<style>
		.shopnow-btn-div a:hover {
			color: <?php echo $title_color; ?> !important;
			background: transparent !important;
			box-shadow: 0 0 0 1px <?php echo $title_color; ?> !important;
		}
	</style>
	<?php endif; ?>

	<div class="shopnow-btn-div">
		<a
			style="<?php if ($title_color) { echo 'background:' . $title_color . ';box-shadow:0px 0px 0px 1px '. $title_color .';'; } ?>"
			class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
			target="_blank"
			href="<?php echo esc_url($shop_link); ?>">
			<span class="elementor-button-text">Shop now</span>
		</a>
	</div>

<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="d-none elementor-section elementor-top-section elementor-element elementor-element-337ef60 elementor-section-full_width elementor-section-items-stretch elementor-section-content-middle elementor-section-stretched elementor-section-height-min-height elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default"
			data-id="337ef60" data-element_type="section"
			data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
			<div class="elementor-container elementor-column-gap-no">
				
				<?php if( have_rows('gallery_images') ):   
					$gallery_images = get_field('gallery_images');
					$item_count = count($gallery_images); 
				?>
					<?php while( have_rows('gallery_images') ): the_row(); ?>
						<div class="elementor-column <?php $column_class = ($item_count === 4) ? 'elementor-col-25' : 'elementor-col-20'; ?> elementor-top-column elementor-element elementor-element-e1dc3ab"
							data-id="e1dc3ab" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-087ee24 elementor-widget elementor-widget-image"
									data-id="087ee24" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img loading="lazy" decoding="async" width="1920" height="1280"
											src="<?php echo get_sub_field('image'); ?>"
											class="attachment-full size-full wp-image-1218" alt=""> </div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
	</div>
<?php get_footer(); ?>
	