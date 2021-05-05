// masonry

window.onload = () => {
  const grid = document.querySelector(".masonry-grid");

  const masonry = new Masonry(grid, {
    itemSelector: ".masonry-grid-img",
  });
};

// lightbox

jQuery(".gallery").each(function () {
  // the containers for all your galleries
  jQuery(this).magnificPopup({
    delegate: ".masonry-grid-img", // the selector for gallery item
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});

jQuery(".home-grid").each(function () {
  // the containers for all your galleries
  jQuery(this).magnificPopup({
    delegate: ".home-grid-img", // the selector for gallery item
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});

// gallery filter

jQuery(function () {
  jQuery(document).on("click", ".filter-gallery-item", function (e) {
    e.preventDefault();

    var category = jQuery(this).data("category");

    jQuery.ajax({
      url: wpAjax.ajaxUrl,
      data: { action: "filter", category: category },
      type: "post",
      success: function (result) {
        jQuery(".filter-galleries").html(result);

        jQuery(function () {
          const grid = document.querySelector(".masonry-grid");

          const masonry = new Masonry(grid, {
            itemSelector: ".masonry-grid-img",
            gap: "1rem",
          });
        });
      },
      error: function (result) {
        console.warn(result);
      },
    });
  });
});
