<?php include_once 'parts/header.php' ?>
    <main class="container">
        <section class="hero">
            <div class="hero-pick">
                <img src="img/hero-img.jpg" alt="Изображение певца" class="hero-pick__img">
            </div>
            <div class="hero-info">
                <div class="hero-info__text">
                    <p>Имеется спорная точка зрения, гласящая примерно следующее: некоторые особенности внутренней политики призывают нас к новым свершениям, которые, в свою очередь, должны быть в равной степени предоставлены сами себе.</p>
                    <p>Имеется спорная точка зрения, гласящая примерно следующее: некоторые особенности внутренней политики призывают нас к новым свершениям, которые, в свою очередь, должны быть в равной степени предоставлены сами себе.</p>
                </div>
                <div class="hero-info__title">
                    <h1>Цена вопроса не важна, когда чистый разум не скован границами!</h1>
                </div>
                <div class="hero-info__btn">
                    <a href="#" class="btn btn__hero">Перейти к песням</a>
                </div>
            </div>
        </section>
        <section class="last-news">
            <h2 class="section-title">Последние новости</h2>
            <div class="last-news__controls">
                <a href="" class="btn btn__news">больше новостей</a>
                <div class="last-news__controls-btns">
                    <button class="last-news__prev">
                        <svg width="42" height="42">
                            <use xlink:href="#arrow-prev"></use>
                        </svg>
                    </button>
                    <button class="last-news__next">
                        <svg width="42" height="42">
                            <use xlink:href="#arrow-next"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="last-news__slider swiper">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img1.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img2.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img3.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img1.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img2.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide last-news__body">
                        <div class="news-card">
                            <img src="img/slider-img/img3.png" alt="Картинка" class="news-card__img">
                            <h3 class="news-card__title">Название новости</h3>
                            <time class="news-card__date"><?= date('d:m:y'); ?></time>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="last-video">
            <h2 class="section-title">Последние видео</h2>
            <div class="last-video__body">
                <div class="last-video__block">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/FvDKUkLQ5RA" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="last-video__block">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/ljVVQHS7DHA" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="last-video__block">
                <div class="last-video__block">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/2abObzQq6Bk" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </div>
                <div class="last-video__block">
                <div class="last-video__block">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/ktb1y5txHb8" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </section>

<?php include_once 'parts/footer.php' ?>