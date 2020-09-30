      <div class="row mb-5"></div>
      <div class="row">
        <div class="col-lg-6">
          <div class="tree">
            <?= $this->Html->image('christmas_tree.png') ?>
            <?php for($i=1;$i<=20;$i++) {
                  echo '<div id="pin-1-'.$i.'" class="'.$criancas[$i]['sexo'].'">
                          <div class="pin-text">
                            <h3>'.$criancas[$i]['nome'].'</h3>
                            <p>'.$criancas[$i]['idade'].' anos</p>'?>
                            <?= $this->Html->link('Adotar', ['action' => 'adotar', $criancas[$i]['id']], ['class' => 'btn btn-info btn-sm', 'target' => '_blank']); ?>
                          <?php echo '</div></div>'; 
            } ?>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="content">
            <h1><?= $this->Html->image('bells.png', ['class' => 'mr-1', 'style' => 'height: 40px; vertical-align: text-top;']) ?>Natal Solidario</h1>
            
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus accumsan tristique. Ut ornare, nisi at dignissim aliquam, justo tortor ultrices metus, a euismod orci lacus eget sem. Suspendisse eu euismod mi. Sed eget vulputate lectus, a rutrum eros. Quisque maximus dignissim purus sed commodo. Cras orci risus, mollis vel augue pulvinar, euismod volutpat velit. Morbi dictum tempus velit, vitae auctor justo congue et. Suspendisse sit amet tincidunt nisl. Donec porttitor, velit at consectetur posuere, dui diam sodales sem, ut tempus magna arcu id erat. Cras lacinia purus a sem interdum semper. Cras sed laoreet magna. Donec dignissim malesuada nulla, sed facilisis ligula scelerisque euismod.
            </p>
          </div>
        </div>
      </div> 