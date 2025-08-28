const navbar = document.querySelector('.navbar');

const menuList = document.querySelector('.menu_list');
const buttonMenu = document.querySelector('.button_menu');
const buttonMenuClose = document.querySelector('.button_menu_close');
const menuLink = document.querySelectorAll('.menu_list li');

const SliderImg = document.querySelectorAll('.slider_img');
const Dot = document.querySelectorAll('.dot');
const SliderButtonLeft = document.querySelector('.button_slider_left');
const SliderButtonRight = document.querySelector('.button_slider_right');

const oferty = document.querySelectorAll('.oferta_img');
const ofertaPopup = document.querySelector('.oferta_popup');
const ofertaPopupImg = document.querySelector('.ofeta_popup_img');
const ofertaPopupX = document.querySelector('.oferta_popup_close');

const attraction = document.querySelectorAll('.attraction');
const attraction_text = document.querySelectorAll('.atr_text');

const galleryImg = document.querySelectorAll('.gallery_img');
const galleryPopup = document.querySelector('.gallery_popup');
const galleryPopupImg = document.querySelector('.gallery_popup_img');
const galleryPrev = document.querySelector('.gallery_prev');
const galleryNext = document.querySelector('.gallery_next');
const galleryClose = document.querySelector('.gallery_close');

// shrink navbar
function shrinkNavbar() {
  if(window.scrollY > 50){
    navbar.classList.add('shrink');
  }else{
    navbar.classList.remove('shrink');
  }
}

window.addEventListener('scroll', shrinkNavbar);


// navigation for mobile

buttonMenu.addEventListener('click', () => {
  menuList.classList.add('active');
});

menuLink.forEach((link) => {
  link.addEventListener('click', () => {
    menuList.classList.remove('active');
  })
})

buttonMenuClose.addEventListener('click', () => {
  menuList.classList.remove('active');
})


// slider

let activeIndex;

function hideActiveSlide () {
  let activeSlide = document.querySelector('.active');
    activeSlide.classList.remove('active');
}


Dot.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    hideActiveSlide();

    SliderImg[index].classList.add('active');
    activeIndex = index;  
  })
})

SliderButtonLeft.addEventListener('click', () => {
  hideActiveSlide();

  if (activeIndex === undefined || activeIndex === 0){
    activeIndex = SliderImg.length-1;
  } else {
    activeIndex--;
  }

  SliderImg[activeIndex].classList.add('active');
})

function showNextSlide() {
  hideActiveSlide();

  if (activeIndex === undefined || activeIndex === SliderImg.length-1){
    activeIndex = 0;
  } else {
    activeIndex ++;
  }

  SliderImg[activeIndex].classList.add('active');
}

SliderButtonRight.addEventListener('click', showNextSlide);

function autoSlider() {
  setInterval(showNextSlide, 2000);
};

autoSlider();

// offer

oferty.forEach((oferta) => {
  oferta.addEventListener("click", (e) => {
    ofertaPopupImg.src =  e.target.src;
     ofertaPopup.classList.add('active');
  })
});



ofertaPopupX.addEventListener('click', () => {
  ofertaPopup.classList.add('fade_out');
  setTimeout(() => {
    ofertaPopup.classList.remove('active','fade_out');
  }, 500);})


attraction.forEach((attraction, index) => {

  attraction.addEventListener('mouseover', () => {
    attraction_text[index].classList.add('active');

 
  })
})


// attraction

attraction.forEach((attraction, index) => {
 
  attraction.addEventListener('mouseout', () => {

    attraction_text[index].classList.remove('active');
    
  })
})

let galleryActiveIndex;

// gallery

galleryImg.forEach ( (img, index) => {
  img.addEventListener('click', (e) => {
    galleryPopupImg.src = e.target.src;

    galleryPopup.classList.add('active'); 

    galleryActiveIndex = index;
  })
})

function nextImg () {
  if (galleryActiveIndex === galleryImg.length-1){
    galleryActiveIndex = 0;
  } else {
    galleryActiveIndex++;
  }
  galleryPopupImg.src = galleryImg[galleryActiveIndex].src;
}

function prevImg () {
  if (galleryActiveIndex === 0){
    galleryActiveIndex = galleryImg.length - 1;
  } else {
    galleryActiveIndex--;
  }
  galleryPopupImg.src = galleryImg[galleryActiveIndex].src;
}

galleryClose.addEventListener('click', () => {
  galleryPopup.classList.remove('active');
})

galleryNext.addEventListener('click', () => {
 nextImg();
});

galleryPrev.addEventListener('click', () => {
  prevImg();
})


// document

document.addEventListener('keydown', (e) => {
  if (galleryPopup.classList.contains('active')){
    if (e.keycode === 39 || e.key === "ArrowRight"){
      nextImg();
    } else if (e.keycode === 37 || e.key === "ArrowLeft")
      {
      prevImg();
    } else if (e.keycode === 27 || e.key === "Escape")
    {
      galleryPopup.classList.remove('active');
    }
  }
})

galleryPopup.addEventListener("click", (e) => {
  if (e.target === galleryPopup){
    galleryPopup.classList.remove('active');
  }
});
