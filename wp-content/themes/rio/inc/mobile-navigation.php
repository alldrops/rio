<div class="menu-wrap">
	<nav class="mobile-nav">
		<?php 
			wp_nav_menu( array(
			    'theme_location' => 'main-nav',
			    'container' => false,
			    'menu_class' => '',
			    'menu_id' => ''
			) ); 
		?>
	</nav>
</div>
<a href="#" class="menu-icon" id="open-button"></a>