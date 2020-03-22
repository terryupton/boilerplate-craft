import GLightbox from 'glightbox';

function galleryExample() {
  const lightbox = GLightbox({
    selector: 'js-gallery',
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    slideEffect: 'fade',
    onOpen: () => {
      console.log('Lightbox opened');
    },
    beforeSlideLoad: (slide, data) => {
      // Need to execute a script in the slide?
      // You can do that here...
    }
  });
}

export default galleryExample;