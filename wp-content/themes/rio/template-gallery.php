<?php /* Template Name: Template - Gallery */ ?>

<?php include("header.php"); ?>

<div class="main-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php include("inc/top-banner.php") ?>

		<section class="content-block">
			<div class="wrapper">
				<?php the_content(); ?>
			</div>
		</section>

		<?php # SECTION - GALLERY ?>

		<?php if( have_rows('gallery_images') ): ?>
			<section class="content-block gray gallery">
				<div class="flexslider main-gallery">
					<ul class="slides">
						<?php while( have_rows('gallery_images') ): the_row(); ?>
							<?php $image = get_sub_field('image'); ?>
							<li class="slide">
								<img src="<?php $print_image = wp_get_attachment_image_src( $image, 'full' ); echo $print_image[0]; ?>" alt="">
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="flexslider thumb-gallery">
					<ul class="slides">
						<?php while( have_rows('gallery_images') ): the_row(); ?>
							<?php $image = get_sub_field('image'); ?>
							<li class="slide">
								<img src="<?php $print_image = wp_get_attachment_image_src( $image, 'thumb_carousel' ); echo $print_image[0]; ?>" alt="">
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</section>
		<?php endif; ?>

	<?php endwhile; ?>
</div>

<?php include("footer.php"); ?>
