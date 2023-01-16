const songsdCards = document.querySelectorAll('.songs-card');
const playersBlock = document.querySelectorAll('.songs-card__player');
const navLink = document.querySelectorAll('.nav-block');
const mobMenuLists = document.querySelector('.nav-list_mob');
const btnBurger = document.querySelector('.btn__burger');

//let songs = ["song1.mp3", "song2.mp3", "song3.mp3"]

function showPlayer (){
    songsdCards.forEach(elem =>{
        const btn = elem.querySelector('.btn__listen');
        const player = elem.querySelector('.songs-card__player');
    
        elem.addEventListener('click', (e) => {
            
            if(! e.composedPath().includes(btn)){
                //playerPause();
                player.classList.add('hide')
            }else{
                player.classList.toggle('hide');
            }
        })
    })
}

showPlayer();

function showMenuMobile(btn, block){
    document.addEventListener('click', (e) =>{
        if(! e.composedPath().includes(btn)){
            block.classList.remove('grid');
        }else{
            block.classList.toggle('grid');
        }
        
    })
}

showMenuMobile(btnBurger, mobMenuLists)

function moveItems(navTopItems, mobMenuLists) {
    if(navTopItems !== null){
        navTopItems.forEach((el, ind) => {
            if (window.matchMedia("(max-width: 850px)").matches) {
                if (ind >= 0) {
                    mobMenuLists.append(el);
                }
            }
        });
    }
}

moveItems(navLink, mobMenuLists)


const sliderMain = new Swiper('.last-news__slider', {
    // loop: true,
    spaceBetween: 24,
    slidesPerView: 5.5,
    navigation: {
        nextEl: '.last-news__next',
        prevEl: '.last-news__prev',
    },

    breakpoints:{
        320: {
            slidesPerView: 1.5,
        },
        850: {
            slidesPerView: 5.5,
        }
    }
})

const sliderNew = new Swiper('.galery-new__body', {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 26,

    breakpoints:{
        320: {
            slidesPerView: 1.5,
        },
        850: {
            slidesPerView: 5,
        }
    }
})

// Player

// Функция проигрывания

function playerPlay (btn, changerBtnIcon, player){
    btn.classList.add('play');
    changerBtnIcon.setAttribute('xlink:href', '#pause')
    player.play();
}

// Функция паузы

function playerPause(btn, changerBtnIcon, player){
    btn.classList.remove('play');
    changerBtnIcon.setAttribute('xlink:href', '#play')
    player.pause();  
}

// Функиця управления звуком

function playerVolume(player){
    player.volume = 0.5;
}

// Функция обновления полоски прокрутки

function updateProgtess(e, progress, changerBtnIcon){
    const {duration, currentTime} = e.target;
    const progPercent = (currentTime / duration) * 100;
    progress.style.width = `${progPercent}%`
    if(duration === currentTime){
        changerBtnIcon.setAttribute('xlink:href', '#play');
    }
}

// Перебор всех карточек для получения в каждой плеера

songsdCards.forEach(elem =>{
    const player = elem.querySelector('.player-block audio');
    const closePlayer = elem.querySelector('.btn__listen');
    const playerBtnPlay = elem.querySelector('.player-body__play');
    const playerBtnVol = elem.querySelector('.player-body__volume');
    const playerTimeLine = elem.querySelector('.player-body__time-line');
    const playerLine = elem.querySelector('.line');
    const changerBtnIcon = elem.querySelector('.player-body__play use');
    
    playerBtnPlay.addEventListener('click', () =>{
        let isPlayed = playerBtnPlay.classList.contains('play');
        if(isPlayed){
            playerPause(playerBtnPlay, changerBtnIcon, player);
        }else{
            playerPlay(playerBtnPlay, changerBtnIcon, player);
        }
    })

    playerBtnVol.addEventListener('click', ()=>{
        playerVolume(player);
    });

    closePlayer.addEventListener('click', () =>{
        playerPause(playerBtnPlay, changerBtnIcon, player);
    })
    
    player.addEventListener('timeupdate', (e) =>{
        updateProgtess(e, playerLine, changerBtnIcon);
    })

    playerTimeLine.addEventListener('click', function(e) {
        const width = this.clientWidth;
        const clickX = e.offsetX;
        const dur = player.duration;
        player.currentTime = (clickX / width) * dur;
    })
})


