// masonry

window.onload = () => {
  const grid = document.querySelector('.masonry-grid');

  const masonry = new Masonry(grid, {
    itemSelector: '.masonry-grid-img',
  });
};

// lightbox

// jQuery('.gallery').each(function () {
//   // the containers for all your galleries
//   jQuery(this).magnificPopup({
//     delegate: '.gallery-item', // the selector for gallery item
//     type: 'image',
//     gallery: {
//       enabled: true,
//     },
//   });
// });

// jQuery('.mfp-container').magnificPopup({
//   delegate: '.mfp-gallery', // child items selector, by clicking on it popup will open
//   type: 'image',
//   // other options
// });
