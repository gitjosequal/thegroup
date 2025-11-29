<?php 
    get_header('image');
?>

<div data-elementor-type="wp-page" data-elementor-id="1264" class="archive-event-page elementor elementor-1264"
    data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
    data-elementor-post-type="page">
    <section class="pt-0 elementor-section elementor-inner-section elementor-element elementor-element-fab40bf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fab40bf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f67e13f" data-id="f67e13f" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c0fc059 elementor-section-stretched elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="c0fc059" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fab3158 elementor-hidden-tablet elementor-hidden-mobile"
                data-id="fab3158" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-38a6d44 elementor-widget elementor-widget-heading"
                        data-id="38a6d44" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Browse Through</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-c18ae05 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="c18ae05" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-55eddf6 bdt-has-divider--yes elementor-widget elementor-widget-bdt-post-list"
                        data-id="55eddf6" data-element_type="widget" data-widget_type="bdt-post-list.default">
                        <div class="elementor-widget-container">
                            <div class="bdt-post-list-wrap"
                                data-show-hide="{&quot;show_title&quot;:&quot;yes&quot;,&quot;show_image&quot;:&quot;yes&quot;,&quot;show_date&quot;:&quot;yes&quot;}">
                                <div class="bdt-post-list" id="bdt-post-list-55eddf6"
                                    data-settings="{&quot;taxonomy&quot;:&quot;category&quot;,&quot;post-type&quot;:&quot;post&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;posts_per_page&quot;:6}">
                                        <?php
                                            $args = array('post_type' => 'events','posts_per_page' => -1);
                                            $loop = new wp_query($args);
                                            if($loop->have_posts()) { 
                                        ?>
                                            <?php while($loop->have_posts()) { $loop->the_post();?>
                                                <div class="bdt-item-wrap bdt-flex">
                                                    <div class="bdt-item bdt-flex bdt-flex-middle">

                                                        <div class="bdt-image bdt-flex">
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                <img decoding="async" width="150" height="150"
                                                                    src="<?php echo get_the_post_thumbnail_url();?>"
                                                                    class="attachment-thumbnail size-thumbnail"> </a>
                                                        </div>

                                                        <div class="bdt-content">
                                                            <h4 class="bdt-title">
                                                                <a href="<?php the_permalink(); ?>" class="bdt-link"
                                                                    title="<?php the_title(); ?>">
                                                                    <?php the_title(); ?> </a>
                                                            </h4>


                                                            <div class="bdt-meta bdt-subnav bdt-flex-middle">
                                                                <span><?php echo get_field('date');?></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } wp_reset_query(); ?>

                                    <!-- GRADIENT SPINNER -->
                                    <div id="bdt-loading-image" style="display: none;">
                                        <div class="bdt-spinner-box">
                                            <div class="bdt-circle-border">
                                                <div class="bdt-circle-core"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- GRADIENT SPINNER -->

                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4333e1"
                data-id="a4333e1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c821515 elementor-widget elementor-widget-bdt-post-block"
                        data-id="c821515" data-element_type="widget" data-widget_type="bdt-post-block.genesis">
                        <div class="elementor-widget-container">

                            <div id="bdtpbm_674569d88d60d" class="bdt-post-block bdt-grid bdt-grid-match skin-genesis"
                                data-bdt-grid="">

                                <?php
                                    $args = array('post_type' => 'events','posts_per_page' => -1);
                                    $loop = new wp_query($args);
                                    if($loop->have_posts()) { 
                                ?>
                                    <?php while($loop->have_posts()) { $loop->the_post();?>
                                        <div class="bdt-width-1-1@m">
                                            <div class="bdt-post-block-item featured-part">
                                                <div class="bdt-post-block-img-wrapper bdt-margin-bottom">
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                        <img decoding="async"
                                                            src="<?php echo get_the_post_thumbnail_url();?>"
                                                            alt="<?php the_title(); ?>">
                                                    </a>
                                                </div>
                                                <div class="bdt-post-block-desc">
                                                    <h4 class="bdt-post-block-title">
                                                        <a href="<?php the_permalink(); ?>" class="bdt-post-block-link" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                    </h4>
                                                    <div class="bdt-post-block-meta bdt-subnav bdt-flex-middle">
                                                        <span><?php echo get_field('date');?></span>
                                                    </div>
                                                    <div class="bdt-post-block-excerpt">
                                                        <?php the_excerpt();?>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>"
                                                        class="bdt-post-block-read-more bdt-link-reset elementor-animation-float">Read More
                                                        <span class="bdt-button-icon-align-right">
                                                            <svg aria-hidden="true"
                                                                class="fa-fw e-font-icon-svg e-fas-caret-right"
                                                                viewbox="0 0 192 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } wp_reset_query(); ?>

                                <div class="bdt-post-block-item list-part bdt-width-1-1@m bdt-margin-medium-top">
                                    <ul class="bdt-child-width-1-1@m bdt-has-divider" data-bdt-grid=""
                                        data-bdt-scrollspy="cls: bdt-animation-fade; target: > .bdt-post-block-item; delay: 300;">

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>