<footer data-elementor-type="footer" data-elementor-id="1146" class="elementor elementor-1146 elementor-location-footer"
	data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
	data-elementor-post-type="elementor_library">
	<section
		class="elementor-section elementor-top-section elementor-element elementor-element-30d16da elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
		data-id="30d16da" data-element_type="section"
		data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="elementor-container elementor-column-gap-no">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27fbd5d"
				data-id="27fbd5d" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<section class="elementor-section elementor-inner-section elementor-element elementor-element-69d62fd elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="69d62fd" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9f2233a"
								data-id="9f2233a" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
										<?php
											$args = array('post_type' => 'page','p' => 14);
											$loop = new wp_query($args);
											if($loop->have_posts()) { $loop->the_post();
										?>
									<div class="elementor-element elementor-element-2c5b09b elementor-widget elementor-widget-heading"
										data-id="2c5b09b" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">
												<?php  echo get_field('about_footer_title'); ?>
											</h2>
										</div>
									</div>
									<div class="d-none elementor-element elementor-element-99751e5 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
										data-id="99751e5" data-element_type="widget" data-widget_type="divider.default">
										<div class="elementor-widget-container">
											<div class="elementor-divider">
												<span class="elementor-divider-separator">
												</span>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-4ad469f elementor-widget elementor-widget-text-editor"
										data-id="4ad469f" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>
												<?php  echo get_field('about_footer_description'); ?>
											</p>
										</div>
									</div>
									<?php } wp_reset_query(); ?>
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ef51507"
								data-id="ef51507" data-element_type="column">
								<div class="elementor-widget-wrap">
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-acf9f41"
								data-id="acf9f41" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-faca0f7 elementor-align-right elementor-mobile-align-center elementor-tablet-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
										data-id="faca0f7" data-element_type="widget"
										data-widget_type="icon-list.default">
										<div class="elementor-widget-container">
											<ul class="elementor-icon-list-items">
												<?php
													$args = array('post_type' => 'page','p' => 15);
													$loop = new wp_query($args);
													if($loop->have_posts()) { $loop->the_post();
												?>

													<?php if (get_field('phone')): ?>
													<li class="elementor-icon-list-item">
														<a href="tel:<?php echo get_field('phone'); ?>">
															<span class=" elementor-icon-list-icon">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-phone-alt"
																	viewbox="0 0 512 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
																</svg>
															</span>
															<span
																class="elementor-icon-list-text"><?php echo get_field('phone'); ?></span>
														</a>
													</li>
													<?php endif; ?>

													<?php if (get_field('fax')): ?>
													<li class="elementor-icon-list-item">
														<a href="tel:<?php echo get_field('fax'); ?>">
															<span class=" elementor-icon-list-icon">
																<svg aria-hidden="true" class="e-font-icon-svg e-fas-fax"
																	viewbox="0 0 512 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M480 160V77.25a32 32 0 0 0-9.38-22.63L425.37 9.37A32 32 0 0 0 402.75 0H160a32 32 0 0 0-32 32v448a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM288 432a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm128 128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-112H192V64h160v48a16 16 0 0 0 16 16h48zM64 128H32a32 32 0 0 0-32 32v320a32 32 0 0 0 32 32h32a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32z">
																	</path>
																</svg>
															</span>
															<span
																class="elementor-icon-list-text"><?php echo get_field('fax'); ?></span>
														</a>
													</li>
													<?php endif; ?>

													<?php if (get_field('email')): ?>
													<li class="elementor-icon-list-item">
														<a href="mailto:<?php echo get_field('email'); ?>">
															<span class=" elementor-icon-list-icon">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-envelope-open"
																	viewbox="0 0 512 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z">
																	</path>
																</svg>
															</span>
															<span
																class="elementor-icon-list-text"><?php echo get_field('email'); ?></span>
														</a>
													</li>
													<?php endif; ?>

													<?php if (get_field('location')): ?>
													<li class="elementor-icon-list-item">
														<a href="https://goo.gl/maps/QzeZa51fVrxgqztn7">
															<span class=" elementor-icon-list-icon">
																<svg aria-hidden="true"
																	class="e-font-icon-svg e-fas-mail-bulk"
																	viewbox="0 0 576 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z">
																	</path>
																</svg>
															</span>
															<span
																class="elementor-icon-list-text"><?php echo get_field('location'); ?></span>
														</a>
													</li>
													<?php endif; ?>

												<?php } wp_reset_query(); ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="elementor-element elementor-element-a4bff75 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
						data-id="a4bff75" data-element_type="widget" data-widget_type="divider.default">
						<div class="elementor-widget-container">
							<div class="elementor-divider">
								<span class="elementor-divider-separator">
								</span>
							</div>
						</div>
					</div>
					<section
						class="elementor-section elementor-inner-section elementor-element elementor-element-e034d77 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="e034d77" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-410bb10"
								data-id="410bb10" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-31136d4 elementor-widget elementor-widget-image"
										data-id="31136d4" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<a href="<?php echo site_url(); ?>">
												<img width="768"
													src="<?php bloginfo('template_directory');?>/assets/media/thegroup-logo-bw.svg"
													class="attachment-medium_large size-medium_large wp-image-1245"
													alt=""> </a>
										</div>
										
											<div class="footer-clients">
													<div class="footer-image-div">
														<a href="<?php the_permalink(37); ?>" >
															<img loading="lazy" decoding="async" width="1182" height="769"
																src="<?php echo get_field('client_logo',37); ?>"
																class="attachment-full size-full wp-image-1283" alt=""> 
														</a> 
													</div>
												<?php
													$args = array('post_type' => 'brands','posts_per_page' => -1);
													$loop = new wp_query($args);
													if($loop->have_posts()) { 
												?>
													<?php while($loop->have_posts()) { $loop->the_post();?>
														<div class="footer-image-div">
															<a href="<?php the_permalink(); ?>" >
																<img loading="lazy" decoding="async" width="1182" height="769"
																	src="<?php echo get_field('client_logo'); ?>"
																	class="attachment-full size-full wp-image-1283" alt=""> 
															</a> 
														</div>
													<?php } ?>
                            					<?php }; wp_reset_query(); ?>
											</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e2d7f8c"
								data-id="e2d7f8c" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-8ff6301 elementor-widget elementor-widget-text-editor"
										data-id="8ff6301" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3d0f193"
								data-id="3d0f193" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-9ce36d1 elementor-widget elementor-widget-heading"
										data-id="9ce36d1" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<div class="elementor-element elementor-element-8ff6301 elementor-widget elementor-widget-text-editor"
										data-id="8ff6301" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											© <?php 
											$current_year = date('Y');
											echo $current_year; 
												?> All Rights Reserved &#8211; <a href="<?php echo site_url(); ?>">THE
												Group
												Jordan</a> </div>
									</div>
											<p class="elementor-heading-title elementor-size-default"><a
													href="https://josequal.com/">A Website by Josequal</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
