<?
  $h=md5(time());
  $hh=hexdec(substr($h, 0, 8));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>sms-verify</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <div class="wrapper">
    <div>
      <form name="form--tel">
        <legend>Введите номер телефона:</legend>
        <input type="text" name="tel" class="phone" placeholder="Телефон" required="">
        <input type="hidden" name="h" value="<?=$h;?>">
        <input type="submit" name="submit--tel">
      </form>
      <form class="hidden">
        <legend>Введите код:</legend>
        <input type="text" name="code">
        <input type="submit">
      </form>
    </div>
  </div>
</body>
</html>