jQuery(function ($) {
  /* top scroll */
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".top_jump").addClass("view");
    } else {
      $(".top_jump").removeClass("view");
    }
  });
  /* top scroll */
  /* ハンバーガーメニュー */
  var $nav = $("#navArea");
  var $btn = $(".toggle_btn");
  var $mask = $("#mask");
  var open = "open"; // class
  // menu open close
  $btn.on("click", function () {
    if (!$nav.hasClass(open)) {
      $nav.addClass(open);
      $btn.addClass(open);
    } else {
      $nav.removeClass(open);
      $btn.removeClass(open);
    }
  });
  // mask close
  $mask.on("click", function () {
    $nav.removeClass(open);
    $btn.removeClass(open);
  });

  setTimeout(function () {
    $(".hibari-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 2500,
      dots: true,
      fade: true, // フェードON
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
    });
  }, 1000);

  // 2024/11/6追加
  // スクロールイベント
  $('#header a[href*="#"], #header a[href*="#"]').click(function () {
    const elmHash = $(this).attr("href");
    const pos = $(elmHash).offset().top;
    $("body,html").animate({ scrollTop: pos - 50 }, 500);
    return false;
  });
});
