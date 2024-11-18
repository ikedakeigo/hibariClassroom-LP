!(function () {
  "use strict";

  // トップの波のアニメーション
  const wave = document.querySelector(".wave");

  // 他の波のアニメーション
  const waves = document.querySelectorAll(".wave__pink, .wave__green");

  // 監視対象の全てセクションを取得
  const fadeInSections = document.querySelectorAll(".fade-in-section");

  // 左右の画像グループ
  const images = document.querySelectorAll(".p-hero__image");

  // 形状要素
  const shapes = document.querySelectorAll(".shape");

  // テキスト要素
  const textSpans = document.querySelectorAll(".p-hero__title span");

  // IntersectionObserverの設定
  const observer = new IntersectionObserver(
    (entrise) => {
      entrise.forEach((entry) => {
        if (entry.isIntersecting) {
          // 波が表示領域に入ったらアニメーションを発火
          entry.target.style.transform = "translateY(0)";
          entry.target.style.opacity = "1";

          // 表示領域に入ったsection親要素内の子要素をアニメーション
          const children = entry.target.querySelectorAll(".fade-in-child");
          children.forEach((child, index) => {
            setTimeout(() => {
              child.classList.add("is-visible");
            }, index * 150); // 順次表示 数字を変えると表示速度が変わる
          });

          //一度だけ発火する場合は監視解除
          observer.unobserve(entry.target);
        }
      });
    },
    // 発火タイミング
    { rootMargin: "0px 0px -10% 0px" },
  );

  waves.forEach((wave) => {
    observer.observe(wave);
  });

  // 親要素を監視対象に追加
  fadeInSections.forEach((section) => {
    observer.observe(section);

    // 子要素にクラスを一括追加（ただし対象外の要素を除外）
    section.querySelectorAll("*").forEach((child) => {
      if (!child.classList.contains("no-animation")) {
        child.classList.add("fade-in-child");
      }
    });
  });

  // svg背景の波のアニメーション
  if (wave) {
    setTimeout(() => {
      wave.style.transform = "translateY(0)";
      wave.style.opacity = "1";
    }, 100);
  }

  // 画像と形状をランダム表示
  const elements = [...images, ...shapes]; // 要素を一つの配列に統合
  shuffleArray(elements); // ランダム順序に並び替え

  elements.forEach((element, index) => {
    setTimeout(
      () => {
        element.classList.add("is-visible"); // アニメーション開始
      },
      1000 + index * 50,
    ); // 波背景の後に順次表示
  });

  // テキストの表示（最後にアニメーション）
  textSpans.forEach((span, index) => {
    setTimeout(
      () => {
        span.classList.add("is-visible");
      },
      4000 + index * 600,
    ); // 他の要素が表示された後に順次表示
  });

  // 配列をランダムにシャッフルする関数
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }

  // スクロール連動アニメーションの設定
  const setupScrollAnimations = () => {
    // スクロールに連動した画像のズームインアニメーション
    const scrollImage = document.querySelector(".js-scroll-image");
    const scrollImageArea = document.querySelector("#scroll-image");

    if (scrollImage && scrollImageArea) {
      const handleScroll = () => {
        const rect = scrollImageArea.getBoundingClientRect(); // セクションの位置を取得
        const viewportHeight = window.innerHeight; // ビューポートの高さ

        // セクション全体の進行率を計算
        const sectionHeight = rect.height;
        const progress = Math.min(
          Math.max((viewportHeight / 2 - rect.top) / (sectionHeight / 2), 0),
          1,
        );

        // 初期値を少し小さなスケールに設定
        const initialScale = 0.3; // 初期スケール
        const maxScale = 1; // 最大スケール

        // 進行率に基づいてスケールと透明度を設定
        scrollImage.style.transform = `scale(${initialScale + progress * (maxScale - initialScale)})`; // 徐々に拡大
        scrollImage.style.opacity = `${0.5 + progress * 0.5}`; // 徐々に透明度を上げる
      };

      // スクロールイベントで実行
      window.addEventListener("scroll", handleScroll);

      // 初期化時に一度実行
      handleScroll();
    }
  };

  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);
})();
