      <div class="row"></div>
      <div class="row">
        <div class="col-lg-6">
          <div class="tree">
            <?= $this->Html->image('christmas_tree.png') ?>
            <?php            
                  for($i=0;$i<20;$i++) {
                    $cod=$i+1;
                    echo '<div id="pin-1-'.$cod.'" class="'.$criancas[$i]['sexo'].'-'.$criancas[$i]['status'].'">
                          <div class="pin-text">
                            <h3>'.$criancas[$i]['nome'].'</h3>
                            <p>'.$criancas[$i]['idade'].' anos</p>'?>
                            <?= $criancas[$i]['status'] == 0 ? $this->Html->link('Presentear', ['action' => 'adotar', $criancas[$i]['id']], ['class' => 'btn btn-info btn-sm']) : "Presenteado"; ?>
                          <?php echo '</div></div>'; 
            } ?>
          </div>
          <div class="mb-5">
            <?= $this->Html->image('contador.png',['class' => 'img-fluid']) ?>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="content">
            <div class="row">
              <div class="mr-auto">
                <p class="title">Natal Solidário</p>
              </div>
              <div class="">
                <?= $this->Html->image('flower-bells.png', ['class' => 'ml-auto', 'style' => 'height: 70px; vertical-align: super;']) ?>
              </div>  
            </div>            
            <div class="row mb-3">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus accumsan tristique. Ut ornare, nisi at dignissim aliquam, justo tortor ultrices metus, a euismod orci lacus eget sem. Suspendisse eu euismod mi. Sed eget vulputate lectus, a rutrum eros. Quisque maximus dignissim purus sed commodo. Cras orci risus, mollis vel augue pulvinar, euismod volutpat velit. Morbi dictum tempus velit, vitae auctor justo congue et. Suspendisse sit amet tincidunt nisl. 
              </p>
              <p>
              Donec porttitor, velit at consectetur posuere, dui diam sodales sem, ut tempus magna arcu id erat. Cras lacinia purus a sem interdum semper.
              </p>
            </div>            
          </div>
        </div>
      </div>