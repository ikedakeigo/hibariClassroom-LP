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

	<?php
	if (!is_page('ensemble') && !is_page('en-contact-confirm')) : ?>
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
							<li><a href="/studio">教室・アクセス</a></li>
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
	<?php else : ?>

		<!-- fontfamilyに必要なscript -->
		<script>
			(function(d) {
				var config = {
						kitId: 'dpn5pbx',
						scriptTimeout: 3000,
						async: true
					},
					h = d.documentElement,
					t = setTimeout(function() {
						h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
					}, config.scriptTimeout),
					tk = d.createElement("script"),
					f = false,
					s = d.getElementsByTagName("script")[0],
					a;
				h.className += " wf-loading";
				tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
				tk.async = true;
				tk.onload = tk.onreadystatechange = function() {
					a = this.readyState;
					if (f || a && a != "complete" && a != "loaded") return;
					f = true;
					clearTimeout(t);
					try {
						Typekit.load(config)
					} catch (e) {}
				};
				s.parentNode.insertBefore(tk, s)
			})(document);
		</script>

		<style>
			#header {
				a {
					color: #333;
					font-family: "fot-tsukuardgothic-std", sans-serif;
				}
			}
		</style>

		<header id="header" class="header-group relative fixed en-header" role="banner">
			<!-- pc header -->
			<div class="header-wrap flex">
				<div class="header-logo en-header-logo">
					<a href="">ひばり合奏倶楽部</a>
				</div>
				<div class="header-menu en-header-menu">
					<ul class="flex mr-30">
						<li><a href="#about">ひばり合奏倶楽部について</a></li>
						<li><a href="#work1">ひばりっ子音楽隊</a></li>
						<li><a href="#work2">ひばり弦楽アンサンブル</a></li>
						<li><a href="#teacher">講師のご紹介</a></li>
						<li><a href="#access">教室・アクセス</a></li>
						<li><a class="en-contact-menu" href="#contact">お問い合わせ</a></li>
						<li>
							<a class="" href="/">
								<img src="/wp-content/uploads/2023/03/hibari-logo@2x.png">
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/03/hibari-insta-image@2x.png"></a>
						</li>
					</ul>
				</div>
			</div>

			<!-- sp header -->
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
						<ul style="width: 80%;">
							<li><a href="#about">ひばり合奏倶楽部について</a></li>
							<li><a href="#work1">ひばりっ子音楽隊</a></li>
							<li><a href="#work2">ひばり弦楽アンサンブル</a></li>
							<li><a href="#teacher">講師のご紹介</a></li>
							<li><a href="#access">教室・アクセス</a></li>
							<li><a href="#contact">お問い合わせ</a></li>
							<li><a href="https://www.instagram.com/hibari.musicschool" target="_blank">インスタグラム</a></li>
							<li style="border-bottom: none;"><a href="https://www.instagram.com/hibari.musicschool">
									<img src="/wp-content/uploads/2023/03/hibari-logo@2x.png">
								</a></li>
						</ul>
					</div>
				</nav>
				<div id="mask"></div>
			</div>

		</header><!-- #site-header -->
	<?php endif; ?>





	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
