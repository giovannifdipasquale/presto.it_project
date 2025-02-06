import Swiper from 'swiper';
// Scroll Navbar

let navbar = document.querySelector("#navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        navbar.classList.add("navCustomScroll")
        navbar.setAttribute("data-bs-theme", "light");
    } else {
        navbar.classList.remove("navCustomScroll")
        navbar.setAttribute("data-bs-theme", "dark")
    }
});

// ------------
// pulsante dropdown della search bar



//funzione che cambia categoria al bottone di dropdown
const button = document.getElementById('dropdownButton');
const anchors = document.querySelectorAll('a');

anchors.forEach(anchor => {
    anchor.addEventListener('click', () => {
        button.innerHTML = "";
        button.innerHTML = anchor.innerHTML;
    });
})


// sezione numbers


let reg = document.querySelector("#reg")
let artSell = document.querySelector("#artSell")
let ourNumb = document.querySelector("#ourNumb")

function creatInterval(element, finalNumber, speed) {
    let counter = 0;

    let interval = setInterval(() => {
        if (counter < finalNumber) {
            counter++;
            element.innerHTML = counter;
        } else {
            clearInterval(interval)
        }
    }, speed)

}

let isIntersected = true;

let observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting && isIntersected) {
            creatInterval(reg, 681, 20);
            creatInterval(artSell, 808, 10)
            creatInterval(ourNumb, 540, 20)
            isIntersected = false;
        }
    });
})

if (artSell && reg && ourNumb) {
    observer.observe(artSell)
}





// fine sezione numbers

// ------------
// swiper
let swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


