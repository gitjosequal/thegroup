<?php get_header('image');
// template name: Contact Us
?>

<div data-elementor-type="wp-page" data-elementor-id="878" class="contact-us-page elementor elementor-878"
	data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
	data-elementor-post-type="page">
	<div class="elementor-element elementor-element-2430635 e-flex e-con-boxed e-con e-parent" data-id="2430635"
		data-element_type="container">
		<div class="e-con-inner">
			<div class="elementor-element elementor-element-8397c94 e-flex e-con-boxed e-con e-child" data-id="8397c94"
				data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-62e4157 elementor-widget elementor-widget-heading"
						data-id="62e4157" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('title'); ?></h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-abd1ab8 elementor-align-left elementor-mobile-align-left elementor-tablet-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
						data-id="abd1ab8" data-element_type="widget" data-widget_type="icon-list.default">
						<div class="elementor-widget-container">
						<ul class="elementor-icon-list-items">
							<?php if (get_field('phone')): ?>
								<li class="elementor-icon-list-item">
									<a href="tel:<?php echo get_field('phone'); ?>">
										<span class="elementor-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt"
												viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
												</path>
											</svg>
										</span>
										<span class="elementor-icon-list-text"><?php echo get_field('phone'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if (get_field('fax')): ?>
								<li class="elementor-icon-list-item">
									<a href="tel:<?php echo get_field('fax'); ?>">
										<span class="elementor-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-fax"
												viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M480 160V77.25a32 32 0 0 0-9.38-22.63L425.37 9.37A32 32 0 0 0 402.75 0H160a32 32 0 0 0-32 32v448a32 32 0 0 0 32 32h320a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM288 432a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm128 128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-128a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16zm0-112H192V64h160v48a16 16 0 0 0 16 16h48zM64 128H32a32 32 0 0 0-32 32v320a32 32 0 0 0 32 32h32a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32z">
												</path>
											</svg>
										</span>
										<span class="elementor-icon-list-text"><?php echo get_field('fax'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if (get_field('email')): ?>
								<li class="elementor-icon-list-item">
									<a href="mailto:<?php echo get_field('email'); ?>">
										<span class="elementor-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope-open"
												viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z">
												</path>
											</svg>
										</span>
										<span class="elementor-icon-list-text"><?php echo get_field('email'); ?></span>
									</a>
								</li>
							<?php endif; ?>

							<?php if (get_field('location')): ?>
								<li class="elementor-icon-list-item">
									<a href="https://goo.gl/maps/QzeZa51fVrxgqztn7">
										<span class="elementor-icon-list-icon">
											<svg aria-hidden="true" class="e-font-icon-svg e-fas-mail-bulk"
												viewbox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z">
												</path>
											</svg>
										</span>
										<span class="elementor-icon-list-text"><?php echo get_field('location'); ?></span>
									</a>
								</li>
							<?php endif; ?>
						</ul>

						</div>
					</div>
				</div>
			</div>

			<div class="elementor-element elementor-element-39df572 e-flex e-con-boxed e-con e-child map-600h">
				<?php echo do_shortcode('[wpgmza id="2"]'); ?>

			</div>
			<!-- cform not-ready  hidden-div -->
			<div class="elementor-element elementor-element-e061249 cform e-flex e-con-boxed e-con e-parent"
				data-id="e061249" data-element_type="container"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-15fff42 elementor-widget elementor-widget-heading"
						data-id="15fff42" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<h2 class="elementor-heading-title elementor-size-default">Tell us what you need</h2>
						</div>
					</div>
					<div class="elementor-element elementor-element-1ba03c6 elementor-widget elementor-widget-heading"
						data-id="1ba03c6" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">
							<p class="elementor-heading-title elementor-size-default">Please fill in your inquiry in the
								form below and someone from our team will contact you at the earliest opportunity.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-54cb20b elementor-button-align-stretch elementor-widget elementor-widget-form"
						data-id="54cb20b" data-element_type="widget"
						data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
						data-widget_type="form.default">
						<div class="elementor-widget-container">
							<form class="elementor-form" method="post" id="contact_form" name="Inquiry Form">
								<input type="hidden" name="post_id" value="878">
								<input type="hidden" name="form_id" value="54cb20b">
								<input type="hidden" name="referer_title" value="Contact Us">

								<input type="hidden" name="queried_id" value="878">

								<div class="elementor-form-fields-wrapper elementor-labels-">
									<div
										class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
										<label for="form-field-name"
											class="elementor-field-label elementor-screen-only">
											Name </label>
										<input size="1" type="text" name="form_fields[name]" id="form-field-name"
											class="elementor-field elementor-size-sm  elementor-field-textual"
											placeholder="Full Name">
									</div>
									<div
										class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required">
										<label for="form-field-email"
											class="elementor-field-label elementor-screen-only">
											Email </label>
										<input size="1" type="email" name="form_fields[email]" id="form-field-email"
											class="elementor-field elementor-size-sm  elementor-field-textual"
											placeholder="Email" required="required" aria-required="true">
									</div>
									<div
										class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_5ccd16e elementor-col-50 elementor-field-required">
										<label for="form-field-field_5ccd16e"
											class="elementor-field-label elementor-screen-only">
											Phone </label>
										<input size="1" type="text" name="form_fields[field_5ccd16e]"
											id="form-field-field_5ccd16e"
											class="elementor-field elementor-size-sm  elementor-field-textual"
											placeholder="Phone Number" required="required" aria-required="true">
									</div>
									<div
										class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_95b529a elementor-col-100 elementor-field-required">
										<label for="form-field-field_95b529a"
											class="elementor-field-label elementor-screen-only">
											Subject </label>
										<input size="1" type="text" name="form_fields[field_95b529a]"
											id="form-field-field_95b529a"
											class="elementor-field elementor-size-sm  elementor-field-textual"
											placeholder="Subject" required="required" aria-required="true">
									</div>
									<div
										class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
										<label for="form-field-message"
											class="elementor-field-label elementor-screen-only">
											Message </label>
										<textarea class="elementor-field-textual elementor-field  elementor-size-sm"
											name="form_fields[message]" id="form-field-message" rows="7"
											placeholder="Hello, I am interested in ... "></textarea> </div>
									<div
										class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
										<button class="elementor-button elementor-size-sm" type="submit">
											<span class="elementor-button-content-wrapper">
												<span class="elementor-button-text">Send</span>
											</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>