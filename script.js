// MENU MOBILE - AÇÃO
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



// SEÇÕES DE ROLAGEM - COR DO NOME
let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    section.forEach ( sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
    // SEÇÕES 
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 10);
    // REMOVER O ICONE DE MENU MOBILE
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};

// SCROLL REVEAL 
ScrollReveal({ 
   // reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.home-content, .heading', {origin: 'top'});
ScrollReveal().reveal('.home-img, .servicos-container, .portifolio-box, .contato form', {origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, .sobre-img', {origin: 'left'});
ScrollReveal().reveal('.home-content p, .sobre-content', {origin: 'right'});

//EFEITO DE DIGITANDO
const typed = new Typed('.multiple-text', {
    strings: ['Estratégia.', 'Digital.', 'Esporte.'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});

 // Mostrar o pop-up quando a página carregar
 window.onload = function() {
    document.getElementById('popup').style.display = 'flex';
};

// Fechar o pop-up quando clicar no X
document.getElementById('closePopup').onclick = function() {
    document.getElementById('popup').style.display = 'none';
};

// Fechar o pop-up quando clicar fora do conteúdo
window.onclick = function(event) {
    if (event.target == document.getElementById('popup')) {
        document.getElementById('popup').style.display = 'none';
    }
};

// Fechar o pop-up com a tecla ESC
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        document.getElementById('popup').style.display = 'none';
    }
};