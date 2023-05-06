const headerBurger = document.querySelector('.header__burger');
const headerMenu = document.querySelector('.header__menu');
const Body = document.querySelector('.body');

const gallery1 = document.querySelector('.gallery__p1');
const gallery2 = document.querySelector('.gallery__p2');
const gallery3 = document.querySelector('.gallery__p3');
const gallery4 = document.querySelector('.gallery__p4');
const gallery5 = document.querySelector('.gallery__p5');

headerBurger.addEventListener('click', function(){
    console.log(headerBurger);
    console.log(headerMenu);
    headerBurger.classList.toggle('active');
    headerMenu.classList.toggle('active');
    Body.classList.toggle('lock');
});

gallery1.addEventListener('click', function(){
    console.log(gallery1);
    gallery1.classList.toggle('active');
});

gallery2.addEventListener('click', function(){
    console.log(gallery2);
    gallery2.classList.toggle('active');
});

gallery3.addEventListener('click', function(){
    console.log(gallery3);
    gallery3.classList.toggle('active');
});

gallery4.addEventListener('click', function(){
    console.log(gallery4);
    gallery4.classList.toggle('active');
});

gallery5.addEventListener('click', function(){
    console.log(gallery5);
    gallery5.classList.toggle('active');
});