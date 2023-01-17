<?php include_once 'parts/header.php' ?>

<main class="container">
    <section class="songs">
        <h1 class="section-title">Сборник песен</h1>
        <div class="songs-body">
            <div class="songs-card">
                <div class="songs-card__block-pick">
                    <img src="img/no-photo1.png" alt="PINK VENOM" class="songs-card__img">
                    <div class="button-block">
                        <button class="btn btn__listen">Послушать</button>
                    </div>
                </div>
                <div class="songs-card__descr">
                    <div class="songs-card__title">
                        <h3>PINK VENOM</h3>
                    </div>
                    <div class="songs-card__subtitle">
                        <p>Blackpink</p>
                    </div>
                </div>
                <div class="songs-card__player hide-sound">
                    <div class="player-block">
                        <div class="player-body">
                            <audio controls src="audio/song1.mp3"></audio>
                            <button class="player-body__volume">
                                <svg width="14" height="21">
                                    <use xlink:href="#volume"></use>
                                </svg>
                            </button>
                            <div class="player-body__time-line">
                                <div class="line"></div>
                            </div>
                            <button class="player-body__play">
                                <svg width="44" height="43">
                                    <use xlink:href="#play"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <a href="#" class="btn btn__player btn__player-download">Скачать</a>
                    <a href="#" class="btn btn__player btn__player-text">Посмотреть текст песни</a>
                </div>
            </div>
            <div class="songs-card">
                <div class="songs-card__block-pick">
                    <img src="img/no-photo1.png" alt="PINK VENOM" class="songs-card__img">
                    <div class="button-block">
                        <button class="btn btn__listen">Послушать</button>
                    </div>
                </div>
                <div class="songs-card__descr">
                    <div class="songs-card__title">
                        <h3>PINK VENOM</h3>
                    </div>
                    <div class="songs-card__subtitle">
                        <p>Blackpink</p>
                    </div>
                </div>
                <div class="songs-card__player hide-sound">
                    <div class="player-block">
                        <div class="player-body">
                            <audio controls src="audio/song2.mp3"></audio>
                            <button class="player-body__volume">
                                <svg width="14" height="21">
                                    <use xlink:href="#volume"></use>
                                </svg>
                            </button>
                            <div class="player-body__time-line">
                                <div class="line"></div>
                            </div>
                            <button class="player-body__play">
                                <svg width="44" height="43">
                                    <use xlink:href="#play"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <a class="btn btn__player btn__player-download">Скачать</a>
                    <a class="btn btn__player btn__player-text">Посмотреть текст песни</a>
                </div>
            </div>
            <div class="songs-card">
                <div class="songs-card__block-pick">
                    <img src="img/no-photo1.png" alt="PINK VENOM" class="songs-card__img">
                    <div class="button-block">
                        <button class="btn btn__listen">Послушать</button>
                    </div>
                </div>
                <div class="songs-card__descr">
                    <div class="songs-card__title">
                        <h3>PINK VENOM</h3>
                    </div>
                    <div class="songs-card__subtitle">
                        <p>Blackpink</p>
                    </div>
                </div>
                <div class="songs-card__player hide-sound">
                    <div class="player-block">
                        <div class="player-body">
                            <audio controls src="audio/song3.mp3"></audio>
                            <button class="player-body__volume">
                                <svg width="14" height="21">
                                    <use xlink:href="#volume"></use>
                                </svg>
                            </button>
                            <div class="player-body__time-line">
                                <div class="line"></div>
                            </div>
                            <button class="player-body__play">
                                <svg width="44" height="43">
                                    <use xlink:href="#play"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <a class="btn btn__player btn__player-download">Скачать</a>
                    <a class="btn btn__player btn__player-text">Посмотреть текст песни</a>
                </div>
            </div>
        </div>
    </section>

<?php include_once 'parts/footer.php' ?>