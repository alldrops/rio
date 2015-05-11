<?php /* Template Name: Template - Home */ ?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>


		<?php # SECTION - MENU ?>

		<?php $menu_section_title = get_field('menu_section_title'); ?>
		<?php if( have_rows('menu_section_items') ): ?>
			<section class="content-block menu-section">
				<div class="wrapper">

					<?php if(!empty($menu_section_title)) { ?>
						<h2><?php echo $menu_section_title ?></h2>
					<?php } ?>
					<div class="menu-featured">
						<ul>
							<?php while( have_rows('menu_section_items') ): the_row(); ?>
								<?php $menu_item_title = get_sub_field('menu_item_title'); ?>
								<?php $menu_item_image = get_sub_field('menu_item_image'); ?>
								<li>
									<a href="menu">
										<img src="<?php $print_image = wp_get_attachment_image_src( $menu_item_image, 'square_img' ); echo $print_image[0]; ?>" alt="">
										<span><?php echo $menu_item_title; ?></span>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php $menu_section_description = get_field('menu_section_description'); ?>
						<?php if(!empty($menu_section_description)) { ?>
							<?php echo $menu_section_description; ?>
						<?php } ?>
					</div>
					<a href="menu" class="button green">See all</a>
				</div>
			</section>			
		<?php endif; ?>
		
		<?php # SECTION - ABOUT US ?>

		<?php $full_width_section_image = get_field('full_width_section_image'); ?>
		<?php $full_width_section_text = get_field('full_width_section_text'); ?>

		<?php if(!empty($full_width_section_image)) { ?>
			<section class="content-block full-width dark-overlay" style="background: url('<?php $print_image = wp_get_attachment_image_src( $full_width_section_image, 'full' ); echo $print_image[0]; ?>') no-repeat center top;">
				<div class="wrapper">
					<div class="inner-wrapper">
						<?php if(!empty($full_width_section_text)) { ?>
							<?php echo $full_width_section_text ?>
							<a href="about" class="button white left">READ MORE ABOUT US</a>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php # SECTION - GALLERY ?>

		<?php $gallery_section_title = get_field('gallery_section_title'); ?>
		<?php if( have_rows('gallery_section_images') ): ?>
			<section class="content-block gallery-section">
				<div class="wrapper">

					<?php if(!empty($gallery_section_title)) { ?>
						<h2><?php echo $gallery_section_title ?></h2>
					<?php } ?>
					<div class="gallery-featured">
						<ul>
							<?php while( have_rows('gallery_section_images') ): the_row(); ?>
								<?php $image = get_sub_field('image'); ?>
								<li>
									<a href="gallery">
										<img src="<?php $print_image = wp_get_attachment_image_src( $image, 'square_img' ); echo $print_image[0]; ?>" alt="">
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
					<a href="gallery" class="button green">See all</a>
				</div>
			</section>			
		<?php endif; ?>

		<?php # SECTION - INSTAGRAM ?>

		<section class="content-block instagram-section">
			<div class="wrapper">
				<h2>INSTAGRAM</h2>
				<div id="instafeed"></div>
				<a target="_blank" href="https://instagram.com/riobraziliansteakhouse/" class="button green">See all</a>
			</div>
		</section>			

		<?php # SECTION - FACEBOOK ?>

		<section class="content-block facebook">
			<div class="wrapper">
				<div class="face-likes-wrapper">
					<h2>LIKE US ON FACEBOOK</h2>
					<div class="face-likes-container">
						<div class="fb-page" data-href="https://www.facebook.com/RioBrazilianSteakhouse" data-width="500" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/RioBrazilianSteakhouse">
									<a href="https://www.facebook.com/RioBrazilianSteakhouse">Rio Brazilian Steakhouse</a>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php # SECTION - RESERVATION ?>

		<section class="content-block reservation dark-overlay" style="background: url('http://alldrops.ca/rio/wp-content/themes/rio/images/reservation.jpg') no-repeat center top; background-size: cover;">
			<div class="wrapper">
				<h2>MAKE A RESERVATION</h2>
				<a class="rsrv-phone" href="tel:604-568-7722">(604) 568-7722</a>
				<span>or</span>
				<a href="http://www.opentable.com/rest_profile.aspx?rid=92896&restref=92896&intcmp=dcw" target="_blank" class="button white">MAKE AN ONLINE RESERVATION</a>
			</div>
		</section>


	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>
