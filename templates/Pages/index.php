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
                        <button id="<?= $criancas[$i]['id'] ?>" title="Cartinha de <?= $criancas[$i]['nome'] ?> - <?= $criancas[$i]['idade'] ?> anos" type="button" class="btn btn-info btn-sm open-modal" data-toggle="modal" data-target="#criancaModal">
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
            <div class="mb-3">
              <div class="row">
                <p align="justify">
                  Seja bem-vindo(a) à XX edição do projeto Natal de Luz, em prol de XX crianças atendidas no Lar Santa Filomena, de Presidente Prudente-SP. 
                </p>
                <p align="justify">
                  Neste ano desafiador de 2020, nossa tradicional árvore de natal deixou de ser física para ser virtual e nós tivemos que nos reinventar para dar seguimento a este projeto que, muito além de roupas, leva solidariedade e esperança para nossas crianças.
                </p>
                <p>
                  Conecte-se conosco nesta rede de solidariedade!<br/>
                </p>
              </div>
              <div class="row">
                <p class="subtitle">Como funciona:</p>
                <p align="justify">
                  A ideia do projeto é a de que o participante escolha uma bola na árvore de natal virtual, selecione uma criança para ser presenteada com, pelo menos, uma roupa completa neste natal. Além  da roupa, o participante poderá, de forma opcional, adicionar calçados e brinquedos ou outro presente. 
                </p>
                <p align="justify">
                  Abaixo do nome e idade da criança, clique em ver cartinha e conheça um pouquinho da criança favorecida. Ao final, clique em presentear e terá todas as informações necessárias.
                  Cadastre-se para que possamos entrar em contato e combinar com você a melhor forma de fazer isso acontecer.
                </p>
                <p align="justify">
                  O projeto Natal de Luz encerra no dia 30/11/2020. <br>
                  Entrega dos presentes até 04/12/2020. <br>
                  Local de entrega: Lar Santa Filomena, R. Luís Carlos Ferrari, 125 - Jardim Itapura I e II, Pres. Prudente - SP
                </p>
              </div>
            </div>            
          </div>
        </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="criancaModal" tabindex="-1" aria-labelledby="criancaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-danger">
        <h5 class="modal-title" id="criancaModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $this->Html->image('cartinha_exemplo-1.jpg', ['class' => 'img-fluid']) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
        <a id="linkPresentear" href="" class="btn btn-success btn-sm">Presentear</a>
      </div>
    </div>
  </div>
</div>