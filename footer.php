<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lana
 */
 $form_id = get_field('newsletter_form_id', 'option') ?? null;
 $newsletter_signup_message = get_field('newsletter_signup_message', 'option') ?? null;
?>

				<footer id="colophon" class="site-footer black-bg">
					<div class="site-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 medium-6 large-3">
									<?php if( !empty( get_field('footer_logo', 'option') ) ) {
										$imgID = get_field('footer_logo', 'option')['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="logo-wrap">';
										echo $img;
										echo '</div>';
									}?>
								</div>
								<div class="cell small-12 medium-6 large-3">
									<?php lana_footer_nav();?>
								</div>
								<?php if( !empty( get_field('locations_global', 'option') ) ):
									$locations_global = get_field('locations_global', 'option');
								?>
								<div class="locations cell small-12 medium-6 large-3">
									<?php foreach($locations_global as $location):
										$name = $location['name'];
										$address = $location['address'];
									?>
										<div class="single-location">
											<?php if( !empty($name) ):?>
												<div><b><?php echo esc_html( $name );?></b></div>
											<?php endif;?>
											<?php if( !empty($address) ):?>
												<div><?php echo $address;?></div>
											<?php endif;?>
										</div>
									<?php endforeach;?>
								</div>
								<?php endif;?>
								<?php if( !empty( get_field('newsletter_title', 'option') ) || !empty( get_field('newsletter_text', 'option') ) || !empty( get_field('newsletter_form_id', 'option') ) ):?>
								<div class="footer-form-wrap cell small-12 medium-6 large-3">
									<?php if( !empty( get_field('newsletter_title', 'option') ) ):?>
									<div class="form-text">
										<?php if( !empty( get_field('newsletter_title', 'option') ) || !empty( get_field('newsletter_text', 'option') ) ):?>
										<div><b><?php the_field('newsletter_title', 'option');?></b></div>	
										<?php endif;?>
										<?php if( !empty( get_field('newsletter_text', 'option') ) ):?>
										<div><?php the_field('newsletter_text', 'option');?></div>	
										<?php endif;?>
									</div>
									<?php endif;?>
									<?php if( $newsletter_signup_message ):?>
										<div class="newsletter-message">
											<?=wp_kses_post($newsletter_signup_message);?>
										</div>
									<?php endif;?>
									<?php if( $form_id ) {
										gravity_form( $form_id, false, false, false, '', true, 12 );
									};?>
								</div>
								<?php endif;?>
							</div>
							<?php if( !empty( get_field('copyright_text', 'option') ) || wp_get_nav_menu_items('social-links') ):?>
								<hr class="granite">
								<div class="grid-x grid-padding-x">
									<?php if( !empty( get_field('copyright_text', 'option') ) ){
										$copyright_text = get_field('copyright_text', 'option');
										echo '<div class="cell auto">&copy;' . esc_attr(date('Y')) . ' ' . $copyright_text . '</div>';
									};?>
									<?php if( wp_get_nav_menu_items('social-links') ) {
										echo '<div class="cell shrink">';
										lana_social_links();
										echo '</div>';
									}?>
								</div>
							<?php endif;?>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
