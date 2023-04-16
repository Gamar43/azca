$(document).ready(function (){
     $('input[type="text"]').keyup(function(e) {
          var key_code = e.keyCode || e.which;
          if(key_code == 13)
          {
              $(this).nextAll('input[type="text"]').first().focus();
          }
     });
 });