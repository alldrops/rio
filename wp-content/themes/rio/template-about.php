<?php /* Template Name: Template - About */ ?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<?php # SECTION - ABOUT US ?>

		<section class="content-block" >
			<div class="wrapper">
				<?php the_content(); ?>
			</div>
		</section>
		

		<?php # SECTION - MENU DESCRIPTION ?>

		<?php $menu_section_image = get_field('menu_section_image'); ?>
		<?php $menu_section_description = get_field('menu_section_description'); ?>

		<?php if(!empty($menu_section_image)) { ?>
			<section class="content-block full-width dark-overlay" style="background: url('<?php $print_image = wp_get_attachment_image_src( $menu_section_image, 'full' ); echo $print_image[0]; ?>') no-repeat center top; background-size: cover;">
				<div class="wrapper">
					<div class="inner-wrapper">
						<?php if(!empty($menu_section_description)) { ?>
							<?php echo $menu_section_description ?>
							<a href="/rio/menu" class="button white center">CHECK OUR MENU</a>
						<?php } ?>
					</div>
				</div>
			</section>
		<?php } ?>

		<?php # SECTION - ABOUT US 2 ?>

		<?php $about_description_2 = get_field('second_description') ?>

		<?php if(!empty($about_description_2)) { ?>
			<section class="content-block" >
				<div class="wrapper">
					<?php echo $about_description_2; ?>
				</div>
			</section>
		<?php } ?>




		<?php # SECTION - GALLERY FEATURED ?>

		<?php if( have_rows('menu_images') ): ?>
			<section class="content-block gallery-section">
				<div class="wrapper">

					<?php if(!empty($gallery_section_title)) { ?>
						<h2><?php echo $gallery_section_title ?></h2>
					<?php } ?>
					<div class="gallery-featured">
						<ul>
							<?php while( have_rows('menu_images') ): the_row(); ?>
								<?php $image = get_sub_field('image'); ?>
								<li>
									<a href="/rio/gallery">
										<img src="<?php $print_image = wp_get_attachment_image_src( $image, 'square_img' ); echo $print_image[0]; ?>" alt="">
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
					<a href="/gallery/menu" class="button green">See all</a>
				</div>
			</section>			
		<?php endif; ?>

	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>
