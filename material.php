<?php
  session_start();
  header('Cache-Control: no-cache');
  header('Pragma: no-cache');
  $_SESSION["s_team"] = 'A'; //testing
?>

<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 據點地圖</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

  <!-- Tab Bar -->
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#raw">原料</a></li>
      <li><a data-toggle="tab" href="#special">特殊原料</a></li>
      <li><a data-toggle="tab" href="#component">零件</a></li>
      <li><a data-toggle="tab" href="#compose">合成</a></li>
      <li><a data-toggle="tab" href="#transport">交通工具</a></li>
      
    </ul>

    <div class="tab-content">
      <!-- Raw Materials -->
      <div id="raw" class="tab-pane fade in active">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count">
              <?php  
              require_once "getitems.php";
              #prepareResource();
              $items = getGroupResources($_SESSION["s_team"]);
              if(!empty($items)) { echo $items[0][1]; }
              ?>
            </div>
            <img src="png/s_raw/magic_powder.png" class="img-responsive icon-materials" alt="魔法粉末">
            <p class="name raw-name text-center">魔法粉末</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?></div>
            <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
            <p class="name raw-name text-center">布</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?></div>
            <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
            <p class="name raw-name text-center">紅寶石</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?></div>
            <img src="png/s_raw/shaft.png" class="img-responsive icon-materials" alt="轉軸">
            <p class="name raw-name text-center">轉軸</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?></div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
            <p class="name raw-name text-center">熊熊烈火</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][6]; } ?></div>
            <img src="png/s_raw/seed.png" class="img-responsive icon-materials" alt="種子">
            <p class="name raw-name text-center">種子</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?></div>
            <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
            <p class="name raw-name text-center">生命之水</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?></div>
            <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
            <p class="name raw-name text-center">神聖光芒</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][9]; } ?></div>
            <img src="png/s_raw/flax.png" class="img-responsive icon-materials" alt="麻">
            <p class="name raw-name text-center">麻</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?></div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
            <p class="name raw-name text-center">螺絲</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?></div>
            <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
            <p class="name raw-name text-center">塑料</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?></div>
            <img src="png/s_raw/electron.png" class="img-responsive icon-materials" alt="十萬伏特">
            <p class="name raw-name text-center">十萬伏特</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?></div>
            <img src="png/s_raw/ergonomic.png" class="img-responsive icon-materials" alt="人體工學">
            <p class="name raw-name text-center">人體工學</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?></div>
            <img src="png/s_raw/imagine.png" class="img-responsive icon-materials" alt="想像力">
            <p class="name raw-name text-center">想像力</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?></div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
            <p class="name raw-name text-center">金屬</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?></div>
            <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
            <p class="name raw-name text-center">大地氧氣</p>
          </div>
        </div>
      </div>

      <!-- Special Materials -->
      <div id="special" class="tab-pane fade">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][27]; } ?></div>
            <img src="png/s_raw/magic_powder.png" class="img-responsive icon-materials" alt="魔法粉末">
            <p class="name raw-name text-center">麋鹿</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][28]; } ?></div>
            <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
            <p class="name raw-name text-center">S logo</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][29]; } ?></div>
            <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
            <p class="name raw-name text-center">叫聲</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][30]; } ?></div>
            <img src="png/s_raw/shaft.png" class="img-responsive icon-materials" alt="轉軸">
            <p class="name raw-name text-center">SD卡</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][31]; } ?></div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
            <p class="name raw-name text-center">飛彈</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][32]; } ?></div>
            <img src="png/s_raw/seed.png" class="img-responsive icon-materials" alt="種子">
            <p class="name raw-name text-center">空姐</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][33]; } ?></div>
            <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
            <p class="name raw-name text-center">LED燈</p>
          </div>
          <div class="col-md-2 col-xs-3">
          </div>
        </div>
      </div>

      <!-- Components -->
      <div id="component" class="tab-pane fade">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?></div>
            <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
            <p class="name component-name text-center">魔法石</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?></div>
            <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
            <p class="name component-name text-center">控制面板</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?></div>
            <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
            <p class="name component-name text-center">座位</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?></div>
            <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
            <p class="name component-name text-center">方向盤</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?></div>
            <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
            <p class="name component-name text-center">繩子</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?></div>
            <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
            <p class="name component-name text-center">檜木</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?></div>
            <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
            <p class="name component-name text-center">螺旋槳</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?></div>
            <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
            <p class="name component-name text-center">門</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?></div>
            <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
            <p class="name component-name text-center">噴射器</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?></div>
            <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
            <p class="name component-name text-center">機艙</p>
          </div>
        </div>
      </div>

      <!-- Compose List -->
      <div id="compose" class="tab-pane fade">
        <!-- 魔法石 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper ">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/30</div>
            <img src="png/s_raw/magic_powder.png" class="img-responsive icon-components" alt="魔法粉末">
            <p class="name raw-name compose-name text-center">魔法粉末</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/18</div>
            <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
            <p class="name raw-name compose-name  text-center">神聖光芒</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/36</div>
            <img src="png/s_raw/imagine.png" class="img-responsive icon-components" alt="想像力">
            <p class="name raw-name compose-name  text-center">想像力</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">3</div>
            <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
            <p class="name component-name compose-name  text-center">魔法石</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 控制面板 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper ">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/24</div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
            <p class="name raw-name compose-name text-center">金屬</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
            <p class="name raw-name compose-name  text-center">神聖光芒</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/18</div>
            <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
            <p class="name raw-name compose-name  text-center">十萬伏特</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
            <p class="name component-name compose-name  text-center">控制面板</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 座位 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper ">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/12</div>
            <img src="png/s_raw/cloth.png" class="img-responsive icon-components" alt="布">
            <p class="name raw-name compose-name text-center">布</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/30</div>
            <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
            <p class="name raw-name compose-name  text-center">塑料</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/24</div>
            <img src="png/s_raw/ergonomic.png" class="img-responsive icon-components" alt="人體工學">
            <p class="name raw-name compose-name  text-center">人體工學</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
            <p class="name component-name compose-name  text-center">座位</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 方向盤 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper ">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/15</div>
            <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
            <p class="name raw-name compose-name  text-center">塑料</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/24</div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
            <p class="name raw-name compose-name  text-center">螺絲</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/30</div>
            <img src="png/s_raw/shaft.png" class="img-responsive icon-components" alt="轉軸">
            <p class="name raw-name compose-name  text-center">轉軸</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
            <p class="name component-name compose-name  text-center">方向盤</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 繩子 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper ">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/30</div>
            <img src="png/s_raw/flax.png" class="img-responsive icon-components" alt="麻">
            <p class="name raw-name compose-name  text-center">麻</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
            <p class="name raw-name compose-name  text-center">神聖光芒</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/24</div>
            <img src="png/s_raw/water.png" class="img-responsive icon-components" alt="生命之水">
            <p class="name raw-name compose-name  text-center">生命之水</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
            <p class="name component-name compose-name  text-center">繩子</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 檜木 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/30</div>
            <img src="png/s_raw/water.png" class="img-responsive icon-components" alt="生命之水">
            <p class="name raw-name compose-name  text-center">生命之水</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/18</div>
            <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
            <p class="name raw-name compose-name  text-center">神聖光芒</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/10</div>
            <img src="png/s_raw/seed.png" class="img-responsive icon-components" alt="種子">
            <p class="name raw-name compose-name  text-center">種子</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/12</div>
            <img src="png/s_raw/air.png" class="img-responsive icon-components" alt="大地氧氣">
            <p class="name raw-name compose-name  text-center">大地氧氣</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
            <p class="name component-name compose-name  text-center">檜木</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 螺旋槳 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
            <p class="name raw-name compose-name  text-center">塑料</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/shaft.png" class="img-responsive icon-components" alt="轉軸">
            <p class="name raw-name compose-name  text-center">轉軸</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/12</div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
            <p class="name raw-name compose-name  text-center">金屬</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/18</div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
            <p class="name raw-name compose-name  text-center">螺絲</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
            <p class="name component-name compose-name  text-center">螺旋槳</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 門 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/15</div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
            <p class="name raw-name compose-name  text-center">金屬</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/15</div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
            <p class="name raw-name compose-name  text-center">螺絲</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/12</div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
            <p class="name raw-name compose-name  text-center">熊熊烈火</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/ergonomic.png" class="img-responsive icon-components" alt="人體工學">
            <p class="name raw-name compose-name  text-center">人體工學</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
            <p class="name component-name compose-name  text-center">門</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 噴射器 -->
        <div class="row">
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/9</div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
            <p class="name raw-name compose-name  text-center">金屬</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/21</div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
            <p class="name raw-name compose-name  text-center">螺絲</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/15</div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
            <p class="name raw-name compose-name  text-center">熊熊烈火</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/24</div>
            <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
            <p class="name raw-name compose-name  text-center">十萬伏特</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
            <p class="name component-name compose-name  text-center">噴射器</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
        <!-- 機艙 -->
        <div class="row">
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/12</div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
            <p class="name raw-name compose-name  text-center">金屬</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/15</div>
            <img src="png/s_raw/air.png" class="img-responsive icon-components" alt="大地氧氣">
            <p class="name raw-name compose-name  text-center">大地氧氣</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/9</div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
            <p class="name raw-name compose-name  text-center">熊熊烈火</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/9</div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
            <p class="name raw-name compose-name  text-center">螺絲</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_plus.png" class="img-responsive icon-plus" alt="+">
          </div>
          <div class="col-xs-1 wrapper raw-wrapper">
            <div class="count raw-count compose-count">3/18</div>
            <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
            <p class="name raw-name compose-name  text-center">十萬伏特</p>
          </div>
          <div class="col-xs-1 wrapper symbol-wrapper">
            <img src="png/s_equal.png" class="img-responsive icon-equal" alt="+">
          </div>
          <div class="col-xs-1 wrapper component-wrapper">
            <div class="count component-count compose-count">1</div>
            <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
            <p class="name component-name compose-name  text-center">機艙</p>
          </div>
          <div class="col-xs-1 wrapper">
            <button type="button" class="btn btn-danger ok-button">OK</button>
          </div>         
        </div>
      </div>

      <!-- Transportation -->
      <div id="transport" class="tab-pane fade">
      </div>

    </div>
  </div>

  


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- My Scripts -->
  <script src="material.js"></script>
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="material.css">

</body>
</html>
