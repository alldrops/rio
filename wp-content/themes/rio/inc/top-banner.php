<div class="banner">
	<?php if( have_rows('slider') ): ?>
		<div class="flexslider">
			<ul class="slides">
				<?php while( have_rows('slider') ): the_row(); ?>
					<?php $slide_image = get_sub_field('slide_image'); ?>
					<li class="slide" style="background: url('<?php $print_image = wp_get_attachment_image_src( $slide_image, 'full' ); echo $print_image[0]; ?>') no-repeat center top; background-size: cover;"></li>
				<?php endwhile; ?>
			</ul>
		</div>
	<?php endif; ?>
	<div class="banner-content">
		<?php $logo_or_title = get_field('logo_or_title'); ?>

		<?php if($logo_or_title == 'logo') { ?>
			<span class="logo-banner">Rio Brazilian Steakhouse</span>
		<?php } else { ?>
			<?php $banner_title = get_field('title'); ?>
			<?php if(!empty($banner_title)) { ?>
				<h2 class="banner-title"><?php echo $banner_title; ?></h2>
			<?php } ?>
		<?php } ?>

	</div>
</div>