<?php get_header();
?>



<div class="loader" style="position: fixed;width: 100%;height: 100vh;background-color: #E8E3D8;z-index: 555;top: 0;left: 0;">
	<div class="load" style="width:300px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);"><img src="/wp-content/uploads/2023/04/loading.png"></div>
</div>

// jQuery
<script>
	$(function() {
		function end_loader() {
			$('.loader').fadeOut(800);
		}
		$(window).on('load', function() {
			setTimeout(function() {
				end_loader();
			}, 1000)
		})
	})
</script>



<div id="top" class="main">

	<div class="hibari-slider hibari-slider-pc">
		<div><img src="/wp-content/uploads/2023/03/hibari-topimage7@2x-100.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hr-slide-image2@2x-80-min.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hr-slide-image3@2x-80-min.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hr-slide-image4@2x-80-min.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hr-slide-image5@2x-80-min.jpg"></div>
	</div>

	<div class="hibari-slider hibari-slider-sp">
		<div><img src="/wp-content/uploads/2023/04/hibari-topsp-image5.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hibari-topsp-image4.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hibari-topsp-image3.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hibari-topsp-image2.jpg"></div>
		<div><img src="/wp-content/uploads/2023/04/hibari-topsp-image1.jpg"></div>
	</div>

	<div class="hibari-blog-wrap relative">
		<div class="relative">
			<img class="title blog-title" src="/wp-content/uploads/2024/04/whatsnew-text.png">
			<p>ひばり音楽教室の最新情報</p>
			<a href="/blog"></a>
		</div>
	</div>

	<div class="our-wrap fade set-anim">
		<div class="our-wrapback">
			<div class="our-inner flex mx-width">
				<div class="our-text">
					<img class="subtitle" src="/wp-content/uploads/2023/03/our-titleimage1@2x.png">
					<img class="title" src="/wp-content/uploads/2023/03/our-titleimage2@2x.png">
					<p class="text">ひばり音楽教室が一番に考えているのは、音楽の素晴らしさを感じる豊かな心を育てること。
						<br>だから、レッスンはいつも楽しく真剣に。厳しい指導をするのではなく、生徒さん一人ひとりの声に耳を傾け、
						特性を理解し、共に音楽と向き合います。<br>技術やコンクールの成績は、そうやって音楽に取り組むうちに自然とついてくるものだと考えています。
					</p>
					<a class="hibari-btn" href="/about"><span><img src="/wp-content/uploads/2023/03/hibari-btn-onpu-image@2x.png"></span>私たちの想い</a>
				</div>
				<div class="our-image">
					<img class="pc" src="/wp-content/uploads/2023/03/hibari-ourimage@2x.png">
					<img class="sp" src="/wp-content/uploads/2023/04/our-wrapimage4@2x-100.jpg">
				</div>
			</div>

		</div>
		<div class="our-wrap-inner relative fade set-anim">
			<div class="our-bottomimage mx-midlewidth">
				<img class="pc" src="/wp-content/uploads/2023/03/ourwrap-bottom-image@2x-min.png">
			</div>
		</div>
		<div class="our-image-sp"><img class="sp" src="/wp-content/uploads/2023/04/ourbottom-imagesp2@2x-min.png"></div>

		<div class="teachers-wrap fade set-anim">
			<div class="teacherswrap-inner mx-midlewidth">
				<div class="teachers-inner flex">
					<div>
						<img src="/wp-content/uploads/2023/03/teachers-image1@2x-100-min.jpg">
					</div>
					<div>
						<img class="subtitle" src="/wp-content/uploads/2023/03/hibari-teachers-titleimage@2x.png">
						<img class="title" src="/wp-content/uploads/2023/03/teachers-titleimage@2x.png">
						<p class="text">講師は、ひばり音楽教室の指導方針に賛同する音楽家たち。<br>コンクールの受賞者や海外留学経験者もおり、豊富な経験から一人ひとりに合わせて最適な指導を行います。</p>
						<a class="hibari-btn" href="/teachers"><span><img src="/wp-content/uploads/2023/03/hibari-btn-onpu-image@2x.png"></span>講師のご紹介</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="ft-wrap fade set-anim">
		<div class="ft-inner">
			<div class="ft-backimage">
				<img src="/wp-content/uploads/2023/03/hibari-ft-image1@2x-100.jpg">
			</div>
			<div class="ft-text flex">
				<div>
					<img class="subtitle" src="/wp-content/uploads/2023/03/hibari-ft-image3@2x.png">
					<img class="title" src="/wp-content/uploads/2023/03/hibari-ft-image2@2x.png">
				</div>
				<div>
					<p class="text">私たちは、演奏について叱ることはありません。<br>どうしたら生徒が理想とする演奏に近づけるか、苦手を克服できるか、生徒の目線で考え指導します。<br>
						だから、音楽がもっと楽しくなるし、好きになれる。<br>好きになれるからこそ、上達もすると思うのです。</p>
					<a class="hibari-btn" href="/feature"><span><img src="/wp-content/uploads/2023/03/hibari-btn-onpu-image@2x.png"></span>レッスンの特徴と感想</a>
				</div>
			</div>
		</div>
	</div>

	<div class="ls-wrap fade set-anim">
		<div class="ls-inner mx-midlewidth">
			<div class="ls-title-wrap flex">
				<div>
					<img class="subtitle" src="/wp-content/uploads/2023/03/hibari-ft-image3@2x.png">
					<img class="title" src="/wp-content/uploads/2023/03/hibari-ft-image2@2x.png">
				</div>
				<div>
					<a class="hibari-btn" href="/lesson"><span><img src="/wp-content/uploads/2023/03/hibari-btn-onpu-image@2x.png"></span>レッスン・価格</a>
				</div>
			</div>
			<div class="ls-content flex">
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image3@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image9@2x.png">
				</div>
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image4@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image10@2x.png">
				</div>
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image5@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image11@2x.png">
				</div>
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image6@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image12@2x.png">
				</div>
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image7@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image13@2x.png">
				</div>
				<div class="images relative">
					<img src="/wp-content/uploads/2023/03/ls-image8@2x-100.jpg">
					<img class="absolute" src="/wp-content/uploads/2023/03/ls-image14@2x.png">
				</div>
			</div>
		</div>
	</div>

	<div class="achievement-wrap fade set-anim">
		<div class="achievement-inner flex mx-width">
			<div class="text">
				<img class="pc" src="/wp-content/uploads/2023/03/ac-title-image@2x.png">
				<img class="sp" src="/wp-content/uploads/2023/04/achievement-titleimage@2x.png">
				<ul>
					<li>・全日本学生音楽コンクール大阪大会第2位、全国大会第3位</li>
					<li>・日本クラシック音楽コンクール第3位、第4位、全国大会出場</li>
					<li>・大阪国際音楽コンクール第1位、エスポアール賞</li>
					<li>・あおによしコンクール第4位</li>
					<li>・関西弦楽コンクール優良賞</li>
					<li>・ベーテン音楽コンクール第2位</li>
					<li>・セシリア国際コンクール第2位</li>
					<li>・国際ジュニア音楽コンクール第1位</li>
					<li>・子供のためのヴァイオリンコンクール金賞及び奨励賞</li>
					<li>その他</li>
				</ul>
			</div>
			<div class="images">
				<img src="/wp-content/uploads/2023/03/ac-image2@2x-100.jpg">
			</div>
		</div>

		<div class="lsbottom-wrap fade set-anim">
			<div class="lsbottom-inner">
				<div class="lsbottom-title-wrap flex">
					<div class="lsbottom-left">
						<img class="subtitle" src="/wp-content/uploads/2023/04/lsbottom-image1@2x.png">
						<img class="title" src="/wp-content/uploads/2023/04/lsbottom-image2@2x.png">
					</div>
					<div class="lsbottom-right">
						<a class="hibari-btn" href="/studio"><span><img src="/wp-content/uploads/2023/03/hibari-btn-onpu-image@2x.png"></span>教室・アクセス</a>
					</div>
				</div>
				<div class="lsbottom-content flex">
					<div class="relative">
						<a href="/studio#takaraduka-anchor"><img src="/wp-content/uploads/2023/04/lsbottom-image3@2x-100.jpg"></a>
						<a class="btn" href="/studio#takaraduka-anchor">宝塚教室</a>
					</div>
					<div class="relative">
						<a href="/studio#nishinomiya-anchor"><img src="/wp-content/uploads/2023/05/topbottom-image1@2x-80.jpg"></a>
						<a class="btn" href="/studio#nishinomiya-anchor">西宮教室</a>
					</div>
					<div class="relative">
						<a href="/studio#special-anchor"><img src="/wp-content/uploads/2023/05/topbottom-image3@2x-80.jpg"></a>
						<a class="btn" href="/studio#special-anchor">芦屋特別レッスン室</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();
?>