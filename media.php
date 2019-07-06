<?php
  $file_name = 'menu_'.$_GET['menu'].'_'.$_GET['id'];
?>
<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>세계 문화 여행</title>
    <link rel="stylesheet" href="./css/default.css">
  </head>
  <body>
    <div class="background table">
          <?php if($_GET['ogg']==true) { ?>
            <audio src="https://storage.googleapis.com/worldct.appspot.com/media/<?php echo $file_name?>.ogg" autoplay controls>
            </audio>
            <img class="audio" src="./img/<?php echo $file_name?>.jpg" alt="">
          <?php } else{ ?>
          <video autoplay controls>
            <source src="https://storage.googleapis.com/worldct.appspot.com/media/<?php echo $file_name;?>.mp4" type="video/mp4">
          </video>
        <?php }?>
    </div>
  </body>
</html>
