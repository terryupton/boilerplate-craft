import Swiper from 'swiper';

function swiperProjectsExample() {
  var hasSwipers = document.getElementsByClassName('js-swiper-projects');
  if (hasSwipers.length > 0) {
    var swiperProjects = new Swiper('.js-swiper-projects', {
      // Optional parameters
      loop: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: true,
        disableOnInteraction: true
      },
      centeredSlides: true,
      speed: 600,
      effect: 'fade',
      
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        // bulletElement: 'li',
        clickable: true,
      },
      
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }
}

export default swiperProjectsExample;