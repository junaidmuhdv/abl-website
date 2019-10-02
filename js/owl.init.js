//Owl Carousel
$("#customer-testi").owlCarousel({
  autoPlay: 3000,
  items: 3,
  itemsDesktop : [1024,3],
  itemsDesktopSmall : [900,2],
  itemsTablet: [600,1],
});

$("#owl-fade").owlCarousel({
  autoPlay: 3000,
  stopOnHover: true,
  navigation: false,
  paginationSpeed: 1000,
  goToFirstSpeed: 2000,
  singleItem: true,
  autoHeight: true,
  items: 1,
  transitionStyle: "fade"
});