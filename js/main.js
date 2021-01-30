window.onload = () => {
  const grid = document.querySelector('.masonry-grid');

  const masonry = new Masonry(grid, {
    itemSelector: '.masonry-grid-img',
  });
};
