
<?php

function remoteFileExist($filepath) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$filepath);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if(curl_exec($ch)!==false) {
        return true;
    } else {
        return false;
    }
}

  if(!$_GET['id'])$_GET['id']=1;
  $file_name = 'menu_'.$_GET['menu'].'_'.$_GET['id'];
  $total_file = 0;
  if($_GET['menu']=='3_2') $_GET['ogg']='true';
  for($i=1;;$i++){
    $tmp_is_file=remoteFileExist('https://storage.googleapis.com/worldct.appspot.com/img/'.'menu_'.$_GET['menu'].'_'.$i.'.jpg');
    if(!$tmp_is_file){
      $total_file=$i-1;
      break;
    }
  }
  if(!($_GET['menu']=='7'||$_GET['menu']=='8')){
    $is_file = remoteFileExist('https://storage.googleapis.com/worldct.appspot.com/img/'.$file_name.'.jpg');
    if(!$is_file){
      if($_GET['id']<='0'&&$_GET['id']){
        $tmp=$total_file;
      }
      else{
        $tmp=1;
      }

      header("Location: ./view.php?menu={$_GET['menu']}&id={$tmp} ");
    }
  }
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
        <a href="menu.php"><img src="https://storage.googleapis.com/worldct.appspot.com/img/img_menubar.png" class="menubar"/></a>
        <?php
        $is_file = remoteFileExist('https://storage.googleapis.com/worldct.appspot.com/media/'.$file_name.'.mp4');
        if($is_file) $img_movie='img_movie.png';
        else $img_movie='img_nomovie.png';
        ?>
        <img src="https://storage.googleapis.com/worldct.appspot.com/img/<?php echo $img_movie?>" class="movie" <?php if($img_movie=='img_movie.png') echo "onclick=\" location.href='media.php?menu={$_GET['menu']}&id={$_GET['id']}&ogg={$_GET['ogg']}'\""?>/>

        <?php
        if($_GET['menu'][0]=='1'||$_GET['menu'][0]=='3'||$_GET['menu'][0]=='5') {
          ?>
        <a href="view.php?menu=<?php echo $_GET['menu'][0].'_1'?>">
        <div class="seperate <?php if($_GET['menu'][2]=='1') echo 'clicked'; ?> ">
          <img src="https://storage.googleapis.com/worldct.appspot.com/img/icon_menu_<?php echo $_GET['menu'][0].'_1' ?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu'][0].'_1'];?></p>
        </div></a>
        <a href="view.php?menu=<?php echo $_GET['menu'][0].'_2'?>">
        <div class="seperate <?php if($_GET['menu'][2]=='2') echo 'clicked'; ?> ">
          <img src="https://storage.googleapis.com/worldct.appspot.com/img/icon_menu_<?php echo $_GET['menu'][0].'_2' ?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu'][0].'_2'];?></p>
        </div></a>
        <?php }
        else {
          ?>
        <div class="submenu clicked">
          <img src="https://storage.googleapis.com/worldct.appspot.com/img/icon_menu_<?php echo $_GET['menu']?>.png" class="icon">
          <p class="describe"><?php echo $menu_name[$_GET['menu']]; ?></p>
        </div>
        <?php }?>

      </div>
      <?php
      if(!($_GET['menu']=='7'||$_GET['menu']=='8')) {
      ?>
      <div class="view_main">
        <a href="view.php?menu=<?php echo $_GET['menu']?>&id=<?php echo $_GET['id']-1?>"><img src="https://storage.googleapis.com/worldct.appspot.com/img/img_before.png" class="before"/></a>
        <img src="https://storage.googleapis.com/worldct.appspot.com/img/<?php echo $file_name?>.jpg" class="mainimg"/>
        <a href="view.php?menu=<?php echo $_GET['menu']?>&id=<?php echo $_GET['id']+1?>"><img src="https://storage.googleapis.com/worldct.appspot.com/img/img_next.png" class="next"/></a>
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
        <img src="https://storage.googleapis.com/worldct.appspot.com/img/img_statebar.png" class="statebar"/>
        <img src="https://storage.googleapis.com/worldct.appspot.com/img/img_minirocket.png" class="rocket" style="left:<?php echo -43+23*($_GET['id']/$total_file)?>%" />
        <a href="index.php"><img src="https://storage.googleapis.com/worldct.appspot.com/img/img_earth.png" class="home"/></a>
      </div>
    </div>
  </body>
</html>
