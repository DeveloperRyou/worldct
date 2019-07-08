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
    <div class="background table img">
      <div class="table_cell">
      <?php if($_GET['ogg']==true) { ?>
        <audio autoplay controls>
          <source src="https://storage.googleapis.com/worldct.appspot.com/media/<?php echo $file_name?>.ogg" type="audio/ogg">
          <source src="https://storage.googleapis.com/worldct.appspot.com/media/<?php echo $file_name?>.mp3" type="audio/mpeg">  
        </audio>
        <img class="audio" src="./img/<?php echo $file_name?>.jpg" alt="">
      <?php } else{ ?>
          <video autoplay controls>
            <source src="https://storage.googleapis.com/worldct.appspot.com/media/<?php echo $file_name;?>.mp4" type="video/mp4">
          </video>
      <?php }?>
      </div>
    </div>
  </body>
</html>
