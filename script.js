$(document).ready(function (){
  $(".phone").mask("+7 (999) 999-99-99");

  //form submit
  $("[name='form--tel']").submit(function(){
    $("[name='submit--num']").attr('value','ИДЁТ ОТПРАВКА').attr("disabled", "true");
    var str=$(this).serialize();
    $.ajax({
      type: "POST",
      url: "submit.php",
      data: str,
      success: function(msg) {
        console.log(msg);
        $(document).ajaxComplete(function(event, request, settings){
          if(msg=="SMSSUCCESS") {
            $("[name='submit--num']").attr('value','SEND').removeAttr("disabled");
            $("[name='tel']").removeAttr("required");
            $("[name='tel']").addClass("hidden");
            $("[name='code']").removeClass("hidden");
            $("[name='legend']").html("Enter code");
            $("[name='action']").val("verifycode");
          }
          if(msg=="VERIFYSUCCESS") {
            $("[name='form--tel']").addClass("hidden");
          } 
        });
      }                            
    });
    return false;
  });

});