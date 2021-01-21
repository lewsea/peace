// jQuery(document).ready(function ($) {
//   var btn = $('#scroll-top-button');

//   $(window).scroll(function () {
//     if ($(window).scrollTop() > 300) {
//       btn.addClass('show');
//     } else {
//       btn.removeClass('show');
//     }
//   });

//   btn.on('click', function (e) {
//     e.preventDefault();
//     $('html, body').animate({ scrollTop: 0 }, '300');
//   });
// });

window.onload = () => {
  const grid = document.querySelector('.masonry-grid');

  const masonry = new Masonry(grid, {
    itemSelector: '.masonry-grid-img',
  });
};
