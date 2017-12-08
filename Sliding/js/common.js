jQuery(document).ready(function($) {
   var clock;
   var futureDate = new Date("January 1, 2018 0:00 PM EDT");
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
