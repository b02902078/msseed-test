<div>
  <div>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>
                <div>

                  <div class="col-xs-3 wrapper raw-wrapper">
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

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?></div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?></div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?></div>
                    <img src="png/s_raw/shaft.png" class="img-responsive icon-materials" alt="轉軸">
                    <p class="name raw-name text-center">轉軸</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?></div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][6]; } ?></div>
                    <img src="png/s_raw/seed.png" class="img-responsive icon-materials" alt="種子">
                    <p class="name raw-name text-center">種子</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?></div>
                    <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
                    <p class="name raw-name text-center">生命之水</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?></div>
                    <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
                    <p class="name raw-name text-center">神聖光芒</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][9]; } ?></div>
                    <img src="png/s_raw/flax.png" class="img-responsive icon-materials" alt="麻">
                    <p class="name raw-name text-center">麻</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?></div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?></div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?></div>
                    <img src="png/s_raw/electron.png" class="img-responsive icon-materials" alt="十萬伏特">
                    <p class="name raw-name text-center">十萬伏特</p>
                  </div>


                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?></div>
                    <img src="png/s_raw/ergonomic.png" class="img-responsive icon-materials" alt="人體工學">
                    <p class="name raw-name text-center">人體工學</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?></div>
                    <img src="png/s_raw/imagine.png" class="img-responsive icon-materials" alt="想像力">
                    <p class="name raw-name text-center">想像力</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?></div>
                    <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
                    <p class="name raw-name text-center">金屬</p>
                  </div>

                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?></div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>


                  <!-- Special Materials -->

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][27]; } ?></div>
                    <img src="png/s_special/elk.png" class="img-responsive icon-special" alt="麋鹿">
                    <p class="name special-name text-center">麋鹿</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][28]; } ?></div>
                    <img src="png/s_special/s_logo.png" class="img-responsive icon-special" alt="S logo">
                    <p class="name special-name text-center">S logo</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][29]; } ?></div>
                    <img src="png/s_special/sound.png" class="img-responsive icon-special" alt="叫聲">
                    <p class="name special-name text-center">叫聲</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][30]; } ?></div>
                    <img src="png/s_special/sd_card.png" class="img-responsive icon-special" alt="SD卡">
                    <p class="name special-name text-center">SD卡</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][31]; } ?></div>
                    <img src="png/s_special/missile.png" class="img-responsive icon-special" alt="飛彈">
                    <p class="name special-name text-center">飛彈</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][32]; } ?></div>
                    <img src="png/s_special/miss_air.png" class="img-responsive icon-special" alt="空姐">
                    <p class="name special-name text-center">空姐</p>
                  </div>

                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][33]; } ?></div>
                    <img src="png/s_special/led_light.png" class="img-responsive icon-special" alt="LED燈">
                    <p class="name special-name text-center">LED燈</p>
                  </div>


                  <!-- Components -->

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?></div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?></div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?></div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?></div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?></div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?></div>
                    <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
                    <p class="name component-name text-center">檜木</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?></div>
                    <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
                    <p class="name component-name text-center">螺旋槳</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?></div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?></div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>

                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?></div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
