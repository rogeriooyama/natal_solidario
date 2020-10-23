      <div class="row mt-4"></div>
      <div class="row">
        <div class="col-lg-6">
          <div>
            <div class="tree">
              <?= $this->Html->image('christmas_tree.png') ?>
              <?php            
                for($i=0;$i<20;$i++) :
                  $cod=$i+1; ?>
                  <div id="pin-1-<?= $cod ?>" class="<?= $criancas[$i]['sexo'] ?>-<?= $criancas[$i]['status'] ?>">
                    <div class="pin-text">
                      <h3><?= $criancas[$i]['nome'] ?></h3>
                      <p><?= $criancas[$i]['idade']?> anos</p>                                
                      <?php if ($criancas[$i]['status'] == 0) : ?>
                        <button carta="<?= $criancas[$i]['carta'] ?>" id="<?= $criancas[$i]['id'] ?>" title="Cartinha de <?= $criancas[$i]['nome'] ?> - <?= $criancas[$i]['idade'] ?> anos" type="button" class="btn btn-info btn-sm open-modal" data-toggle="modal" data-target="#criancaModal">
                          Ver cartinha
                        </button>
                      <?php else : ?>
                          Presenteado
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endfor; ?>
            </div>
          </div>          
          <div class="container mb-5">
            <div class="row mb-3">
              <div class="col-6 offset-3 logo-arvore">
                <?= $this->Html->image('Logo_Inova_Prudente-1.png', ['class' => 'img-fluid']) ?>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-4">
                  <div class="painel">
                    <span class="legenda">Aguardando</span>
                    <br/>
                    <span class="numeros"><?= $aguardando ?></span>  
                  </div> 
              </div>
              <div class="col-4">
                  <div class="painel-1">
                    <span class="legenda">Presenteadas</span>
                    <br/>
                    <span class="numeros"><?= $numpresenteadas ?></span>  
                  </div> 
              </div>
              <div class="col-4">
                  <div class="painel">
                    <span class="legenda">Total</span>
                    <br/>
                    <span class="numeros"><?= $totalcriancas ?></span>
                  </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="content">
            <div class="row">
              <div class="mr-auto">
                <p class="title">Natal de Luz</p>
              </div>
              <div class="">
                <?= $this->Html->image('flower-bells.png', ['class' => 'ml-auto', 'style' => 'height: 70px; vertical-align: super;']) ?>
              </div>  
            </div>            
            <div class="mb-5">
              <div class="row text-justify">
                <p>
                  Seja bem-vindo a 1ª edição do Projeto Natal de Luz. O objetivo da presente campanha é tornar real o sonho de nossas crianças e adolescentes, trazendo consigo a alegria e o espírito de natal e fraternidade.
                </p>
                <p>
                  Neste ano desafiador de 2020, nossa tradicional árvore de natal deixou de ser física para ser virtual e nós tivemos que nos reinventar para dar seguimento a este projeto que, muito além de roupas, leva solidariedade e esperança para nossas crianças.
                </p>
                <p>
                  O Lar Santa Filomena inspira crianças a serem crianças, tendo como missão garantir a dignidade de 158 crianças e adolescentes atendidas pelo Serviço de Convivência e Fortalecimento de Vínculo – PROJETO CAE (Conhecimento Além da escola). 
                </p>
                <p>
                  Por isso convidamos você a participar e conectar conosco nesse lindo projeto.<br/>
                </p>
              </div>
              <div class="row text-justify">
                <p class="subtitle">Como funciona:</p>
                <p>
                  Para participar, basta escolher uma bola na árvore virtual e ir em "ver cartinha" para conhecer um pouco sobre a criança/ou adolescente que escolheu. Ao final, clique em presentear e terá todas as informações necessárias. Cadastre-se para que possamos entrar em contato e combinar com você a melhor forma de fazer isso acontecer.
                </p>
                <p>
                  O projeto Natal de Luz encerra no dia 30/11/2020. <br>
                  Entrega dos Presentes diretamente no Lar Santa Filomena <br>
                  (Rua: Luiz Carlos Ferrari, 125 Jardim Itapura I).
                </p>
                <p>
                  Obs: A entrega dos presentes arrecadados para as crianças e adolescentes será realizada no dia 18 de dezembro de 2020.
                </p>
                <p>
                  <div class="mr-auto"><small>Lar Santa Filomena: <i class="fas fa-phone-alt"></i> (18) 3223-4786</small></div><div><small><a href="https://larsantafilomena.org.br/" target="_blank"><i class="fas fa-home"></i> Site</a>&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/scblarsantafilomena/" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/larsantafilomena/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> Instagram</a></small></div>
                </p>
              </div>
            </div>            
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="criancaModal" tabindex="-1" aria-labelledby="criancaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-danger">
        <h5 class="modal-title" id="criancaModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="urlCarta" src="" class="img-fluid" alt="Imagem da cartinha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
        <a id="linkPresentear" href="" class="btn btn-success btn-sm">Presentear</a>
      </div>
    </div>
  </div>
</div>