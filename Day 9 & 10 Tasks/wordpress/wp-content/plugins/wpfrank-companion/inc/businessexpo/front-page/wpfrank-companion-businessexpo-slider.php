<?php
$businessexpo_main_slider_options = get_theme_mod('businessexpo_main_slider_content');
$businessexpo_main_slider_disabled = get_theme_mod('businessexpo_main_slider_disabled', true);
$businessexpo_main_slider_overlay_disable = get_theme_mod('businessexpo_main_slider_overlay_disable', true);
$businessexpo_slider_feature_text1 = get_theme_mod('businessexpo_slider_feature_text1', 'Fast Secure Payments');
$businessexpo_slider_feature_text2 = get_theme_mod('businessexpo_slider_feature_text2', 'Premium Products');
$businessexpo_slider_feature_text3 = get_theme_mod('businessexpo_slider_feature_text3', 'Free & fast Delivery');
if($businessexpo_main_slider_disabled != false){ ?>

<!-- Slider Section -->
<section id="slider-selector-scroll" class="main-slider">
	<div id="owl-main" class="owl-carousel owl-theme">
		<?php 
			$businessexpo_main_slider_options = json_decode($businessexpo_main_slider_options);
			if( $businessexpo_main_slider_options!='' ){
				foreach($businessexpo_main_slider_options as $slide_item){
					$title = ! empty( $slide_item->title ) ? $slide_item->title : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? $slide_item->subtitle : '';
					$img_description = ! empty( $slide_item->text ) ? $slide_item->text : '';
					$readmorelink = ! empty( $slide_item->link ) ? $slide_item->link : '';
					$readmore_button = ! empty( $slide_item->button_text ) ? $slide_item->button_text : '';
					$open_new_tab = $slide_item->open_new_tab;
						
					if($slide_item->image_url!=''){ ?>
						<div id="post-<?php the_ID(); ?>" class="item home-section home-full-height" <?php   
							$slider_image = ! empty( $slide_item->image_url ) ? apply_filters( 'businessexpo_translate_single_string', $slide_item->image_url, 'Slider section' ) : ''; 
							if($slider_image != '' ) { ?> style="background-image:url(<?php echo $slider_image; ?>); <?php } ?>">
						
							<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
								<div class="container slider-caption">
									<figcaption class="caption-content text-center">
										<?php if(($title!= '') || ($subtitle!= '') || ($img_description !='')) { ?>
											<Span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $subtitle ) ); ?></Span>
											<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
											<p class="description" ><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
										<?php } if($readmore_button !='' ) { ?>
										<div class="more-btn mt-5">
											<a href="<?php echo $readmorelink; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-large btn-skin btn-animation">
												<?php echo esc_html($readmore_button) ?>
											</a>
										</div>
										<?php } ?>
									</figcaption>
								</div><?php 
							} ?>
						</div>
						<?php
					}
				}
		    } else { ?>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/slide-1.jpg);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<Span class="subtitle"><?php _e('We Are Creative','wpfrank-companion'); ?></Span>
							<h1 class="title"><?php _e('We Create Stunning WordPress Themes','wpfrank-companion'); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>	
						</figcaption>
					</div>
				</div>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/slide-2.jpg);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<Span class="subtitle"><?php _e('We Are Creative','wpfrank-companion'); ?></Span>
							<h1 class="title"><?php _e('We Create Stunning WordPress Themes','wpfrank-companion'); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>
						</figcaption>
					</div>
				</div>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/slide-3.jpg);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<Span class="subtitle"><?php _e('We Are Creative','wpfrank-companion'); ?></Span>
							<h1 class="title"><?php _e('We Create Stunning WordPress Themes','wpfrank-companion'); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>
						</figcaption>
					</div>
				</div>
				<?php 
			} ?>
	</div>
	<a href="#" class="scroll-down" address="true"></a>
	
	<!--Features-->
	<div class="features-section">
		<div class="container">
			<div class="row features">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon fi_1">
							<i class="fas fa-credit-card"></i>
						</div>
						<h4><?php echo esc_html($businessexpo_slider_feature_text1); ?></h4>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon fi_2">
							<i class="fab fa-dropbox"></i>
						</div>
						<h4><?php echo esc_html($businessexpo_slider_feature_text2); ?></h4>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon fi_3">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<h4><?php echo esc_html($businessexpo_slider_feature_text3); ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
<?php } ?>