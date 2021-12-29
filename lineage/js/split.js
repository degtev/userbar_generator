$(document).ready(function(){                                                  
    $('.view-source .hide').hide();
    $('.view-source ad').toggle(
      function(){
        $(this).siblings('.hide').stop(false, true).slideDown(500);
        $(this).html('Скрыть это меню');
      },
     function(){
        $(this).siblings('.hide').stop(false, true).slideUp(500);
        $(this).html('Перейти к созданию Юзербара');
     }
   );
   
        $('.view-source2 .hide').hide();
    $('.view-source2 ad').toggle(
      function(){
        $(this).siblings('.hide').stop(false, true).slideDown(500);
        $(this).html('Скрыть друзей');
      },
     function(){
        $(this).siblings('.hide').stop(false, true).slideUp(500);
        $(this).html('Показать друзей');
     }
   );
   
           $('.view-source3 .hide').hide();
    $('.view-source3 ad').toggle(
      function(){
        $(this).siblings('.hide').stop(false, true).slideDown(500);
        $(this).html('Скрыть Софт');
      },
     function(){
        $(this).siblings('.hide').stop(false, true).slideUp(500);
        $(this).html('Показать Софт');
     }
   );
   
              $('.view-source4 .hide').hide();
    $('.view-source4 ad').toggle(
      function(){
        $(this).siblings('.hide').stop(false, true).slideDown(500);
        $(this).html('Скрыть это меню');
      },
     function(){
        $(this).siblings('.hide').stop(false, true).slideUp(500);
        $(this).html('Придумать Никнейм и Пароль');
     }
   );
   
                 $('.view-source5 .hide').hide();
    $('.view-source5 ad').toggle(
      function(){
        $(this).siblings('.hide').stop(false, true).slideDown(500);
        $(this).html('Скрыть генератор');
      },
     function(){
        $(this).siblings('.hide').stop(false, true).slideUp(500);
        $(this).html('Перейти к созданию логотипа');
     }
   );
});