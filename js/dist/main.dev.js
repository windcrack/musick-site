"use strict";

var songsdCards = document.querySelectorAll('.songs-card');
var playersBlock = document.querySelectorAll('.songs-card__player');

function showPlayer() {
  songsdCards.forEach(function (elem) {
    var btn = elem.querySelector('.btn__listen');
    var player = elem.querySelector('.songs-card__player');
    elem.addEventListener('click', function (e) {
      if (e.target === btn) {
        player.classList.toggle('hide');
      }
    });
  });
}

showPlayer();
var sliderMain = new Swiper('.last-news__slider', {
  // loop: true,
  spaceBetween: 24,
  slidesPerView: 5.5,
  navigation: {
    nextEl: '.last-news__next',
    prevEl: '.last-news__prev'
  }
});
//# sourceMappingURL=main.dev.js.map
