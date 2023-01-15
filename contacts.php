<?php include_once 'parts/header.php' ?>

<main class="container">
    <section class="contact">
        <h1 class="section-title">Контакты и предложения</h1>
        <div class="contact-text">
            <h2 class="contact-text__title">Сергей Минаев</h2>
            <div class="contact-text__subtitle">Любая контактная информация и все вопросы по организации выступлений Сергея Минаева.</div>
        </div>
        <div class="contact-how">
             <a href="tel:8800553535" class="contact-how__phone">
             Телефон: 8800553535
            </a>
            <a href="#form" class="contact-how__email">Email: exmaple@mail.ru</a>
        </div>

        <div class="contact-form">
            <form action="" class="form" id="form">
                <div class="form-title">Написать артисту</div>
                <div class="form-body">
                    <div class="form-block">
                        <input class="form-block__input" type="text" name="" id="" placeholder="Ваше имя">
                    </div>
                    <div class="form-block">
                        <input class="form-block__input" type="text" name="" id="" placeholder="Телефон">
                    </div>
                    <div class="form-block">
                        <textarea class="form-block__input form-block__input_area" type="text" name="" id="" placeholder="Введите сообщние"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn__form">Отправить сообщение</button>
            </form>
            <div class="contact-form__social">
                <div class="contact-form__social-text">Написать в социальные сети</div>
                <ul class="contact-form__social-list">
                    <li class="contact-form__social-item">
                        <a href="http://youtube.com" target="_blank" rel="noopener noreferrer">
                            <img src="img/youtube-form.png" alt="">
                        </a>
                    </li>
                    <li class="contact-form__social-item">
                        <a href="https://wa.me/88005553525" target="_blank" rel="noopener noreferrer">
                            <img src="img/whatsapp-form.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    
    
        

<?php include_once 'parts/footer.php' ?>