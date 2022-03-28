// external js: isotope.pkgd.js

// init Isotope
var $grid = $(".grid").isotope({
  itemSelector: ".item",
});

// store filter for each group
var filters = {};

$(".filters").on("click", ".button", function () {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents(".button-group");
  var filterGroup = $buttonGroup.attr("data-filter-group");
  // set filter for group
  filters[filterGroup] = $this.attr("data-filter");
  // combine filters
  var filterValue = concatValues(filters);
  // set filter for Isotope
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$(".button-group").each(function (i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on("click", "button", function () {
    $buttonGroup.find(".is-checked").removeClass("is-checked");
    $(this).addClass("is-checked");
    closeAll();
  });
});

// unwrap long description and re-arrange masonry grid

$(".unwrap").click(function (event) {
  var $button = $(event.target);
  var $description = $button.next(".long-description").first();
  $description.toggleClass("visible");
  $(".grid").isotope("layout");
});

// flatten object by concatting values
function concatValues(obj) {
  var value = "";
  for (var prop in obj) {
    value += obj[prop];
  }
  return value;
}

// overlay nav

$(".trier").click(function (event) {
  var $button = $(event.target);
  var $keywords = $button.next(".button-group").first();
  closeAll();
  $keywords.toggleClass("visible");
});
function closeAll() {
  $(".button-group").removeClass("visible");
}

// Magnific popup
$(".images").each(function () {
  // the containers for all your galleries
  $(this).magnificPopup({
    delegate: "a", // the selector for gallery item
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});
$(document).ready(function () {
  // $(".item img").unveil();
});
