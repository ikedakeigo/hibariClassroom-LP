[/* ここにあるやつ書けばいいよ */

//slider
<script>
	$('ここにクラス入れてね').slick({
		arrows: false, // 前・次のボタンを表示する
		dots: true, // ドットナビゲーションを表示する
		speed: 2500, // スライドさせるスピード（ミリ秒）
		slidesToShow: 1, // 表示させるスライド数
		autoplay: true, // 自動でスライドさせる
		swipe: false, // 操作による切り替えはさせない
		arrows: false, // 矢印非表示
		pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
		pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
		pauseOnDotsHover: false,
		swipe: false, // 操作による切り替えはさせない
		responsive: [{
			breakpoint: 601, // 600px以下のサイズに適用
			settings: {
				dots: false, // ドットナビゲーションを表示する
			},
		}, ],
	});
</script>

//投稿一覧
<?php
		$new_query = new WP_Query();
		$param = array(
			'posts_per_page' => '1', //表示件数。-1なら全件表示
			'post_type' => 'post', //カスタム投稿タイプの名称を入れる
			'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
			'orderby' => 'date', //表示順
			'order' => 'DESC', //DESC：降順、ASC：昇順
		);
		$new_query->query($param);
		if ($new_query->have_posts()) : while ($new_query->have_posts()) : $new_query->the_post();
				
			endwhile;
		endif;
		wp_reset_postdata();
		?>


//投稿詳細

<?php
if (have_posts()) : while (have_posts()) : the_post();
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
if ($thumbnail) { ?>
	<img src="<?php echo $thumbnail[0]; ?>">
<?php } 
echo get_the_title();//投稿タイトル
echo get_the_content();//投稿の本文
echo get_field('フィールド名');

endwhile;endif;
?>