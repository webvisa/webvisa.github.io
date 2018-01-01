jQuery(document).ready(function($) {
   var clock;
   var futureDate = new Date("January 10, 2018 0:00 PM EDT");
   var currentDate = new Date();
   var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

   function dayDiff(first, second) {
     return (second - first) / (1000 * 60 * 60 * 24);
   }
   if (dayDiff(currentDate, futureDate) < 100) {
     $('.clock').addClass('twoDayDigits');
   } else {
     $('.clock').addClass('threeDayDigits');
   }
   if (diff < 0) {
     diff = 0;
   }
   clock = $('.clock').FlipClock(diff, {
     clockFace: 'DailyCounter',
     language: 'ru-ru',
     countdown: true
   });
 });



$(function(){

    $('.navbar-toggle').on('click', function(){

        $('.menu-small').slideToggle(300, function(){

          if ($(this).css('display') === 'none') {
              $(this).removeAttr('style');
          }

        });

    })

})


$(document).ready(function(){
      $("#menu").on("click","a", function (event) {
          //отменяем стандартную обработку нажатия по ссылке
          event.preventDefault();

          //забираем идентификатор бока с атрибута href
          var id  = $(this).attr('href'),

          //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
          
          //анимируем переход на расстояние - top за 1500 мс
          $('body,html').animate({scrollTop: top}, 1000);
  });
});
