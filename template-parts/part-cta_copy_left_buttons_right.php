<?php 
	$cta_copy_left_buttons_right = get_sub_field('cta_copy_left_buttons_right');
	$heading = $cta_copy_left_buttons_right['heading'];
	$copy = $cta_copy_left_buttons_right['copy'];
	$button_links = $cta_copy_left_buttons_right['button_links'];
	$remove_tp = $cta_copy_left_buttons_right['remove_top_padding'];
	$remove_bp = $cta_copy_left_buttons_right['remove_bottom_padding'];

?>
<div class="cta_copy_left_buttons_right module-padding<?php if($remove_tp) { echo ' ntp'; }; if($remove_bp) { echo ' nbp'; };?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="white-bg br-12 grid-pattern granite">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-center align-middle">
							<?php 
							if(  !empty($heading) ||  !empty($copy) ) {
								echo '<div class="cell small-12 medium-10 tablet-5">';
								
								if( !empty($heading) ) {								
									echo '<h2 class="h4"><b>' . $heading . '</b></h2>';
								};
								if( !empty($copy) ) {
									echo '<div class="copy-wrap">' . $copy . '</div>';
								};
								
								echo '</div>';
							};?>
							<?php if( !empty($button_links) ) {
								echo '<div class="cell small-12 medium-10 tablet-5">';
								echo '<div class="buttons-wrap grid-x flex-dir-column">';
								echo '<div class="buttons grid-x flex-dir-column">';
								
								foreach($button_links as $button_link) {
									$style = $button_link['style'];
									$link = $button_link['button_link'];
									
									if( $link ) {
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										
										echo '<a class="button blue-violet-gradient-bg" href="' .  esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '?>">' . esc_html( $link_title ) . '</a>';
									};
									
								}
								
								echo '</div>';
								echo '</div>';
								echo '</div>';
							};?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>