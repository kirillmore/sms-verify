<?
  //functions
    function getCode($h) {
      return substr(hexdec($h),2,4);
    }

    function checkCode($h,$code) {
      if($code==substr(hexdec($h),2,4)){
        echo("VERIFYSUCCESS");
        //verifysuccess code
      }
      else{
        echo("VERIFYFAILED");
      }
    }

  if($_POST['action']=='sendsms'){
    $tel=$_POST['tel'];
    $h=$_POST['h'];
    $code=getCode($h);
    //sendSMSRU($tel,$code);
    echo("SMSSUCCESS");
  }
  if($_POST['action']=='verifycode'){
    $h=$_POST['h'];
    $code=$_POST['code'];
    checkCode($h,$code);
  }
?>