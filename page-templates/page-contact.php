<?php
/**
 * Template name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lana
 */

get_header();
$fields = get_fields();
?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class('module-padding first'); ?>>
					<div class="grid-container">
						<div class="grid-x grid-padding-x<?php if( empty( $fields['form_id'] ) ):?> align-center<?php endif;?>">
							
							<?php if( !empty($fields['heading']) ||  !empty($fields['copy']) ||  !empty($fields['phone_number']) ||  !empty($fields['email_address']) ||  !empty( get_field('locations_global', 'option') ) ):?>
							<div class="left entry-content cell small-12 tablet-6 large-4 large-offset-1">
								<?php if( !empty($fields['heading']) ){
									echo '<h1>' . $fields['heading'] . '</h1>';
								};?>
								<?php if( !empty($fields['copy']) ){
									echo '<div class="copy-wrap">' . $fields['copy'] . '</div>';
								};?>
								<?php if( !empty($fields['phone_number']) ):?>
									<a class="contact-row grid-x grid-padding-x align-middle" href="tel:<?php echo esc_attr( $fields['phone_number'] );?>">
										<div class="cell shrink grid-x align-top">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9909 13.6216C16.9528 13.3858 16.8049 13.1842 16.5834 13.0644L13.3068 11.1342L13.2798 11.1191C13.1475 11.0512 12.9944 11.0163 12.8371 11.0163C12.5626 11.0163 12.3004 11.1202 12.1185 11.3026L11.1514 12.27C11.11 12.3093 10.9752 12.3662 10.9342 12.3683C10.923 12.3674 9.80898 12.2872 7.758 10.2362C5.71068 8.18967 5.62382 7.07233 5.62314 7.07233C5.62428 7.01519 5.68051 6.88081 5.72051 6.83922L6.5452 6.01487C6.83571 5.72371 6.9228 5.24103 6.75046 4.86714L4.92919 1.44063C4.79685 1.16821 4.53971 1 4.25445 1C4.05262 1 3.85788 1.08365 3.70565 1.23563L1.45764 3.4783C1.2421 3.69267 1.0565 4.06747 1.01604 4.36915C0.996381 4.51336 0.597523 7.95564 5.31754 12.6757C9.32463 16.6818 12.4492 16.9931 13.3121 16.9931C13.4977 16.9931 13.6058 16.9798 13.6266 16.9768C13.9274 16.9366 14.3018 16.7515 14.516 16.5369L16.7621 14.2912C16.9455 14.107 17.0291 13.8636 16.9909 13.6216Z" stroke="#1B1B1B" stroke-width="1.3"/></svg>
										</div>
										<div class="cell auto">
											<span><?php echo $fields['phone_number'];?></span>
										</div>
									</a>
								<?php endif;?>
								<?php if( !empty($fields['email_address']) ):?>
									<a class="contact-row grid-x grid-padding-x align-middle" href="mailto:<?php echo esc_attr( $fields['email_address'] );?>">
										<div class="cell shrink grid-x align-top">
											<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.72608 0C1.02305 0 0.453125 0.569825 0.453125 1.27273V12.7273C0.453125 13.4302 1.02305 14 1.72608 14H18.2745C18.9775 14 19.5474 13.4302 19.5474 12.7273V1.27273C19.5474 0.569825 18.9775 0 18.2745 0H1.72608ZM1.72608 1.27273H18.2745V2.44992C18.1693 2.44982 18.0629 2.47865 17.9676 2.53915L10.0003 7.5944L2.03301 2.53915C1.93766 2.47865 1.83122 2.44982 1.72608 2.44992V1.27273ZM1.72608 3.70105V12.7273H18.2745V3.70105L10.3072 8.7563C10.1199 8.87517 9.88069 8.87517 9.69334 8.7563L1.72608 3.70105Z" fill="#1B1B1B"/></svg>
										</div>
										<div class="cell auto">
											<span class="color-blue-violet">Email us</span>
										</div>
									</a>
								<?php endif;?>
								<?php if( !empty( get_field('locations_global', 'option') ) ):
									$locations_global = get_field('locations_global', 'option');
								?>
								<div class="locations">
									<?php foreach($locations_global as $location):
										$name = $location['name'];
										$address = $location['address'];
									?>
										<div class="single-location contact-row grid-x grid-padding-x">
											<div class="cell shrink grid-x align-top">
											<svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.1668 6.83608C10.1668 8.51928 8.76433 9.91062 7.0008 9.91062C5.23726 9.91062 3.83479 8.51928 3.83479 6.83608C3.83479 5.15288 5.23726 3.76155 7.0008 3.76155C8.76433 3.76155 10.1668 5.15288 10.1668 6.83608Z" stroke="#00191E" stroke-width="1.30435"/><path d="M13.3478 6.8323C13.3478 8.49678 12.4258 10.2927 11.056 12.0823C9.83855 13.6729 8.33511 15.174 7 16.4798C5.66489 15.174 4.16145 13.6729 2.94402 12.0823C1.57425 10.2927 0.652174 8.49678 0.652174 6.8323C0.652174 3.43393 3.47919 0.652174 7 0.652174C10.5208 0.652174 13.3478 3.43393 13.3478 6.8323Z" stroke="#00191E" stroke-width="1.30435"/></svg>
											</div>
											<div class="cell auto">
												<?php if( !empty($name) ):?>
													<div><b><?php echo esc_html( $name );?></b></div>
												<?php endif;?>
												<?php if( !empty($address) ):?>
													<div><?php echo $address;?></div>
												<?php endif;?>
											</div>
										</div>
									<?php endforeach;?>
								</div>
								<?php endif;?>
							</div>
							<?php endif;?>
							
							
							<?php if( !empty( $fields['form_id'] ) ) {
								echo '<div class="cell small-12 large-5 large-offset-1">';
								echo '<div class="contact-form-wrap white-bg br-12">';
								if( !empty($fields['form_heading']) ) {
									echo '<p class="form-heading"><b>' . $fields['form_heading'] . '</p></b>';
								}
								$form_id = $fields['form_id'];
								gravity_form( $form_id, false, false, false, '', true, 12 );
								echo '</div>';
								echo '</div>';
							};?>
							
						</div>
					</div>
				
					<?php get_template_part('template-parts/modules');?>
				
				</article>
				

			</main><!-- #main -->
					
		</div>
	</div>
<?php
get_footer();