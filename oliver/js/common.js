$(function() {
$('.slider').slick({
		infinite: true,
		/*autoplay: true,
		autoplaySpeed: 5000,*/
  	appendArrows: $('.arrow'),
  	prevArrow: '<a href="#" class="slick-arrow slick-prev"><img src="../img/icons/left-arrow.png"></a>',
  	nextArrow: '<a href="#" class="slick-arrow slick-next"><img src="../img/icons/right-arrow.png"></a>'
});
$('.slider-1').slick({
		infinite: true,
		/*autoplay: true,
		autoplaySpeed: 3000,*/
		centerMode: true,
  	appendArrows: $('.arrow-1'),
		prevArrow: '<a href="#" class="slick-arrow slick-prev"><img src="../img/icons/left-arrow.png"></a>',
  	nextArrow: '<a href="#" class="slick-arrow slick-next"><img src="../img/icons/right-arrow.png"></a>'
});
});
