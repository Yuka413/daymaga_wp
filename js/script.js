//ドロワーメニュー
jQuery("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-drawer-content").toggleClass("is-checked");

});

jQuery(".js-drawer-click").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-drawer-content").removeClass("is-checked");
});

// mvのスワイパー
const gallery_swiper = new Swiper(".p-gallery__swiper", {
  loop: true,
  centeredSlides: true,
  slidesPerView: 1.3,
  spaceBetween: 16,

  speed: 1000,

  breakpoints: {
    750: {
      loop: true,
      slidesPerView: 2.3,
      spaceBetween: 67,
    },
    1500: {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 67,
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

});

// おすすめ記事のスワイパー
const pickUp_swiper = new Swiper(".p-pick-up__swiper", {
  loop: false,
  slidesPerView: 1.15,
  spaceBetween: 25,
  speed: 1000,
  navigation: {
    nextEl: ".p-pick-up__next",
    prevEl: ".p-pick-up__prev",
  },

  breakpoints: {
    768: {
      slidesPerView: 2.8,
      spaceBetween: 32,
    },
    1000: {
      slidesPerView: 3.2,
      spaceBetween: 32,
    },
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".p-pick-up__scrollbar",
    draggable: true,
    dragSize: "auto",
  },
});

// 自作ボタンクリックでスワイプ
const $prevButton = $("#prevButton");
const $nextButton = $("#nextButton");

$prevButton.on("click", function () {
  pickUp_swiper.slidePrev();
});
$nextButton.on("click", function () {
  pickUp_swiper.slideNext();
});

// スライドしきったらボタンを薄くする
function buttonDisabled() {
  if (pickUp_swiper.isBeginning) {
    $prevButton.addClass("disabled");
  } else {
    $prevButton.removeClass("disabled");
  }

  if (pickUp_swiper.isEnd) {
    $nextButton.addClass("disabled");
  } else {
    $nextButton.removeClass("disabled");
  }
}

pickUp_swiper.on("slideChange", buttonDisabled);
pickUp_swiper.on("reachBeginning", buttonDisabled);
pickUp_swiper.on("reachEnd", buttonDisabled);

// 初期状態でボタンの状態を更新
buttonDisabled();

// 「すべての記事」セクションにおいて、タブクリックでbodyの背景色を変える
$(document).ready(function(){
  const colors =['#629de2', '#135097', '#42a0ad', '#816dfa', '#c88dec' ];

  $('.p-category-posts__text').each(function (index) {
    $(this).on('click', function(){
      const color =colors[index] || 'gray';
      $('.p-category-posts__body-inner').css('background-color', color);
    })
  })
})

// クリックしたタブの背景が色づくようにする
$(".p-category-posts__text").on("click", function (event){
  event.preventDefault();
  $(".p-category-posts__text").removeClass('is-active');
  $(this).toggleClass("is-active");
});

// すべての記事セクションで、タブをクリックすると、タブに設定したdata-slugとjs-category-postクラスのid(投稿のスラッグ)が一致するものだけ投稿を表示する
$(document).ready(function(){
  $('.js-category-post').addClass('is-active');
$('.p-category-posts__text').on("click", function (event){
  event.preventDefault();
  const slug =$(this).data('slug');
 if(slug === "all"){
  $('.js-category-post').addClass('is-active');
 } else {
  $(`.js-category-post[id= "${slug}"]`).addClass('is-active');
  $(`.js-category-post[id != "${slug}"]`).removeClass('is-active');
 }
});
});

//  headerスクロールで切り替わる
$(window).on('scroll', function () {
  const scrollY = $(this).scrollTop();
  if ($(window).scrollTop() > 0) {
    $(".l-header__menu").addClass("is-scroll--sp");
    $(".l-header__inner").addClass("is-scroll");
    $(".js-scroll-logo").css('opacity', '1');
    $(".js-scroll-logo").css('transition', '0.5s');
    $(".js-initial-logo").css('opacity', '0');
  } else {
    $(".l-header__menu").removeClass("is-scroll--sp");
    $(".l-header__inner").removeClass("is-scroll");
    $(".js-scroll-logo").css('opacity', '0');
    $(".js-scroll-logo").css('transition', '0.5s');
    $(".js-initial-logo").css('opacity', '1');

  }
});



// 新着順、人気順クリックで色が変わる
$('.p-category-posts__order-text').on("click", function(event) {
  event.preventDefault();
  $('.p-category-posts__order-text').toggleClass('is-active');
})
