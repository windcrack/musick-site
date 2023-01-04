const songsdCards = document.querySelectorAll('.songs-card');
const playersBlock = document.querySelectorAll('.songs-card__player');

function showPlayer (){
    songsdCards.forEach(elem =>{
        const btn = elem.querySelector('.btn__listen');
        const player = elem.querySelector('.songs-card__player');
        elem.addEventListener('click', (e) => {
            if(e.target === btn){
                player.classList.toggle('hide')
            }
        })
    })
}

showPlayer();


const sliderMain = new Swiper('.last-news__slider', {
    // loop: true,
    spaceBetween: 24,
    slidesPerView: 5.5,
    navigation: {
        nextEl: '.last-news__next',
        prevEl: '.last-news__prev',
    },
})

