// 初期設定
!(function () {
  "use strict";

  // 初期化処理
  const init = () => {
    console.log("呼ばれたよ！！！！！！！！！");
    document.addEventListener("DOMContentLoaded", onDOMContentLoaded);
    window.addEventListener("load", onWindowLoad);
    window.addEventListener("fontsLoaded", onFontsLoaded);
  };


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
        1
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


  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);

  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);

  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);

  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);

  // ページ読み込み時に設定を初期化
  document.addEventListener("DOMContentLoaded", setupScrollAnimations);


  // メディアクエリでの画面リロード処理
  window.matchMedia("(max-width:768px)").addEventListener("change", () => {
    window.location.reload();
  });

  // その他のイベントハンドラ
  const onWindowLoad = () => {
    (0, a.Z)(); // a.Z の初期化呼び出し
  };

  const onFontsLoaded = () => {
    console.log("fontsLoaded");
  };

  init(); // 初期化関数の実行
})();
