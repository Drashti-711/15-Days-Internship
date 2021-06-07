<?php 
$businessexpo_service_area_disabled = get_theme_mod('businessexpo_service_area_disabled', true);
$businessexpo_service_content  = get_theme_mod( 'businessexpo_service_content');
$businessexpo_service_section_title = get_theme_mod('businessexpo_service_section_title', __('What We Do','wpfrank-companion'));
$businessexpo_service_section_subtitle = get_theme_mod('businessexpo_service_section_subtitle', __('Our Services','wpfrank-companion'));

if($businessexpo_service_area_disabled == true) { ?>
<!-- Service Section -->
<section id="service-selector-scroll" class="section service theme-light">
	<div class="container">
		<?php  
		if( ($businessexpo_service_section_title) || ($businessexpo_service_section_subtitle)!='' ): ?>
			<!-- Section Title -->
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<?php if(!empty($businessexpo_service_section_subtitle)) { ?>
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_service_section_subtitle); ?></p>
							<?php } ?>	
							<?php if(!empty($businessexpo_service_section_title)) { ?>
							<h1 class="section-title"><?php echo wp_kses_post($businessexpo_service_section_title); ?></h1>
							<?php } ?>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
			<!-- /Section Title -->
		<?php endif; ?>
		<div class="row">
			<?php
			if ( ! empty( $businessexpo_service_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
				$businessexpo_service_content = json_decode( $businessexpo_service_content );
				foreach ( $businessexpo_service_content as $features_item ) {
					$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
					$title = ! empty( $features_item->title ) ? $features_item->title : '';
					$text = ! empty( $features_item->text ) ? $features_item->text : '';
					$link = ! empty( $features_item->link ) ? $features_item->link : '';
					$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
					$open_new_tab = $features_item->open_new_tab;
					?>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
							<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
								<?php if ( ! empty( $image ) ) { ?>
									<div class="service-icon">
										<?php if ( ! empty( $link ) ) { ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
											   <img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
											</a>
										<?php } ?>	
										<?php if ( empty( $link ) ) { ?>	
												<img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
										<?php } ?>	
									</div>
								<?php } ?>
							<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
								<?php if ( ! empty( $icon ) ) { ?>
									<div class="service-icon">
										<?php if ( ! empty( $link ) ) { ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
												<i class="fa <?php echo esc_html( $icon ); ?> icon-lg  icon-bg icon-bg-circle mb-3"></i>
											</a>
										<?php } ?>
										<?php if ( empty( $link ) ) { ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
										<?php } ?>
									</div>
								<?php } ?>
							<?php } ?>
							<?php if(!empty($title)) { ?>
								<div class="inner-header">
									<?php if(!empty($link)) { ?>
										<h4 class="inner-title mb-3">
											<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>
										</h4>
									<?php } else { ?>
										<h4 class="inner-title mb-3"><?php echo esc_html( $title ); ?></h4>
									<?php } ?>
								</div>
							<?php } ?>
							<div class="inner-content">
								<?php if ( ! empty( $text ) ) { ?>
									<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
								<?php } 
								    if ( ! empty( $link ) ) { ?>
								<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes') { echo "target='_blank'"; } ?> class="more-link"><?php esc_html_e('Read More','wpfrank-companion'); ?></a>
									<?php } ?>
							</div>
						</article>
					</div><?php
				} 
			} else { ?>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div class="service-icon"><i class="fas fa-object-ungroup icon-lg  icon-bg icon-bg-circle mb-3"></i></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#"><?php esc_html_e('Networking','wpfrank-companion') ?></a></h4></div>
								<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
									<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
								</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div class="service-icon"><i class="fas fa-users icon-lg  icon-bg icon-bg-circle mb-3"></i></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#"><?php esc_html_e('Social Activity','wpfrank-companion') ?></a></h4></div>
								<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
								<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
								</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
								<div class="service-icon"><i class="fas fa-desktop icon-lg  icon-bg icon-bg-circle mb-3"></i></div>
								<div class="inner-header"><h4 class="inner-title mb-3"><a href="#"><?php esc_html_e('Web Design','wpfrank-companion') ?></a></h4></div>
								<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
								<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
								</div>
						</article>
					</div>
			<?php
			} ?>
		</div>
	</div>
</section>
<!-- Service Section -->
<?php } ?>