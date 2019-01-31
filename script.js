$(document).ready(function (){
  $(".phone").mask("+7 (999) 999-99-99");

  //form submit
  $("[name='form--tel']").submit(function(){
    $("[name='submit--tel']").attr('value','ИДЁТ ОТПРАВКА').attr("disabled", "true");
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "submit.php",
      data: str,
      success: function(msg) {
        $(document).ajaxComplete(function(event, request, settings){
          console.log(msg);
          if(msg=="SUCCESS") {
            $("[name='submit']").attr('value','УСПЕШНО ОТПРАВЛЕНО').attr('name','').attr("disabled", "true");  
          }
          if(msg=="BOT") {
            $("[name='submit']").attr('value','ЗАПОЛНЕНЫ НЕ ВСЕ ПОЛЯ').removeAttr("disabled");
          }          
        });
      }                            
    });
    return false;
  });

});