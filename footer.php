</div>

<?php
	if (!is_page('ensemble') && !is_page('en-contact-confirm')) : ?>
	<footer class="footer">
		<div class="footer-menu flex relative mx-width">
			<div class="images content relative logo">
				<img src="/wp-content/uploads/2023/03/hibari-logo@2x.png">
			</div>
			<div class="content relative contact">
				<div>
					<p>お問い合わせ</p>
					<a href="tel:0727557489"><img src="/wp-content/uploads/2023/04/tel.png"></a>
				</div>
			</div>
			<div class="text content relative">
				<div>
					<p>【宝塚教室】〒665-0804<br>兵庫県宝塚市雲雀丘山手2-3-6</p>
				</div>
				<div>
					<p>【西宮教室】〒662-0052<br>兵庫県西宮市霞町5-44 ヴィンテージ夙川1F</p>
				</div>
				<div class="sns flex absolute snssp">
					<a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage1@2x.png"></a>
					<a href="https://twitter.com/hibari_mschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage2@2x.png"></a>
					<a href="https://www.facebook.com/hibarimusicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage3@2x.png"></a>
				</div>
			</div>
			<div class="sns flex absolute snspc">
				<a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage1@2x.png"></a>
				<a href="https://twitter.com/hibari_mschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage2@2x.png"></a>
				<a href="https://www.facebook.com/hibarimusicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage3@2x.png"></a>
			</div>

		</div>
		<div class="copywrite">Copyright © 2023 ひばり音楽教室</div>
	</footer>
<?php else : ?>
	<footer class="footer en-footer" id="en-footer">
		<div class="footer-menu flex relative mx-width">
			<div class="images content relative footer-logo">
				ひばり合奏倶楽部
			</div>
			<div class="content relative contact">
				<div>
					<a href="#contact">お問合せ</a>
				</div>
			</div>
			<div class="content relative en-email">
				<div class="mr-50">
					<a href="mailto:hibari.music.com@gmail.com?subject=お問い合わせ&body=こちらにメッセージを入力してください。">hibari.music.com@gmail.com</a>
				</div>
				<div>
					<a href="tel:0727557489" class="en-footer-tel">072-755-7489</a>
				</div>
			</div>
			<div class="text content relative">
				<div class="en-footer-logo"><img src="/wp-content/uploads/2023/03/hibari-logo@2x.png"></div>
				<div class="sns flex absolute snssp">
					<a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage1@2x.png"></a>
					<a href="https://twitter.com/hibari_mschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage2@2x.png"></a>
					<a href="https://www.facebook.com/hibarimusicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage3@2x.png"></a>
				</div>
			</div>
			<div class="sns flex absolute snspc">
				<a href="https://www.instagram.com/hibari.musicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage1@2x.png"></a>
				<a href="https://twitter.com/hibari_mschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage2@2x.png"></a>
				<a href="https://www.facebook.com/hibarimusicschool" target="_blank"><img src="/wp-content/uploads/2023/04/hibari-foote-iconimage3@2x.png"></a>
			</div>

		</div>
		<div class="copywrite">Copyright © 2024 ひばり音楽教室</div>
	</footer>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- jQuery -->
<?php wp_footer(); ?>

<?php if (wp_is_mobile()) { ?>



<?php } else { ?> <?php } ?>
</body>

</html>
