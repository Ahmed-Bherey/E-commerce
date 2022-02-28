// ------------------ Start Sliders
var swiper = new Swiper(".mySwiper6", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 640px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});
// ------------------ End Sliders


// ------------------ Start Nice Scroll
$("body").niceScroll({
    cursorcolor: "blueviolet",
    cursorwidth: "8px"
});
// ------------------ End Nice Scroll


// ------------------ Start Side Menu
let mobielBtn = document.querySelectorAll(".mobile-btn"),
    sideMenu = document.querySelector(".side-menu"),
    bodyMove = document.getElementsByTagName("body")[0],
    overlayMenu = document.querySelector(".overlay-menu");

for (let i = 0; i < mobielBtn.length; i++) {
    mobielBtn[i].addEventListener('click', () => {
        sideMenu.classList.add('open');
        bodyMove.classList.add('push');
        overlayMenu.classList.add('showOverlayBlock');
        setTimeout(function() {
            overlayMenu.classList.add('showOverlayOpacity');
        }, 100);
    });
};

overlayMenu.addEventListener('click', () => {
    sideMenu.classList.remove('open');
    bodyMove.classList.remove('push');
    overlayMenu.classList.remove('showOverlayOpacity');
    setTimeout(function() {
        overlayMenu.classList.remove('showOverlayBlock');
    }, 700);
});
// ------------------ End Side Menu


// ------------------ Start Go To Top
let ScrolTop = document.querySelector(".go-top"),
    body = document.querySelector("html , body");
window.addEventListener("scroll", () => {
    if (body.scrollTop >= 200) {
        ScrolTop.style.display = "block";
        ScrolTop.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    } else {
        ScrolTop.style.display = "none";
    }
});
// ------------------ End Go To Top


// ------------------ Start Sticky NavBar
let navBar = document.querySelector(".sticky-navbar");
window.addEventListener('scroll', () => {
    if (body.scrollTop >= 230) {
        navBar.style.display = "block";
    } else {
        navBar.style.display = "none";
    }
});
// ------------------ End Sticky NavBar


// ------------------ Start Active Items
let nanItem = document.querySelectorAll('.nav_item');
for (let i = 0; i < nanItem.length; i++) {
    nanItem[i].addEventListener('click', () => {
        for (let index = 0; index < nanItem.length; index++) {
            nanItem[index].classList.remove('active');
        }
        nanItem[i].classList.add('active');
    });
};
// ------------------ End Active Items


// ------------------ Start Dark Mood
let SkinIcon = document.querySelector('#skin-icon'),
    DarkTheme = document.querySelectorAll('.dark-mood'),
    LightTheme = document.querySelectorAll('.light-mood');

for (let i = 0; i < DarkTheme.length; i++) {
    DarkTheme[i].addEventListener('click', () => {
        SkinIcon.setAttribute("href", "end-user/css/main-dark-mood.css");
        localStorage.setItem('dark-theme', "end-user/css/main-dark-mood.css");
    });
}

if (localStorage.getItem('dark-theme')) {
    SkinIcon.setAttribute("href", "end-user/css/main-dark-mood.css");
}

for (let i = 0; i < LightTheme.length; i++) {
    LightTheme[i].addEventListener('click', () => {
        SkinIcon.setAttribute("href", "end-user/css/main.css");
        localStorage.removeItem('dark-theme');
    });
}
// ------------------ End Dark Mood