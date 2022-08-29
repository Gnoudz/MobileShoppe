$(document).ready(function () {
  //banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    margin: 0,
    dots: true,
    loop: true,
    autoplay: 15000,
    items: 1,
  });

  //product owl carousel
  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,

    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  //isotope filter
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
  });

  //filter items on button click
  $(".button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  //new phone owl carousel
  $("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: 15000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // blogs owl carousel
  $("#blogs .owl-carousel").owlCarousel({
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  //Qty up/down
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  
  $qty_up.click(function() {
    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1) {
      $input.val((i, oldValue) => {
        return ++oldValue;
      })
    }
  })

  $qty_down.click(function(e) {
    let $input = $(`.qty-input[data-id='${$(this).data("id")}']`)

    if($input.val() > 1) {
      $input.val((i, oldValue) => {
        return --oldValue;
      })
    }
  })
});
