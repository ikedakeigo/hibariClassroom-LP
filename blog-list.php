<?php
$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
require_once($parse_uri[0] . 'wp-load.php');
?>

<?php
$category = $_POST['category'];
$paged = ($_GET['paged']) ? absint($_GET['paged']) : 1;
$args = array(
	'post_type'      => 'post',
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => 10,
	'paged' => $paged,
	'post_status' => 'publish',
);
if (!empty($category)) {
	$args['tax_query'][0]['taxonomy'] = 'category';
	$args['tax_query'][0]['terms'] = $category;
	$args['tax_query'][0]['field'] = 'slug';
}

$top_news = new WP_Query($args);
if ($top_news->have_posts()) : while ($top_news->have_posts()) : $top_news->the_post();
		echo '<div class="box"><a class="flex" href="' . get_the_permalink() . '">';
		$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ;		
		echo '<div class="image"><img src="' . $thumbnail[0] . '"></div>';
		echo '<div class="contents"><div class="info flex">';
		$terms = get_the_category();
		if ($terms) {
			echo '<div class="category cat_' . $terms[0]->slug . '">' . $terms[0]->name . '</div>';
		}
		echo '<div class="date">' . get_the_date() . '</div>';
		echo '</div><div class="title">' . $post->post_title . '</div>';
		echo '</div></a>';
		echo '</div>';

	endwhile;
endif;

wp_reset_postdata();
$big = 999999999;

echo  paginate_links(array(
	'base' => '/wp-content/themes/custom-theme/blog-list.php%_%', //str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'show_all' => true,
	'type' => 'list',
	'format' => '?paged=%#%',
	'current' => max(1, $paged),
	'total' => $top_news->max_num_pages,
	'prev_text' => '<div class="arrow prev"><img src="/wp-content/uploads/2023/04/page-arrow.png"></div>',
	'next_text' => '<div class="arrow next"><img src="/wp-content/uploads/2023/04/page-arrow.png"></div>',
));
?>

<script type="text/javascript">
	jQuery(function($) {
		$('a.page-numbers').click(function(event) {
			event.preventDefault();
			$.ajax({
					url: $(this).attr('href'),
					type: 'POST',
					cache: false,
					data: {
						'category': '<?php echo $category ?>',
					}
				})
				// Ajaxリクエストが成功した時発動
				.done(function(data) {
					$('.blog-list').html(data);
				})
				// Ajaxリクエストが失敗した時発動
				.fail(function(data) {
					$('.blog-list').html(data);
				})
				// Ajaxリクエストが成功・失敗どちらでも発動
				.always(function(data) {

				});
		});
	});
</script>