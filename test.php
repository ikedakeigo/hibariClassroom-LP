<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="main">
    <div class="inner">
        <div class="wrapMain">
            <p class="carPhoto">
                <picture>
                    <source media="(max-width:768px)" srcset="<?php themeUrl(); ?>/assets/images/index/car-photo-sp.png"><img src="<?php themeUrl(); ?>/assets/images/index/car-photo.png">
                </picture>
            </p>
            <div class="mainCt">
                <h3 class="criteria">
                    <picture>
                        <source media="(max-width:768px)" srcset="<?php themeUrl(); ?>/assets/images/index/criteria-title-sp.svg"><img src="<?php themeUrl(); ?>/assets/images/index/criteria-title.png">
                    </picture>
                </h3>
                <div class="boxInfo">
                    <h1 class="logo"><a href="<?php homeUrl(); ?>" class="hover"><img src="<?php themeUrl(); ?>/assets/images/index/logo.png"></a></h1>
                    <p class="workTime futuraBold">OPEN<span class="arrow"><img src="<?php themeUrl(); ?>/assets/images/index/arrow.png"></span><span class="time">10:00-18:00</span></p>
					<p class="phone futuraBold"><a href="tel:0771868121">0771-86-8121<span class="phone_bottom">（12:00～13 :00は受付時間外です）</span></a></p>
                </div>
            </div>
        </div>
        <div class="mainMenu pc">
            <!-- <h3 class="menuTitle"><a href="<?php homeUrl(); ?>">トップ</a></h3> -->
            <?php wp_nav_menu(array('menu' => 'Toppage Menu', 'container' => '', 'menu_class' => 'menu')); ?>
        </div>

        <div class="spMenu sp">
            <ul class="listMenu">
                <li><a href="https://www.carsensor.net/shop/kyoto/080715003/stocklist"><img src="<?php themeUrl(); ?>/assets/images/index/sp-menu-search.svg"></a></li>
                <li><a href="https://www.mach5.jp/fc/kyotosonobe/"><img src="<?php themeUrl(); ?>/assets/images/index/sp-menu-calenda.svg"></a></li>
                <li><a href="http://car-dock.jp/contact/"><img src="<?php themeUrl(); ?>/assets/images/index/sp-menu-contact.svg"></a></li>
            </ul>
        </div>


    </div>
</div>
<!-- main -->
<div id="content">
    <div class="areaInfo">
        <div class="inner">
            <div class="wrapInfo">
                <p class="photo"><img src="/wp-content/uploads/2022/01/top-1.png"></p>
                <div class="infoCt">
                    <h2 class="infoTitle">人と人のお付き合いを大切に</h2>
                    <p class="text">大きな声と笑顔でお客様に喜んでいただけるサービスを大切にしています。<br>”安い・安心・キレイ”も魅力ではありますが、長いお付き合いをする「車」だからこそ人と人のお付き合いを大切にしたいと考え取り組んでおります。</p>
                    <p class="linkBtn"><a href="<?php homeUrl(); ?>/about">私たちについて</a></p>
                </div>
            </div>
            <div class="wrapInfo bot">
                <p class="photo"><img src="<?php themeUrl(); ?>/assets/images/index/info-photo2.png"></p>
                <div class="infoCt">
                    <h2 class="infoTitle">地域最大級の在庫数！</h2>
                    <p class="text">国産車はもちろんトラックから輸入車までオールメーカーを取り扱いしています。お客さまお一人お一人に最適なお車をご提案させていただきますので、必ずお気に入りの一台がみつかります！</p>
                    <p class="linkBtn"><a href="<?php homeUrl(); ?>/service">詳しく見る</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- areaInfo -->
    <div class="areaPoint">
        <div class="inner">
            <ul class="listPoint clearfix">
				<li><a href="/service#service_point_01"><img src="<?php themeUrl(); ?>/assets/images/index/point-photo1.png"></a></li>
				<li><a href="/service#service_point_02"><img src="<?php themeUrl(); ?>/assets/images/index/point-photo2.png"></a></li>
                <li><a href="/service#service_point_03"><img src="/wp-content/uploads/2022/01/cardock-image2@2x.png"></a></li>
                <li><a href="/service#service_point_04"><img src="<?php themeUrl(); ?>/assets/images/index/point-photo4.png"></a></li>
                <li><a href="/service#service_point_05"><img src="<?php themeUrl(); ?>/assets/images/index/point-photo5.png"></a></li>
                <li><a href="/service#service_point_06"><img src="/wp-content/uploads/2022/01/cardock-image1@2x.png"></a></li>
            </ul>
            <p class="linkBtn center"><a href="<?php homeUrl(); ?>/service">サービス内容を見る</a></p>
        </div>
    </div>
    <!-- areaPoint -->
    <div class="areaInsta">
        <div class="inner">
            <h2 class="instaTitle">
                <picture>
                    <source media="(max-width:768px)" srcset="<?php themeUrl(); ?>/assets/images/index/insta-title-sp.svg"><img src="<?php themeUrl(); ?>/assets/images/index/insta-title.png" alt="instagram">
                </picture>
            </h2>
            <p class="photo">
                <?php echo do_shortcode( '[instagram-feed]' ); ?>
            </p>
        </div>
    </div>
    <!-- areaInsta -->
    <div class="areaAccess">
        <div class="inner">
            <div class="areaTitle">
                <p class="wrapTitle">
                    <span class="dot"><img src="<?php themeUrl(); ?>/assets/images/index/dot.png"></span>
                    <span class="text">アクセス</span>
                    <span class="dot"><img src="<?php themeUrl(); ?>/assets/images/index/dot.png"></span>
                </p>
            </div>
            <div class="accessCt clearfix">
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.5215467123026!2d135.47589141524352!3d35.11865628032934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60004f22cd2f0f6d%3A0xd18d9ea57e85f5d5!2z5pel5pys44CB44CSNjIyLTAwMTIg5Lqs6YO95bqc5Y2X5Li55biC5ZyS6YOo55S65YaF5p6X55S677yT5Y-377yU!5e0!3m2!1sja!2s!4v1639818676984!5m2!1sja!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <div class="accessInfo">
                    <h3 class="infoTitle">株式会社カードックオクムラ</h3>
                    <ul class="listInfo">
                        <li>〒622-0012　京都府南丹市園部町内林町3号４</li>
						<li>Tel: <a href="tel:0771-86-8121" class="tel">0771-86-8121</a> / Fax: <a href="javascript:void(0);" class="fax">0771-86-8122</a><br>(12:00～13:00は受付時間外です)</li>
                        <li>Mail: <a href="mailto:info@cardock-okumura.com" class="mail">info@cardock-okumura.com</a></li>
                        <li>営業時間：10:00～18:00</li>
                    </ul>
                    <p class="linkBtn center"><a href="https://goo.gl/maps/gJP71ReMiGqUAixx8" target="_blank">Google Mapで見る</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- areaAccess -->
    <div class="youtube"><a href="https://www.mach5.jp/" target="_blank" class="hover"><img src="<?php themeUrl(); ?>/assets/images/index/icon-youtube.png" alt=""></a></div>
</div>
<!-- #content -->


<?php get_footer(); ?>