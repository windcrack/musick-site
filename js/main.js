const sliderMain = new Swiper('.last-news__slider', {
    // loop: true,
    spaceBetween: 24,
    slidesPerView: 5.5,
    navigation: {
        nextEl: '.last-news__next',
        prevEl: '.last-news__prev',
    },
})