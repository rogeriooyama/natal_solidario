      <div class="row mb-5"></div>
      <div class="row">
        <div class="col-lg-6">
          <div class="tree">
            <?= $this->Html->image('christmas_tree.png') ?>
            <?php            
                  $presenteadas = 0;
                  //Verifica se existe ao menos 20 crianças, preenche o resto com fakes
                  for($i=0;$i<20;$i++) {
                    if($criancas[$i] == null) {
                      $criancas[$i] = $fake[$i];
                    }
                  }
                  //Verifica o número de crianças já presenteadas e armazena o índice das crianças não presenteadas
                  for($i=0,$k=0;$i<count($criancas);$i++) {
                    if($criancas[$i]['status'] == 2) {
                      $presenteadas++;
                    }
                    else if($criancas[$i]['status'] == 0) {
                      $npresenteadas[$k] = $i;
                      $k++;
                    }
                  }
                  //Exibir pelo menos 5 crianças presenteadas
                  if($presenteadas < 5) {
                    for($i=0;$i<5-$presenteadas;$i++) {
                      $ind = $npresenteadas[$i];
                      $criancas[$ind] = $fake[$ind];
                    }
                  }
                  shuffle($criancas);
                  for($i=0;$i<20;$i++) {
                    $cod=$i+1;
                    echo '<div id="pin-1-'.$cod.'" class="'.$criancas[$i]['sexo'].'-'.$criancas[$i]['status'].'">
                          <div class="pin-text">
                            <h3>'.$criancas[$i]['nome'].'</h3>
                            <p>'.$criancas[$i]['idade'].' anos</p>'?>
                            <?= $criancas[$i]['status'] == 0 ? $this->Html->link('Presentear', ['action' => 'adotar', $criancas[$i]['id']], ['class' => 'btn btn-info btn-sm', 'target' => '_blank']) : "Presenteado"; ?>
                          <?php echo '</div></div>'; 
            } ?>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="content">
<<<<<<< Updated upstream
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
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus accumsan tristique. Ut ornare, nisi at dignissim aliquam, justo tortor ultrices metus, a euismod orci lacus eget sem. Suspendisse eu euismod mi. Sed eget vulputate lectus, a rutrum eros. Quisque maximus dignissim purus sed commodo. Cras orci risus, mollis vel augue pulvinar, euismod volutpat velit. Morbi dictum tempus velit, vitae auctor justo congue et. Suspendisse sit amet tincidunt nisl. Donec porttitor, velit at consectetur posuere, dui diam sodales sem, ut tempus magna arcu id erat. Cras lacinia purus a sem interdum semper.
              </p>
            </div>            
=======
            <h1><?= $this->Html->image('bells.png', ['class' => 'mr-1', 'style' => 'height: 40px; vertical-align: text-top;']) ?>Natal Solidario</h1>
            
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus accumsan tristique. Ut ornare, nisi at dignissim aliquam, justo tortor ultrices metus, a euismod orci lacus eget sem. Suspendisse eu euismod mi. Sed eget vulputate lectus, a rutrum eros. Quisque maximus dignissim purus sed commodo. Cras orci risus, mollis vel augue pulvinar, euismod volutpat velit. Morbi dictum tempus velit, vitae auctor justo congue et. Suspendisse sit amet tincidunt nisl. Donec porttitor, velit at consectetur posuere, dui diam sodales sem, ut tempus magna arcu id erat. Cras lacinia purus a sem interdum semper. Cras sed laoreet magna. Donec dignissim malesuada nulla, sed facilisis ligula scelerisque euismod.
            </p>
>>>>>>> Stashed changes
          </div>
        </div>
      </div>