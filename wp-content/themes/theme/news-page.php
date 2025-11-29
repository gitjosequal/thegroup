<?php 
    get_header('image');
    // template name: news page
?>
<div data-elementor-type="wp-page" data-elementor-id="1572" class="elementor elementor-1572"
	data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
	data-elementor-post-type="page">
	<div class="elementor-element elementor-element-ae09551 e-flex e-con-boxed e-con e-parent" data-id="ae09551"
		data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
		<div class="e-con-inner">



			<div class="elementor-element elementor-element-5686e96 elementor-grid-1 elementor-posts--align-center elementor-hidden-desktop elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts"
				data-id="5686e96" data-element_type="widget"
				data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_columns_tablet&quot;:&quot;1&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
				data-widget_type="posts.classic">
				<div class="elementor-widget-container">
					<div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
					<?php
					$args = array('post_type' => 'events','posts_per_page' => -1);
					$loop = new wp_query($args);
					if($loop->have_posts()) {
				?>
						<?php while($loop->have_posts()) { $loop->the_post();?>
						<article
							class="elementor-post elementor-grid-item post-2282 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
							<a class="elementor-post__thumbnail__link" href="<?php echo get_permalink(); ?>"
								tabindex="-1">
								<div class="elementor-post__thumbnail"><img loading="lazy" decoding="async" width="768"
										height="413"
										src="<?php echo get_the_post_thumbnail_url();?>"
										class="attachment-medium_large size-medium_large wp-image-1551" alt=""></div>
							</a>
							<div class="elementor-post__text">
								<h2 class="elementor-post__title">
									<a href="<?php echo get_permalink(); ?>">
										<?php the_title();?> </a>
								</h2>
								<div class="elementor-post__meta-data">
									<span class="elementor-post-date">
									<?php echo get_field('date');?> </span>
								</div>
								<div class="elementor-post__excerpt">
								<?php echo the_excerpt(); ?>
								</div>

								<a class="elementor-post__read-more" href="<?php echo get_permalink(); ?>"
									aria-label="Read more about Cozmo Partners Up with British Grocer Waitrose &#038; Partners to Launch New Products in the Kingdom"
									tabindex="-1">
									Read More » </a>

							</div>
						</article>

						<?php }  ?>


						<?php } wp_reset_query(); ?>
						<?php
					$args = array('post_type' => 'page','p' => 48);
					$loop = new wp_query($args);
					if($loop->have_posts()) { $loop->the_post();
				?>
						<article
							class="elementor-post elementor-grid-item post-890 post type-post status-publish format-image has-post-thumbnail hentry category-event-galleries category-hamleys post_format-post-format-image">
							<a class="elementor-post__thumbnail__link" href="<?php echo get_permalink(); ?>"
								tabindex="-1">
								<div class="elementor-post__thumbnail"><img decoding="async" width="768" height="512"
										src="<?php echo get_field('thumbnail');?>"
										class="attachment-medium_large size-medium_large wp-image-988" alt=""></div>
							</a>
							<div class="elementor-post__text">
								<h2 class="elementor-post__title">
									<a href="<?php echo get_permalink(); ?>">
										<?php the_title(); ?> </a>
								</h2>
								<div class="elementor-post__meta-data">
									<span class="elementor-post-date">
										<?php echo get_field('date');?> </span>
								</div>
								<div class="elementor-post__excerpt">
									<?php the_excerpt(); ?>
								</div>

								<a class="elementor-post__read-more" href="<?php echo get_permalink(); ?>"
									aria-label="Read more about Santa Visits Hamleys" tabindex="-1"> Read More » </a>

							</div>

						</article>
						<?php } wp_reset_query(); ?>


						


					</div>

				</div>
			</div>


			<div class="elementor-element elementor-element-4d3c674 elementor-grid-1 elementor-posts--thumbnail-left elementor-posts--align-left elementor-hidden-tablet elementor-hidden-mobile elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts"
				data-id="4d3c674" data-element_type="widget"
				data-settings="{&quot;classic_columns&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
				data-widget_type="posts.classic">
				<div class="elementor-widget-container">
					<div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
					<?php
					$args = array('post_type' => 'events','posts_per_page' => -1);
					$loop = new wp_query($args);
					if($loop->have_posts()) {
				?>
						<?php while($loop->have_posts()) { $loop->the_post();?>
						<article
							class="elementor-post elementor-grid-item post-2282 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
							<a class="elementor-post__thumbnail__link" href="<?php echo get_permalink(); ?>"
								tabindex="-1">
								<div class="elementor-post__thumbnail"><img loading="lazy" decoding="async" width="768"
										height="413" src="<?php echo get_the_post_thumbnail_url();?>"
										class="attachment-medium_large size-medium_large wp-image-1551" alt=""></div>
							</a>
							<div class="elementor-post__text">
								<h2 class="elementor-post__title">
									<a href="<?php echo get_permalink(); ?>">
										<?php  the_title();?> </a>
								</h2>
								<div class="elementor-post__meta-data">
									<span class="elementor-post-date">
										<?php echo get_field('date');?> </span>
								</div>
								<div class="elementor-post__excerpt">
									<?php the_excerpt(); ?>
								</div>

								<a class="elementor-post__read-more" href="<?php echo get_permalink(); ?>"
									aria-label="Read more about Cozmo Partners Up with British Grocer Waitrose &#038; Partners to Launch New Products in the Kingdom"
									tabindex="-1">
									Read More » </a>

							</div>
						</article>
						<?php }  ?>
						<?php } wp_reset_query(); ?>
						<?php
					$args = array('post_type' => 'page','p' => 48);
					$loop = new wp_query($args);
					if($loop->have_posts()) { $loop->the_post();
				?>
						<article
							class="elementor-post elementor-grid-item post-890 post type-post status-publish format-image has-post-thumbnail hentry category-event-galleries category-hamleys post_format-post-format-image">
							<a class="elementor-post__thumbnail__link" href="<?php echo get_permalink(); ?>"
								tabindex="-1">
								<div class="elementor-post__thumbnail"><img decoding="async" width="768" height="512"
										src="<?php echo get_field('thumbnail');?>"
										class="attachment-medium_large size-medium_large wp-image-988" alt=""></div>
							</a>
							<div class="elementor-post__text">
								<h2 class="elementor-post__title">
									<a href="<?php echo get_permalink(); ?>">
										<?php echo the_title();?> </a>
								</h2>
								<div class="elementor-post__meta-data">
									<span class="elementor-post-date">
										<?php echo get_field('date');?></span>
								</div>
								<div class="elementor-post__excerpt">
									<?php the_excerpt(); ?>
								</div>

								<a class="elementor-post__read-more" href="<?php echo get_permalink(); ?>"
									aria-label="Read more about Santa Visits Hamleys" tabindex="-1">
									Read More » </a>

							</div>
						</article>
						<?php } wp_reset_query(); ?>
						

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>