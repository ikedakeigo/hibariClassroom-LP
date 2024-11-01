<?php get_header(); ?>
<div class="single-cont">
	<div class="inner">
		<div class="info flex">
			<?php
			$terms = get_the_category();
			if ($terms) {
				echo '<div class="category cat_' . $terms[0]->slug . '">' . $terms[0]->name . '</div>';
			}
			echo '<div class="date">' . get_the_date() . '</div>';
			?>
		</div>
		<div class="title">
			<?php echo get_the_title(); ?>
		</div>
		<div class="image">
			<?php
			$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
			if ($thumbnail) { ?>
				<img src="<?php echo $thumbnail[0]; ?>">
			<?php } ?>
		</div>
		<div class="content">
			<?php echo the_content(); ?>
		</div>
	</div>
	<div class="btn">
		<a class="flex" href="/blog">
			BACK
		</a>
	</div>
</div>

<?php get_footer(); ?>