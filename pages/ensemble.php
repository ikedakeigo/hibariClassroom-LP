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

<div class="en-wrap fade load-anim">
  <div class="inner">

    <div class="bg-color__item6"></div>
    <!-- hero -->
    <section class="p-hero l-hero" id="hero">
      <div class="p-hero__inner inner">
        <header class="p-hero__title-wrap">
          <h2 class="p-hero__title">
            <span>みんなで奏でて</span> <br>
            <span>「合う」を楽しむ</span> <br>
            <span>合奏倶楽部です</span>
          </h2>
        </header>
        <div class="p-hero__wrap lFixedBg">
          <!-- 左側の画像グループ -->
          <div class="p-hero__images-group p-hero__images-group--left">
            <figure class="p-hero__image p-hero__image--left">
              <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero_imag01.png" alt="合奏を楽しむメンバーの様子">
            </figure>
            <figure class="p-hero__image p-hero__image--left">
              <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero_imag02.png" alt="合奏を楽しむメンバーの様子">
            </figure>
            <figure class="p-hero__image p-hero__image--left">
              <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero_imag03.png" alt="合奏を楽しむメンバーの様子">
          </div>
          <!-- 右側の画像グループ -->
          <div class="p-hero__images-group p-hero__images-group--right">
            <figure class="p-hero__image p-hero__image--right">
              <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero_imag04.png" alt="合奏を楽しむメンバーの様子">
            </figure>
            <figure class="p-hero__image p-hero__image--right">
              <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero_imag05.png" alt="合奏を楽しむメンバーの様子">
            </figure>
            <!-- </div> -->
          </div>
        </div>

        <!-- 背景の形状 -->
        <div class="shape-group">
          <div class="shape" data-shape="circle" data-color="blue"></div>
          <div class="shape" data-shape="circle" data-color="green"></div>
          <div class="shape" data-shape="circle" data-color="pink"></div>
          <div class="shape" data-shape="triangle" data-color="blue"></div>
          <div class="shape" data-shape="triangle" data-color="pink"></div>
          <div class="shape" data-shape="square" data-color="green"></div>
          <div class="shape" data-shape="square" data-color="yellow"></div>
          <div class="shape" data-shape="note"></div>
          <div class="shape" data-shape="note" data-number="2"></div>
          <div class="shape" data-shape="line" data-color="blue"></div>
          <div class="shape" data-shape="line" data-color="pink"></div>
        </div>

      </div>
    </section>

    <div class="wave-container">
      <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
        preserveAspectRatio="none">
        <path
          fill="#fef8e7"
          fill-opacity="1"
          d="M0,0 C300,0 900,320 1440,240 L1440,320 L0,320 Z"></path>
      </svg>
    </div>

    <div class="bg-color__item1"></div>

    <!-- scroll-image -->
    <section class="p-scroll-image l-scroll-image" id="">
      <div class="p-scroll-image__inner inner">
        <div class="p-scroll-image__wrap">
          <figure class="p-scroll-image__item">
            <img src="<?php echo get_template_directory_uri(); ?>/image/hero/hero-bottom.png" alt="合奏を楽しむメンバーの様子">
          </figure>
        </div>
      </div>
    </section>

    <!-- about -->
    <section class="p-about l-about" id="">
      <div class="p-about__inner inner">
        <div class="p-about__title-wrap">
          <h2 class="p-about__title">
            <span class="first">ひばり合奏倶楽部とは</span><br>
            <span>
              大切にしているのは、<br>
              音を通して<br>
              人と人の繋がりを<br>
              感じる心。
            </span>
          </h2>
          <p class="p-about__sub-title sub-title">
            一人ひとりの<br>
            「こう弾きたい！」を引き出しつつ、<br>
            仲間の「こう弾きたい！」も尊重し、<br>
            音を通して人と会話出来る楽しさや<br>
            幸せを表現出来るようになります♪<br>
            また仲間と音を重ね合わせる過程で、<br>
            音楽の理論と生徒の感受性の<br>
            両方を育てます！
          </p>
        </div>
        <!-- 背景の形状 -->
        <div class="shape-group">
          <div class="shape" data-shape="circle" data-color="blue"></div>
          <div class="shape" data-shape="circle" data-color="green"></div>
          <div class="shape" data-shape="circle" data-color="pink"></div>
          <div class="shape" data-shape="triangle" data-color="blue"></div>
          <div class="shape" data-shape="triangle" data-color="pink"></div>
          <div class="shape" data-shape="square" data-color="green"></div>
          <div class="shape" data-shape="square" data-color="yellow"></div>
        </div>
        <div class="p-about__image-item01">
          <picture>
            <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/image/about/about-image-pc.png" media="(min-width: 768px)"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/image/about/about_image01.png" alt="ひばり合奏倶楽部の様子">
          </picture>
        </div>
        <div class="p-about__image-item02">
          <picture>
            <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/image/about/about-image-pc.png" media="(min-width: 768px)"> -->
            <img src="<?php echo get_template_directory_uri(); ?>/image/about/about_image02.png" alt="ひばり合奏倶楽部の様子">
          </picture>
        </div>
      </div>
    </section>

    <div class="bg-color__item2"></div>

    <!-- work -->
    <section class="p-work l-work" id="">
      <div class="p-work__inner">
        <div class="p-work__title-wrap">
          <h4 class="p-work__sub-title sub-title">
            ひばり合奏倶楽部の
          </h4>
          <h2 class="p-work__title main-title">
            <span>2つのクラス</span>
          </h2>
          <div class="title-icon-group">
            <div class="shape" data-shape="circle" data-color="gray"></div>
            <div class="shape" data-shape="circle" data-color="pink"></div>
            <div class="shape" data-shape="triangle" data-color="blue"></div>
            <div class="shape" data-shape="triangle" data-color="green"></div>
            <div class="shape" data-shape="square" data-color="yellow"></div>
            <div class="shape" data-shape="square" data-color="yellow" data-number="2"></div>
          </div>
        </div>
        <div class="p-work__wrap">
          <div class="p-work__class-container">

            <!-- ひばりっ子音楽隊 -->
            <div class="p-work__class-item pink">
              <h4 class="p-work__class-description">小学生以下</h4>
              <h3 class="p-work__class-title">ひばりっ子音楽隊</h3>
            </div>

            <!-- ひばりジュニア弦楽アンサンブル -->
            <div class="p-work__class-item green">
              <h4 class="p-work__class-description">一定レベルをクリアした、<br class="is-sp">小学生〜大学生</h4>
              <h3 class="p-work__class-title">ひばりジュニア<br class="is-sp">弦楽アンサンブル</h3>
            </div>
          </div>

          <div class="p-work__class-wrap item01">
            <!-- ひばりっ子音楽隊の詳細情報 -->
            <div class="p-work__details">
              <h4 class="p-work__details-title">ひばりっ子音楽隊</h4>
              <p class="p-work__details-description">
                小学生以下を対象とし、楽器はなんでもOK！ （カスタネットなどの打楽器も大丈夫です）リトミック×アンサンブルで楽しく学びます♪楽譜や音符に捉われず、自分の感じた音楽を表現し、それが周りの子とどんな化学反応を起こすのか…是非体感してみてほしいです！
              </p>
              <!-- 練習内容 -->
              <div class="p-work__practice">
                <div class="p-work__practice-head">
                  <h5 class="p-work__practice-title">練習内容</h5>
                </div>
                <p class="p-work__practice-description">
                  様々な楽器を使い、みんなで音楽を奏でます♪ <br>
                  例えばハンドベルでは1人1音ずつ担当し、みんなで協力して一つの曲を奏で、時には合唱なども取り入れつつ、自然と協調性やリズム感など、音楽に必要な力を身につけていきます。
                </p>
              </div>
              <!-- 開催日時 -->
              <div class="p-work__schedule">
                <div class="p-work__practice-head">
                  <h5 class="p-work__schedule-title">開催日時</h5>
                </div>
                <p class="p-work__schedule-description">
                  月1回 <br class="is-sp">基本的に日曜日 <br class="is-sp">13:00〜14:30
                </p>
              </div>
              <!-- 価格 -->
              <div class="p-work__price">
                <div class="p-work__practice-head">
                  <h5 class="p-work__price-title">価格</h5>
                </div>
                <p class="p-work__price-description">1回：3,300円（税込）</p>
              </div>
            </div>
            <!-- 画像セクション -->
            <div class="p-work__images">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image01.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image02.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image03.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image04.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
            </div>
          </div>

          <div class="p-work__class-wrap">
            <!-- ひばりジュニア弦楽アンサンブルの詳細情報 -->
            <div class="p-work__details">
              <h4 class="p-work__details-title green">ひばりジュニア<br class="is-sp">弦楽アンサンブル</h4>
              <p class="p-work__details-description">
                一定レベル（講師判断）をクリアした、小学生〜大学生の弦楽合奏団！イベントに向けて専門的な楽曲に取り組んでいきます。今年度はクリスマスコンサートに向けてコレルリ作曲 合奏協奏曲第8番ト短調「クリスマス協奏曲」を行う予定です♪ ※楽章未定
              </p>
              <!-- 練習内容 -->
              <div class="p-work__practice">
                <div class="p-work__practice-head green">
                  <h5 class="p-work__practice-title green">練習内容</h5>
                </div>
                <p class="p-work__practice-description">
                  クラシックなどの楽曲を用いて、ソロではなくアンサンブルだからこそ得られる協調性や、パートごとの役割を通して楽曲の音楽的な仕組みを学ぶなど、表現力を身につけていきます。時には講師の作曲した楽曲を用いて、直接作曲者から曲に込めた思いや意図などを聞きながら、練習に取り入れていきます。
                </p>
              </div>
              <!-- 開催日時 -->
              <div class="p-work__schedule">
                <div class="p-work__practice-head green">
                  <h5 class="p-work__schedule-title green">開催日時</h5>
                </div>
                <p class="p-work__schedule-description">
                  月1回 <br class="is-sp">基本的に日曜日 <br class="is-sp">14:30〜16:00
                </p>
              </div>
              <!-- 価格 -->
              <div class="p-work__price">
                <div class="p-work__practice-head green">
                  <h5 class="p-work__price-title green">価格</h5>
                </div>
                <p class="p-work__price-description">1回：3,300円（税込）</p>
              </div>
            </div>
            <!-- 画像セクション -->
            <div class="p-work__images">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image05.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image06.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image07.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
              <img src="<?php echo get_template_directory_uri(); ?>/image/work/work_image08.png" alt="ひばりっ子音楽隊の画像1" class="p-work__image">
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- 波ピンク -->
    <div class="wave-container__item2">
      <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
        preserveAspectRatio="none">
        <path
          fill="#fae7db"
          fill-opacity="1"
          d="M0,0 C300,0 900,320 1440,240 L1440,320 L0,320 Z"></path>
      </svg>
    </div>

    <div class="bg-color__item3"></div>

    <!-- 波みどり -->
    <div class="wave-container__item3">
      <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
        preserveAspectRatio="none">
        <path
          fill="#A8D5A2"
          fill-opacity="1"
          d="M0,240 C540,320 1140,0 1440,0 L1440,320 L0,320 Z"></path>
      </svg>
    </div>

    <div class="bg-color__item4"></div>

    <!-- teacher -->
    <section class="p-teacher l-teacher" id="">
      <div class="p-teacher__inner">
        <div class="p-teacher__title-wrap">
          <h2 class="p-teacher__title main-title">
            <span>講師</span>
          </h2>

          <div class="title-icon-group">
            <div class="shape" data-shape="circle" data-color="gray"></div>
            <div class="shape" data-shape="circle" data-color="pink"></div>
            <div class="shape" data-shape="triangle" data-color="blue"></div>
            <div class="shape" data-shape="triangle" data-color="green"></div>
            <div class="shape" data-shape="square" data-color="yellow"></div>
            <div class="shape" data-shape="square" data-color="yellow" data-number="2"></div>
          </div>

        </div>
        <div class="p-teacher__wrap">

          <!-- 講師カード -->
          <div class="p-teacher__card">
            <h4 class="p-teacher__role">teacher</h4>
            <h3 class="p-teacher__name">大熊勇希 部長</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image01.png" alt="大熊勇希 部長" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

          <div class="p-teacher__card">
            <h4 class="p-teacher__role">teacher</h4>
            <h3 class="p-teacher__name">山内睦大 副部長</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image02.png" alt="山内睦大 副部長" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

          <div class="p-teacher__card">
            <h4 class="p-teacher__role">teacher</h4>
            <h3 class="p-teacher__name">井木恵</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image03.png" alt="井木恵" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

          <div class="p-teacher__card">
            <h4 class="p-teacher__role">teacher</h4>
            <h3 class="p-teacher__name">ジョンソン愛梨</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image04.png" alt="ジョンソン愛梨" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

          <!-- Advisor Cards -->
          <div class="p-teacher__card advisor">
            <h4 class="p-teacher__role">advisor</h4>
            <h3 class="p-teacher__name">井上佳那子</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image05.png" alt="井上佳那子" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

          <div class="p-teacher__card advisor">
            <h4 class="p-teacher__role">advisor</h4>
            <h3 class="p-teacher__name">北村明日人</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/teacher/teacher_image06.png" alt="北村明日人" class="p-teacher__image">
            <a href="#" class="p-teacher__button">詳しくは →</a>
          </div>

        </div>

      </div>
    </section>

    <div class="bg-color__item5"></div>

    <!-- access -->
    <section class="p-access l-access" id="">
      <div class="p-access__inner inner">
        <div class="p-access__title-wrap">
          <h2 class="p-access__title main-title">
            <span>アクセス</span>
          </h2>

          <div class="title-icon-group">
            <div class="shape" data-shape="circle" data-color="gray"></div>
            <div class="shape" data-shape="circle" data-color="pink"></div>
            <div class="shape" data-shape="triangle" data-color="blue"></div>
            <div class="shape" data-shape="triangle" data-color="green"></div>
            <div class="shape" data-shape="square" data-color="yellow"></div>
            <div class="shape" data-shape="square" data-color="yellow" data-number="2"></div>
          </div>
        </div>

        <div class="p-access__wrap">
          <!-- 開催場所 -->
          <div class="p-access__location">
            <p>開催場所 結城ホール（ラポルテの西館一階）</p>
          </div>

          <!-- 地図表示 -->
          <div class="p-access__map">
            <div class="p-access__map-inner">
              <p>地図</p>
            </div>
            <a href="https://www.google.com/maps" target="_blank" class="p-access__map-link">Google Maps で見る</a>
          </div>

          <!-- 住所情報 -->
          <div class="p-access__address">
            <p>〒665-0804 兵庫県宝塚市武庫川町4-1 ラポルテ西館1F<br>
              JR 宝塚駅前ラポルテ4F JR宝塚駅北側階段を降ってすぐ<br>
              阪急宝塚駅徒歩8分</p>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section class="p-contact l-contact  " id="">
      <div class="p-contact__inner">
        <div class="p-contact__title-wrap">
          <h2 class="p-contact__title main-title">
            <span>お申し込み <br class="is-sp">お問い合わせ</span>
          </h2>

          <div class="title-icon-group">
            <div class="left">
              <div class="shape" data-shape="circle" data-color="gray"></div>
              <div class="shape" data-shape="triangle" data-color="blue"></div>
              <div class="shape" data-shape="square" data-color="yellow" data-number="2"></div>
            </div>
            <div class="right">
              <div class="shape" data-shape="circle" data-color="pink"></div>
              <div class="shape" data-shape="triangle" data-color="green"></div>
              <div class="shape" data-shape="square" data-color="yellow"></div>
            </div>
          </div>
        </div>
        <div class="p-contact__detail">
          <p>
            レッスンに関するご質問・お問い合わせは、こちらのメールフォームより承ります。<br>
            必要事項をご入力の上、「確認画面へ」ボタンをクリックしてください。<br>
            ※メールの場合、ご返信が少し遅くなることがあります。<br>
            お急ぎの方は、直接お電話をくださいますようお願いします。
          </p>
        </div>
        <div class="p-contact__wrap">

          <!-- お問い合わせフォーム -->
          <form class="p-contact__form" action="">
            <dl class="p-contact__form-wrap course">
              <dt class="p-contact__form-label">お問い合わせのコース<span class="p-contact__label-optional"></span></dt>
              <dd class="p-contact__form-input">
                <label><input type="radio" name="course" value="ひばりっ子音楽隊"> ひばりっ子音楽隊</label>
                <label><input type="radio" name="course" value="ひばり弦楽アンサンブル"> ひばり弦楽アンサンブル</label>
              </dd>
            </dl>
            <dl class="p-contact__form-wrap course">
              <dt class="p-contact__form-label"><span class="p-contact__label-optional"></span></dt>
              <dd class="p-contact__form-input">
                <label><input type="radio" name="inquiry-type" value="見学希望"> 見学希望</label>
                <label><input type="radio" name="inquiry-type" value="入会希望"> 入会希望</label>
              </dd>
            </dl>
            <dl class="p-contact__form-wrap">
              <dt class="p-contact__form-label">お名前<span class="p-contact__label-required"></span></dt>
              <dd class="p-contact__form-input">
                <input type="text" name="name" placeholder="山田 太郎" required>
              </dd>
            </dl>
            <dl class="p-contact__form-wrap">
              <dt class="p-contact__form-label">フリガナ<span class="p-contact__label-required"></span></dt>
              <dd class="p-contact__form-input">
                <input type="text" name="furigana" placeholder="ヤマダ タロウ" required>
              </dd>
            </dl>
            <dl class="p-contact__form-wrap">
              <dt class="p-contact__form-label">メールアドレス<span class="p-contact__label-required"></span></dt>
              <dd class="p-contact__form-input">
                <input type="email" name="email" placeholder="sample@sample.com" required>
              </dd>
            </dl>

            <dl class="p-contact__form-wrap">
              <dt class="p-contact__form-label">電話番号<span class="p-contact__label-optional"></span></dt>
              <dd class="p-contact__form-input">
                <input type="tel" name="phone" placeholder="090-1234-5678">
              </dd>
            </dl>

            <dl class="p-contact__form-wrap p-contact__form-wrap--textarea is-last">
              <dt class="p-contact__form-label">お問い合わせ内容<span class="p-contact__label-optional"></span></dt>
              <dd class="p-contact__form-textarea">
                <textarea name="message" placeholder="ここにお問い合わせ内容をご記入ください。"></textarea>
              </dd>
            </dl>

            <div class="p-contact__form-submit">
              <button type="submit" class="p-contact__submit-button">確認画面へ</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
