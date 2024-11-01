<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="/wp-content/uploads/2023/05/favicon.ico"><!-- favicon設定 -->
</head>
<!-- header-menu -->

<body <?php body_class(); ?>>
	
	<!-- 注意書き -->
	<!--
	<div id="popup-background" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0, 0, 0, 0.7); z-index:9998;"></div>

<div id="custom-notice-popup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:#fff; padding:20px; box-shadow:0 0 10px rgba(0,0,0,0.5); z-index:9999;">
	<h3>お知らせとお詫び</h3>
	<div class="tyuigaki-text"><p>この度、システムの不具合により、<br>スマートフォンからのお電話が繋がらない状況がございました。</p></div>	
	<p>現在、復旧はしておりますが、<br>ご利用の皆様には大変ご不便をおかけしましたこと、<br>深くお詫び申し上げます。</p>
    <button id="close-notice">閉じる</button>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var popup = document.getElementById('custom-notice-popup');
        var popupBackground = document.getElementById('popup-background');
        var closeButton = document.getElementById('close-notice');

        popup.style.display = 'block';
        popupBackground.style.display = 'block';

        closeButton.addEventListener('click', function() {
            popup.style.display = 'none';
            popupBackground.style.display = 'none';
        });
    });
</script>-->
	<!-- 注意書きここまで -->
	
	
	<?php
	wp_body_open();
	?>
	
	
	<header id="header" class="header-group relative fixed" role="banner">
		<!-- pc header -->
		<div class="header-wrap flex">
			<div class="header-logo">
				<a href="/"><img src="/wp-content/uploads/2023/03/hibari-logo@2x.png"></a>
			</div>
			<div class="header-menu">
				<ul class="flex">
					<li><a href="/about">私たちの想い</a></li>
					<li><a href="/teachers">講師のご紹介</a></li>
					<li><a href="/feature">レッスンの特徴と感想</a></li>
					<li><a href="/lesson">レッスン・価格</a></li>
					<li><a href="/studio">教室・アクセス</a></li>
					<li><a href="/blog">What's New</a></li>
					<li><a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/03/hibari-insta-image@2x.png"></a></li>
					<li><a class="contact-menu" href="/contact">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
		<!-- pc header -->
		<div class="toggle_btn absolute">
			<div class="toggle_line absolute">
				<span class="absolute"></span>
				<span class="absolute"></span>
				<span class="absolute"></span>
			</div>
		</div>
		<div id="navArea" class="relative">
			<nav>
				<div class="inner">
					<ul>
					<li><a href="/about">私たちの想い</a></li>
					<li><a href="/teachers">講師のご紹介</a></li>
					<li><a href="/feature">レッスンの特徴と感想</a></li>
					<li><a href="/lesson">レッスン・価格</a></li>
					<li><a href="studio">教室・アクセス</a></li>
					<li><a href="/blog">What's New</a></li>
					<li><a href="https://www.instagram.com/hibari.musicschool" target="_blank">インスタグラム</a></li>
					<li><a href="/contact">お問い合わせ</a></li>
					</ul>
				</div>
			</nav>
			<div id="mask"></div>
		</div>
		<!-- <div class="top_jump"><a href="#header"></a></div> --> <!-- topにスクロールするボタン --> 
	</header><!-- #site-header -->
	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
