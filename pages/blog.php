<?php
get_header();
?>

	<div class="inner fade load-anim">
		<div class="headline">
			<img src="/wp-content/uploads/2024/04/20240422_blog.png">
		</div>
		<?php
		$categories = get_categories();
		echo '<ul class="tab-list flex">';
		echo '<li class="info_tab active" id="all">すべて</li>';
		foreach ($categories as $cat) {
			echo '<li class="info_tab" id="' . $cat->slug . '">' . $cat->name . '</li>';
		}
		echo '</ul>';
		?>

		<div class="blog-list">

		</div>
	</div>

<script type="text/javascript">
	jQuery(function($) {
		urlHash = location.hash;
		if (urlHash) {
			category = urlHash;
			$('#all').removeClass('active');
			$(category).addClass('active');
		} else {
			category = '';
		}
		$.ajax({
				url: '/wp-content/themes/custom-theme/blog-list.php',
				cache: false,
				type: 'POST',
				data: {
					'category': category,
				}
			})
			// Ajaxリクエストが成功した時発動
			.done(function(data) {
				$('.blog-list').html(data);
			});

		$('.info_tab').on('click', function() {
			$('.info_tab.active').removeClass('active');
			$(this).addClass('active');
			var category = '';
			if ($(this).attr('id') == 'all') {
				category = '';
			} else {
				category = $(this).attr('id');
			}
			$.ajax({
					url: '/wp-content/themes/custom-theme/blog-list.php',
					type: 'POST',
					cache: false,
					data: {
						'category': category,
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
		$('.page-numbers a.page-numbers').click(function(event) {
			console.log('yes');
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