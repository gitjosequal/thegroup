<?php 
    get_header();
    // template name: cozmo-supermarket
?>


<div data-elementor-type="wp-page" data-elementor-id="2190" class="cozmo-page elementor elementor-2190"
	data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
	data-elementor-post-type="page">
	<section
		class=" elementor-section elementor-top-section elementor-element elementor-element-7646321f elementor-section-height-min-height elementor-section-items-bottom elementor-section-stretched elementor-section-full_width elementor-section-height-default"
		data-id="7646321f" data-element_type="section"
data-settings='{
  "stretch_section":"section-stretched",
  "background_background":"video",
  "background_motion_fx_devices":["desktop"],
  "background_video_link":"<?php echo esc_url( get_field("video") ); ?>",
  "background_play_on_mobile":"yes"
}'
		style="width: 1903px; left: 0px;">
		<div class="elementor-background-video-container">
			<video class="elementor-background-video-hosted elementor-html5-video" autoplay="" muted="" playsinline=""
				loop="" src="<?php echo get_field('video');?>"
				style="width: 1903px; height: 1070.44px;"></video>
		</div>
		<div class="elementor-background-overlay"></div>
		<div class="elementor-container elementor-column-gap-no">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75faa3d1"
				data-id="75faa3d1" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<!-- <section
						class="elementor-section elementor-inner-section elementor-element elementor-element-b4bde5b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="b4bde5b" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-52afe51b"
								data-id="52afe51b" data-element_type="column">
								<div class="elementor-widget-wrap">
								</div>
							</div>
						</div>
					</section> -->
				</div>
			</div>
		</div> 
	</section>
	<section class="section-one elementor-section elementor-top-section elementor-element elementor-element-3fea9e75 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
		data-id="3fea9e75" data-element_type="section"
		data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4607008e animated-slow "
				data-id="4607008e" data-element_type="column"
				data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-5341e382 elementor-widget elementor-widget-image"
						data-id="5341e382" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container"> <img decoding="async" width="226" height="69" src="<?php echo get_field('feature_image');?>" class="attachment-full size-full wp-image-1378" alt=""> </div>
					</div>
					<div class="elementor-element elementor-element-317a8883 elementor-hidden-mobile elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
						data-id="317a8883" data-element_type="widget" data-widget_type="social-icons.default">
						<div class="elementor-widget-container">
							<div class="elementor-social-icons-wrapper elementor-grid">

								<?php if( have_rows('first_section_social') ): ?>
									<?php while( have_rows('first_section_social') ): the_row();
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
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-310ffc5b animated-slow "
				data-id="310ffc5b" data-element_type="column"
				data-settings="{&quot;animation&quot;:&quot;slideInUp&quot;}">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div s="elementor-element elementor-element-1ccbe6a8 elementor-widget elementor-widget-heading"
						data-id="1ccbe6a8" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('first_section_title');?></h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-12b71d5 elementor-hidden-desktop elementor-hidden-tablet elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
						data-id="12b71d5" data-element_type="widget" data-widget_type="social-icons.default">
						<div class="elementor-widget-container">
							<div class="elementor-social-icons-wrapper elementor-grid">
								<?php if( have_rows('first_section_social') ): ?>
									<?php while( have_rows('first_section_social') ): the_row();
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
					<div class="d-none elementor-element elementor-element-22ec087a elementor-widget-divider--view-line elementor-widget elementor-widget-divider mb-0"
						data-id="22ec087a" data-element_type="widget" data-widget_type="divider.default">
						<div class="elementor-widget-container">
							<div class="elementor-divider">
								<span class="elementor-divider-separator">
								</span>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-e40b24f elementor-widget elementor-widget-text-editor"
						data-id="e40b24f" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
						<?php echo get_field('first_section_description');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- repeater -->

	<?php if( have_rows('boxes') ): ?>
        <?php $counter=0; while( have_rows('boxes') ): the_row(); ?>
			<?php if($counter%2==0)
				{ ?>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-6c226eae elementor-section-full_width elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-reverse-mobile elementor-section-height-default"
						data-id="6c226eae" data-element_type="section" >
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-be4e1ca animated-slow  animate__animated animate__bounce"
								data-id="be4e1ca" data-element_type="column" >
								<div class="elementor-widget-wrap elementor-element-populated  " style="background-image: url(<?php echo get_sub_field('image'); ?>);">
									<div class="elementor-element elementor-element-9abf4d2 elementor-widget elementor-widget-spacer"
										data-id="9abf4d2" data-element_type="widget" data-widget_type="spacer.default">
										<div class="elementor-widget-container">
											<div class="elementor-spacer">
												<div class="elementor-spacer-inner"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64370fd7 animated-slow "
								data-id="64370fd7" data-element_type="column"
								data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-34fdbdd6 elementor-widget elementor-widget-heading  mb-0"
										data-id="34fdbdd6" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?php echo get_sub_field('title'); ?></h2>
										</div>
									</div>
									<div class="d-none elementor-element elementor-element-28e9fd03 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
										data-id="28e9fd03" data-element_type="widget" data-widget_type="divider.default">
										<div class="elementor-widget-container">
											<div class="elementor-divider">
												<span class="elementor-divider-separator">
												</span>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-43243ccc elementor-widget elementor-widget-text-editor"
										data-id="43243ccc" data-element_type="widget" data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p><?php echo get_sub_field('description'); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } else { ?>
					<section
							class="elementor-section elementor-top-section elementor-element elementor-element-6500115 elementor-section-full_width elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-height-default"
							data-id="6500115" data-element_type="section" >
							<div class="elementor-container elementor-column-gap-no">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-35938e97 animated-slow "
									data-id="35938e97" data-element_type="column"
									data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-521f0682 elementor-widget elementor-widget-heading mb-0"
											data-id="521f0682" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default"><?php echo get_sub_field('title'); ?></h2>
											</div>
										</div>
										<div class="d-none elementor-element elementor-element-3620be74 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
											data-id="3620be74" data-element_type="widget" data-widget_type="divider.default">
											<div class="elementor-widget-container">
												<div class="elementor-divider">
													<span class="elementor-divider-separator ">
													</span>
												</div>
											</div>
										</div>
										<div class="elementor-element elementor-element-6f64e723 elementor-widget elementor-widget-text-editor"
											data-id="6f64e723" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<p><?php echo get_sub_field('description'); ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-49c0cca2 animated-slow animate__animated animate__bounce " 
									data-id="49c0cca2" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated  "  style="background-image: url(<?php echo get_sub_field('image'); ?>);">
										<div class="elementor-element elementor-element-e674547 elementor-widget elementor-widget-spacer"
											data-id="e674547" data-element_type="widget" data-widget_type="spacer.default">
											<div class="elementor-widget-container">
												<div class="elementor-spacer">
													<div class="elementor-spacer-inner"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</section>
			<?php } ?>
        <?php $counter++; endwhile; ?>
    <?php endif; ?>



	
	
	<!-- last -->
	<section class="elementor-section elementor-top-section elementor-element elementor-element-7a346a74 elementor-section-full_width elementor-section-content-middle elementor-section-height-min-height elementor-section-items-stretch elementor-section-height-default"
		data-id="7a346a74" data-element_type="section"
		data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-container elementor-column-gap-no">
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-20029e34 map-div"
				data-id="20029e34" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<?php echo do_shortcode('[wpgmza id="1"]'); ?>
				</div>
			</div>
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f210fe7"
				data-id="5f210fe7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-73dfe467 elementor-widget elementor-widget-image"
						data-id="73dfe467" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="1024" height="1024"
								src="<?php echo get_field('last_section_image'); ?>"
								class="attachment-large size-large wp-image-1379" alt=""> </div>
					</div>
					<div class="elementor-element elementor-element-37a634ea elementor-widget elementor-widget-heading mb-0"
						data-id="37a634ea" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('last_section_title'); ?></h2>
						</div>
					</div>
					<div class="d-none elementor-element elementor-element-31d05d7c elementor-widget-divider--view-line elementor-widget elementor-widget-divider mb-0"
						data-id="31d05d7c" data-element_type="widget" data-widget_type="divider.default">
						<div class="elementor-widget-container">
							<div class="elementor-divider">
								<span class="elementor-divider-separator">
								</span>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-b311f4b elementor-widget elementor-widget-text-editor no-margin-for-p"
						data-id="b311f4b" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
							<p><span
									style="font-size: 16px; text-align: justify; background-color: var( --e-global-color-0fecaee ); color: var( --e-global-color-secondary );"><?php echo get_field('last_section_description'); ?></span></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- download -->
	<section
		class="elementor-section elementor-top-section elementor-element elementor-element-624d3935 elementor-section-content-middle elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
		data-id="624d3935" data-element_type="section"
		data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-container elementor-column-gap-no">
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e64f201"
				data-id="e64f201" data-element_type="column"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-3a45c4b1 elementor-widget elementor-widget-heading"
						data-id="3a45c4b1" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('download_section_title'); ?></h2>
						</div>
					</div>
					<div class="d-none elementor-element elementor-element-52a48446 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
						data-id="52a48446" data-element_type="widget" data-widget_type="divider.default">
						<div class="elementor-widget-container">
							<div class="elementor-divider">
								<span class="elementor-divider-separator">
								</span>
							</div>
						</div>
					</div>
					<div class="elementor-element elementor-element-3e6ca990 elementor-widget elementor-widget-text-editor"
						data-id="3e6ca990" data-element_type="widget" data-widget_type="text-editor.default">
						<div class="elementor-widget-container">
						<?php echo get_field('download_section_description'); ?>
						</div>
					</div>


					<?php if( have_rows('download_links') ): ?>
						<?php while( have_rows('download_links') ): the_row(); ?>
							
							<div class="elementor-element elementor-element-3c6afcf4 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
								data-id="3c6afcf4" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<a href="<?php echo get_sub_field('store_link'); ?>">
										<img loading="lazy" decoding="async" width="768" height="268"
											src="<?php echo get_sub_field('store'); ?>"
											class="attachment-full size-full wp-image-513" alt=""> </a>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					
					
                       <?php $shop_link = get_field('download_shop_now_link'); ?>

<?php if ($shop_link) : ?>
    <div class="shopnow-btn-div">
        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" target="_blank" href="<?php echo esc_url($shop_link); ?>">
            <span class="elementor-button-text">Shop now</span>
        </a>
    </div>
<?php endif; ?>


				</div>
			</div>
			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6114668b"
				data-id="6114668b" data-element_type="column"
				data-settings="{&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;]}">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-1dbefd1 elementor-widget elementor-widget-image"
						data-id="1dbefd1" data-element_type="widget" data-widget_type="image.default">
						<div class="elementor-widget-container">
							<img loading="lazy" decoding="async" width="800" height="800"
								src="<?php echo get_field('download_section_image'); ?>"
								class="attachment-full size-full wp-image-511" alt="cozmo.jo online grocery shopping">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>