</footer>












<script>
var ElementorProFrontendConfig={"ajaxurl":"https:\/\/thegroup.josequal.net\/wp-admin\/admin-ajax.php","nonce":"5cff69956d","urls":{"assets":"https:\/\/thegroup.josequal.net\/wp-content\/themes\/theme\/assets\/","rest":"https:\/\/thegroup.josequal.net\/wp-json\/"},"settings":{"lazy_load_background_images":!0},"popup":{"hasPopUps":!1},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":!0},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":!0},"pinterest":{"title":"Pinterest","has_counter":!0},"reddit":{"title":"Reddit","has_counter":!0},"vk":{"title":"VK","has_counter":!0},"odnoklassniki":{"title":"OK","has_counter":!0},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":!0},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":!0},"xing":{"title":"XING","has_counter":!0},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/<?php bloginfo('template_directory');?>\/assets\/js\/default.json"}}
</script>
<script data-optimized="1" src="https://thegroup.josequal.net/wp-content/themes/theme/assets/js/theme-main-script.js" id="elementor-pro-frontend-js" defer data-deferred="1"></script>
<script>
var elementorFrontendConfig = {
    environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
    i18n: {
        shareOnFacebook: "Share on Facebook",
        shareOnTwitter: "Share on Twitter",
        pinIt: "Pin it",
        download: "Download",
        downloadImage: "Download image",
        fullscreen: "Fullscreen",
        zoom: "Zoom",
        share: "Share",
        playVideo: "Play Video",
        previous: "Previous",
        next: "Next",
        close: "Close",
        a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide"
    },
    is_rtl: false,
    breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
    responsive: {
        breakpoints: {
            mobile: { label: "Mobile Portrait", value: 767, default_value: 767, direction: "max", is_enabled: true },
            tablet: { label: "Tablet Portrait", value: 1024, default_value: 1024, direction: "max", is_enabled: true }
        }
    },
    version: "3.25.6",
    is_static: false,
    experimentalFeatures: {
        e_font_icon_svg: true,
        additional_custom_breakpoints: true,
        container: true
    },
    urls: {
        assets: "https://thegroup.josequal.net/wp-content/themes/theme/assets/",
        ajaxurl: "https://thegroup.josequal.net/wp-admin/admin-ajax.php",
        uploadUrl: "https://thegroup.josequal.net/wp-content/uploads"
    },
    nonces: { floatingButtonsClickTracking: "66babe6379" },
    swiperClass: "swiper",
    settings: { page: {} },
    kit: {
        body_background_background: "classic",
        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
        global_image_lightbox: "yes"
    },
    post: { id: 230, title: "THE Group Jordan - Your Premium Department Store" }
};
</script>
<script data-optimized="1" src="https://thegroup.josequal.net/wp-content/themes/theme/assets/js/theme-main.js" id="elementor-frontend-js-2" defer data-deferred="1"></script>




 <!-- <script data-optimized="1" src="https://www.thegroup.jo/wp-content/litespeed/js/5efb6988abf7c6ee5af9da2e7a0450bb.js?ver=f6054" id="elementor-webpack-runtime-js" defer data-deferred="1"></script>
