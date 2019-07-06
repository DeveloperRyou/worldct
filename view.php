
<?php

  if(!$_GET['id'])$_GET['id']=1;
  $total_file = 0;
  if($_GET['menu']=='3_2') $_GET['ogg']='true';
  for($i=1;;$i++){
    $tmp_is_file=file_exists('./img/'.'menu_'.$_GET['menu'].'_'.$i.'.jpg');
    if(!$tmp_is_file){
      $total_file=$i-1;
      break;
    }
  }
  if($_GET['id']>$total_file) $_GET['id']=$total_file;
  $file_name = 'menu_'.$_GET['menu'].'_'.$_GET['id'];
  ?>

<?php
  $menu_name['1_1']="국기";
  $menu_name['1_2']="자랑거리";
  $menu_name['2']="전통의상";
  $menu_name['3_1']="인사법";
  $menu_name['3_2']="인사말";
  $menu_name['4']="집";
  $menu_name['5_1']="음식";
  $menu_name['5_2']="식사예절";
  $menu_name['6']="장난감";
  $menu_name['7']="민요";
  $menu_name['8']="춤";

  $media['menu_1_1_1']=true;
  $media['menu_1_2_2']=true;
  $media['menu_1_2_3']=true;
  $media['menu_1_2_4']=true;
  $media['menu_1_2_8']=true;
  $media['menu_1_2_11']=true;
  $media['menu_1_2_12']=true;
  $media['menu_1_2_15']=true;
  $media['menu_1_2_16']=true;
  $media['menu_1_2_17']=true;
  $media['menu_1_2_18']=true;
  $media['menu_1_2_19']=true;
  $media['menu_1_2_22']=true;
  $media['menu_1_2_24']=true;
  $media['menu_1_2_25']=true;
  $media['menu_1_2_26']=true;

  $media['menu_2_1']=true;

  $media['menu_3_2_1']=true;
  $media['menu_3_2_2']=true;

  $media['menu_4_1']=true;
  $media['menu_4_2']=true;
  $media['menu_4_3']=true;
  $media['menu_4_4']=true;
  $media['menu_4_9']=true;
  $media['menu_4_10']=true;
  $media['menu_4_13']=true;
  $media['menu_5_1_1']=true;
  $media['menu_6_2']=true;
  $media['menu_6_5']=true;
  $media['menu_6_7']=true;
  $media['menu_6_11']=true;

  $media['menu_7_1']=true;
  $media['menu_7_2']=true;
  $media['menu_7_3']=true;
  $media['menu_7_4']=true;
  $media['menu_7_5']=true;
  $media['menu_8_1']=true;
  $media['menu_8_2']=true;
  $media['menu_8_3']=true;
  $media['menu_8_4']=true;
  $media['menu_8_5']=true;
  $media['menu_8_6']=true;
?>

<!DOCTYPE html>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>세계 문화 여행</title>
    <link rel="stylesheet" href="./css/default.css">
  </head>
  <body>
    <div class="background">
      <div class="view_head">
        <a href="menu.php"><img src="./img/img_menubar.png" class="menubar"/></a>
        <?php
        if($media[$file_name]) $img_movie='img_movie.png';
        else $img_movie='img_nomovie.png';
        ?>
        <img src="./img/<?php echo $img_movie?>" class="movie" <?php if($img_movie=='img_movie.png') echo "onclick=\" location.href='media.php?menu={$_GET['menu']}&id={$_GET['id']}&ogg={$_GET['ogg']}'\""?>/>

        <?php
        if($_GET['menu'][0]=='1'||$_GET['menu'][0]=='3'||$_GET['menu'][0]=='5') {
          ?>
        <a href="view.php?menu=<?php echo $_GET['menu'][0].'_1'?>">
        <div class="seperate <?php if($_GET['menu'][2]=='1') echo 'clicked'; ?> ">
          <img src="./img/icon_menu_<?php echo $_GET['menu'][0].'_1' ?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu'][0].'_1'];?></p>
        </div></a>
        <a href="view.php?menu=<?php echo $_GET['menu'][0].'_2'?>">
        <div class="seperate <?php if($_GET['menu'][2]=='2') echo 'clicked'; ?> ">
          <img src="./img/icon_menu_<?php echo $_GET['menu'][0].'_2' ?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu'][0].'_2'];?></p>
        </div></a>
        <?php }
        else {
          ?>
        <div class="submenu clicked">
          <img src="./img/icon_menu_<?php echo $_GET['menu']?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu']]; ?></p>
        </div>
        <?php }?>

      </div>
      <?php
      if(!($_GET['menu']=='7'||$_GET['menu']=='8')) {
      ?>
      <div class="view_main">
        <a href="view.php?menu=<?php echo $_GET['menu']?>&id=<?php echo $_GET['id']-1?>"><img src="./img/img_before.png" class="before"/></a>
        <img src="./img/<?php echo $file_name?>.jpg" class="mainimg"/>
        <a href="view.php?menu=<?php echo $_GET['menu']?>&id=<?php echo $_GET['id']+1?>"><img src="./img/img_next.png" class="next"/></a>
      </div>
    <?php } else if($_GET['menu']=='7'){ ?>
        <div class="view_main">
          <a href="media.php?menu=7&id=1&ogg=true"><div class="button left"><p>수건 돌려라</p></div></a>
          <a href="media.php?menu=7&id=2&ogg=true"><div class="button right"><p>에비뇽 다리 앞에서</p></div></a>
          <a href="media.php?menu=7&id=3&ogg=true"><div class="button left"><p>안녕</p></div></a>
          <a href="media.php?menu=7&id=4&ogg=true"><div class="button right"><p>아리랑</p></div></a>
          <a href="media.php?menu=7&id=5&ogg=true"><div class="button left"><p>안녕 반가워요</p></div></a>
        </div>
    <?php } else if($_GET['menu']=='8'){ ?>
        <div class="view_main">
          <a href="media.php?menu=8&id=1"><div class="button left"><p>강강술래 (대한민국)</p></div></a>
          <a href="media.php?menu=8&id=2"><div class="button right"><p>포크댄스 (독일)</p></div></a>
          <a href="media.php?menu=8&id=3"><div class="button left"><p>플라멩코 (스페인)</p></div></a>
          <a href="media.php?menu=8&id=4"><div class="button right"><p>하카 (뉴질랜드)</p></div></a>
          <a href="media.php?menu=8&id=5"><div class="button left"><p>플립플롭믹서 (미국)</p></div></a>
          <a href="media.php?menu=8&id=6"><div class="button right"><p>아두무 (케냐)</p></div></a>
        </div>
    <?php }?>
      <div class="view_footer">
        <img src="./img/img_statebar.png" class="statebar"/>
        <img src="./img/img_minirocket.png" class="rocket" style="left:<?php echo -43+23*($_GET['id']/$total_file)?>%" />
        <a href="index.php"><img src="./img/img_earth.png" class="home"/></a>
      </div>
    </div>
  </body>
</html>
