<?php include_once 'parts/header.php' ?>

<main class="container">
    <section class="news-template">
        <div class="news-template__header" style="background-image: url('img/galery/img1.jpg')">
            <h1 class="news-template__header-text">Название новости или события</h1>
        </div>
        <article class="news-template__article article">
            <div class="article-data">
                <time class="article-data__when">
                    <?= date("d.m.Y"); ?>
                </time>
                <div class="article-data__line"></div>
                <div class="article-data__period">
                <?= date("i"); ?> минут
                </div>
            </div>
            <div class="article-text typo">
                <p>Seamlessly syndicate cutting-edge architectures rather than collaborative collaboration and idea-sharing. Proactively incubate visionary interfaces whereas premium benefits. Seamlessly negotiate ubiquitous leadership skills rather than parallel ideas. Dramatically visualize superior interfaces for best-of-breed alignments. Synergistically formulate performance based users through customized relationships. Interactively deliver cross-platform ROI via granular systems. Intrinsicly enhance effective initiatives vis-a-vis orthogonal outsourcing. Rapidiously monetize market-driven opportunities with multifunctional users. Collaboratively enhance visionary opportunities through revolutionary schemas. Progressively network just in time customer service without real-time scenarios.</p>

                <p>Synergistically drive e-business leadership with unique synergy. Compellingly seize market positioning ROI and bricks-and-clicks e-markets. Proactively myocardinate timely platforms through distributed ideas. Professionally optimize enabled core competencies for leading-edge sources. Professionally enhance stand-alone leadership with innovative synergy. Rapidiously generate backend experiences vis-a-vis long-term high-impact relationships.</p>
            </div>
            <div class="article-img typo">
                <img src="img/news/img1.png" alt="">
                <img src="img/news/img2.png" alt="">
                <img src="img/slider-img/img1.png" alt="">
                <img src="img/galery/img4.jpg" alt="">
            </div>
            <div class="article-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8U9BNrMFueI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </article>
    </section>

<?php include_once 'parts/footer.php' ?>