<script id="elementor-frontend-js-before" src="data:text/javascript;base64,dmFyIGVsZW1lbnRvckZyb250ZW5kQ29uZmlnPXsiZW52aXJvbm1lbnRNb2RlIjp7ImVkaXQiOiExLCJ3cFByZXZpZXciOiExLCJpc1NjcmlwdERlYnVnIjohMX0sImkxOG4iOnsic2hhcmVPbkZhY2Vib29rIjoiU2hhcmUgb24gRmFjZWJvb2siLCJzaGFyZU9uVHdpdHRlciI6IlNoYXJlIG9uIFR3aXR0ZXIiLCJwaW5JdCI6IlBpbiBpdCIsImRvd25sb2FkIjoiRG93bmxvYWQiLCJkb3dubG9hZEltYWdlIjoiRG93bmxvYWQgaW1hZ2UiLCJmdWxsc2NyZWVuIjoiRnVsbHNjcmVlbiIsInpvb20iOiJab29tIiwic2hhcmUiOiJTaGFyZSIsInBsYXlWaWRlbyI6IlBsYXkgVmlkZW8iLCJwcmV2aW91cyI6IlByZXZpb3VzIiwibmV4dCI6Ik5leHQiLCJjbG9zZSI6IkNsb3NlIiwiYTExeUNhcm91c2VsV3JhcHBlckFyaWFMYWJlbCI6IkNhcm91c2VsIHwgSG9yaXpvbnRhbCBzY3JvbGxpbmc6IEFycm93IExlZnQgJiBSaWdodCIsImExMXlDYXJvdXNlbFByZXZTbGlkZU1lc3NhZ2UiOiJQcmV2aW91cyBzbGlkZSIsImExMXlDYXJvdXNlbE5leHRTbGlkZU1lc3NhZ2UiOiJOZXh0IHNsaWRlIiwiYTExeUNhcm91c2VsRmlyc3RTbGlkZU1lc3NhZ2UiOiJUaGlzIGlzIHRoZSBmaXJzdCBzbGlkZSIsImExMXlDYXJvdXNlbExhc3RTbGlkZU1lc3NhZ2UiOiJUaGlzIGlzIHRoZSBsYXN0IHNsaWRlIiwiYTExeUNhcm91c2VsUGFnaW5hdGlvbkJ1bGxldE1lc3NhZ2UiOiJHbyB0byBzbGlkZSJ9LCJpc19ydGwiOiExLCJicmVha3BvaW50cyI6eyJ4cyI6MCwic20iOjQ4MCwibWQiOjc2OCwibGciOjEwMjUsInhsIjoxNDQwLCJ4eGwiOjE2MDB9LCJyZXNwb25zaXZlIjp7ImJyZWFrcG9pbnRzIjp7Im1vYmlsZSI6eyJsYWJlbCI6Ik1vYmlsZSBQb3J0cmFpdCIsInZhbHVlIjo3NjcsImRlZmF1bHRfdmFsdWUiOjc2NywiZGlyZWN0aW9uIjoibWF4IiwiaXNfZW5hYmxlZCI6ITB9LCJtb2JpbGVfZXh0cmEiOnsibGFiZWwiOiJNb2JpbGUgTGFuZHNjYXBlIiwidmFsdWUiOjg4MCwiZGVmYXVsdF92YWx1ZSI6ODgwLCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjohMX0sInRhYmxldCI6eyJsYWJlbCI6IlRhYmxldCBQb3J0cmFpdCIsInZhbHVlIjoxMDI0LCJkZWZhdWx0X3ZhbHVlIjoxMDI0LCJkaXJlY3Rpb24iOiJtYXgiLCJpc19lbmFibGVkIjohMH0sInRhYmxldF9leHRyYSI6eyJsYWJlbCI6IlRhYmxldCBMYW5kc2NhcGUiLCJ2YWx1ZSI6MTIwMCwiZGVmYXVsdF92YWx1ZSI6MTIwMCwiZGlyZWN0aW9uIjoibWF4IiwiaXNfZW5hYmxlZCI6ITF9LCJsYXB0b3AiOnsibGFiZWwiOiJMYXB0b3AiLCJ2YWx1ZSI6MTM2NiwiZGVmYXVsdF92YWx1ZSI6MTM2NiwiZGlyZWN0aW9uIjoibWF4IiwiaXNfZW5hYmxlZCI6ITF9LCJ3aWRlc2NyZWVuIjp7ImxhYmVsIjoiV2lkZXNjcmVlbiIsInZhbHVlIjoyNDAwLCJkZWZhdWx0X3ZhbHVlIjoyNDAwLCJkaXJlY3Rpb24iOiJtaW4iLCJpc19lbmFibGVkIjohMX19LCJoYXNDdXN0b21CcmVha3BvaW50cyI6ITF9LCJ2ZXJzaW9uIjoiMy4yNS42IiwiaXNfc3RhdGljIjohMSwiZXhwZXJpbWVudGFsRmVhdHVyZXMiOnsiZV9mb250X2ljb25fc3ZnIjohMCwiYWRkaXRpb25hbF9jdXN0b21fYnJlYWtwb2ludHMiOiEwLCJjb250YWluZXIiOiEwLCJlX3N3aXBlcl9sYXRlc3QiOiEwLCJlX25lc3RlZF9hdG9taWNfcmVwZWF0ZXJzIjohMCwiZV9vcHRpbWl6ZWRfY29udHJvbF9sb2FkaW5nIjohMCwiZV9vcHRpbWl6ZWRfbWFya3VwIjohMCwiZV9vbmJvYXJkaW5nIjohMCwiZV9jc3Nfc21vb3RoX3Njcm9sbCI6ITAsInRoZW1lX2J1aWxkZXJfdjIiOiEwLCJob21lX3NjcmVlbiI6ITAsImxhbmRpbmctcGFnZXMiOiEwLCJuZXN0ZWQtZWxlbWVudHMiOiEwLCJlX2VsZW1lbnRfY2FjaGUiOiEwLCJsaW5rLWluLWJpbyI6ITAsImZsb2F0aW5nLWJ1dHRvbnMiOiEwLCJtZWdhLW1lbnUiOiEwfSwidXJscyI6eyJhc3NldHMiOiJodHRwczpcL1wvd3d3LnRoZWdyb3VwLmpvXC93cC1jb250ZW50XC9wbHVnaW5zXC9lbGVtZW50b3JcL2Fzc2V0c1wvIiwiYWpheHVybCI6Imh0dHBzOlwvXC93d3cudGhlZ3JvdXAuam9cL3dwLWFkbWluXC9hZG1pbi1hamF4LnBocCIsInVwbG9hZFVybCI6Imh0dHBzOlwvXC93d3cudGhlZ3JvdXAuam9cL3dwLWNvbnRlbnRcL3VwbG9hZHMifSwibm9uY2VzIjp7ImZsb2F0aW5nQnV0dG9uc0NsaWNrVHJhY2tpbmciOiI2NmJhYmU2Mzc5In0sInN3aXBlckNsYXNzIjoic3dpcGVyIiwic2V0dGluZ3MiOnsicGFnZSI6eyJlbGVtZW50X3BhY2tfZ2xvYmFsX3Rvb2x0aXBfd2lkdGgiOnsidW5pdCI6InB4Iiwic2l6ZSI6IiIsInNpemVzIjpbXX0sImVsZW1lbnRfcGFja19nbG9iYWxfdG9vbHRpcF93aWR0aF90YWJsZXQiOnsidW5pdCI6InB4Iiwic2l6ZSI6IiIsInNpemVzIjpbXX0sImVsZW1lbnRfcGFja19nbG9iYWxfdG9vbHRpcF93aWR0aF9tb2JpbGUiOnsidW5pdCI6InB4Iiwic2l6ZSI6IiIsInNpemVzIjpbXX0sImVsZW1lbnRfcGFja19nbG9iYWxfdG9vbHRpcF9wYWRkaW5nIjp7InVuaXQiOiJweCIsInRvcCI6IiIsInJpZ2h0IjoiIiwiYm90dG9tIjoiIiwibGVmdCI6IiIsImlzTGlua2VkIjohMH0sImVsZW1lbnRfcGFja19nbG9iYWxfdG9vbHRpcF9wYWRkaW5nX3RhYmxldCI6eyJ1bml0IjoicHgiLCJ0b3AiOiIiLCJyaWdodCI6IiIsImJvdHRvbSI6IiIsImxlZnQiOiIiLCJpc0xpbmtlZCI6ITB9LCJlbGVtZW50X3BhY2tfZ2xvYmFsX3Rvb2x0aXBfcGFkZGluZ19tb2JpbGUiOnsidW5pdCI6InB4IiwidG9wIjoiIiwicmlnaHQiOiIiLCJib3R0b20iOiIiLCJsZWZ0IjoiIiwiaXNMaW5rZWQiOiEwfSwiZWxlbWVudF9wYWNrX2dsb2JhbF90b29sdGlwX2JvcmRlcl9yYWRpdXMiOnsidW5pdCI6InB4IiwidG9wIjoiIiwicmlnaHQiOiIiLCJib3R0b20iOiIiLCJsZWZ0IjoiIiwiaXNMaW5rZWQiOiEwfSwiZWxlbWVudF9wYWNrX2dsb2JhbF90b29sdGlwX2JvcmRlcl9yYWRpdXNfdGFibGV0Ijp7InVuaXQiOiJweCIsInRvcCI6IiIsInJpZ2h0IjoiIiwiYm90dG9tIjoiIiwibGVmdCI6IiIsImlzTGlua2VkIjohMH0sImVsZW1lbnRfcGFja19nbG9iYWxfdG9vbHRpcF9ib3JkZXJfcmFkaXVzX21vYmlsZSI6eyJ1bml0IjoicHgiLCJ0b3AiOiIiLCJyaWdodCI6IiIsImJvdHRvbSI6IiIsImxlZnQiOiIiLCJpc0xpbmtlZCI6ITB9fSwiZWRpdG9yUHJlZmVyZW5jZXMiOltdfSwia2l0Ijp7ImJvZHlfYmFja2dyb3VuZF9iYWNrZ3JvdW5kIjoiY2xhc3NpYyIsImFjdGl2ZV9icmVha3BvaW50cyI6WyJ2aWV3cG9ydF9tb2JpbGUiLCJ2aWV3cG9ydF90YWJsZXQiXSwiZ2xvYmFsX2ltYWdlX2xpZ2h0Ym94IjoieWVzIiwibGlnaHRib3hfZW5hYmxlX2NvdW50ZXIiOiJ5ZXMiLCJsaWdodGJveF9lbmFibGVfZnVsbHNjcmVlbiI6InllcyIsImxpZ2h0Ym94X2VuYWJsZV96b29tIjoieWVzIiwibGlnaHRib3hfZW5hYmxlX3NoYXJlIjoieWVzIiwibGlnaHRib3hfdGl0bGVfc3JjIjoidGl0bGUiLCJsaWdodGJveF9kZXNjcmlwdGlvbl9zcmMiOiJkZXNjcmlwdGlvbiJ9LCJwb3N0Ijp7ImlkIjoyMzAsInRpdGxlIjoiVEhFJTIwR3JvdXAlMjBKb3JkYW4lMjAtJTIwWW91ciUyMFByZW1pdW0lMjBEZXBhcnRtZW50JTIwU3RvcmUiLCJleGNlcnB0IjoiIiwiZmVhdHVyZWRJbWFnZSI6ITF9fQ==" defer></script>
<script data-optimized="1" src="https://www.thegroup.jo/wp-content/litespeed/js/31a7f6e22357bd1a9ebde7e4b8ce14be.js?ver=55ff1" id="elementor-frontend-js" defer data-deferred="1"></script> -->



<script>
  document.addEventListener("DOMContentLoaded", () => {
    const animateElements = document.querySelectorAll(".animate-on-scroll");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => { 
        if (entry.isIntersecting) {
          // Add animation classes when element is in view
          entry.target.classList.add("animate__animated");
          // Stop observing the element after the animation is triggered
          observer.unobserve(entry.target);
        }
      });
    });

    animateElements.forEach((el) => observer.observe(el));
  });
</script>
<?php  wp_footer(); ?>
</body>
</html>