<?
  //functions
    function getcode() {
      return '0000';
    }

    function checkCode() {

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
    echo("VERIFYSUCCESS");
    //verifysuccess code
  }
?>