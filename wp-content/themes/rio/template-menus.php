<?php /* Template Name: Template - Menus */ ?>

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


		<?php # SECTION - MENU ITEMS ?>
		
		<?php if( have_rows('menu_categories') ): ?>
			<section class="content-block">
				<div class="wrapper">
					<?php while( have_rows('menu_categories') ): the_row(); ?>
						<div class="menu-category">
							<?php $category_title = get_sub_field('category_title'); ?>
							<?php if(!empty($category_title)) { ?>
								<h2><?php echo $category_title; ?></h2>
							<?php } ?>

							<?php if( have_rows('category_items') ): ?>
								<ul>
									<?php while( have_rows('category_items') ): the_row(); ?>
										<?php $item_title = get_sub_field('item_title'); ?>
										<?php $item_description = get_sub_field('item_description'); ?>
										<?php $item_image = get_sub_field('item_image'); ?>

										<li>
											<?php if(!empty($item_title)) { ?>
												<h5><?php echo $item_title; ?></h5>
											<?php } ?>
											<?php if(!empty($item_description)) { ?>
												<p><?php echo $item_description; ?></p>
											<?php } ?>
											<?php if(!empty($item_image)) { ?>
												<span class="img-tooltip"><img src="<?php $print_image = wp_get_attachment_image_src( $item_image, 'square_img' ); echo $print_image[0]; ?>" alt=""></span>
											<?php } ?>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</section>
		<?php endif; ?>

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
