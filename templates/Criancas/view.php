<!-- Breadcrumbs -->
<?php
    $this->Breadcrumbs->add([
        ['title' => 'Criancas', 'url' => ['controller' => 'criancas', 'action' => 'index']],
        ['title' => 'Visualizar']
    ]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8 offset-md-2">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Visualizar criança
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Detalhes</h4>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-sm">
                                <tr>
                                    <th><?= __('Nome') ?></th>
                                    <td><?= h($crianca->nome) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Sobrenome') ?></th>
                                    <td><?= h($crianca->sobrenome) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Sexo') ?></th>
                                    <td><?= h($crianca->sexo) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Idade') ?></th>
                                    <td><?= h($crianca->idade) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Tamanho da camiseta/blusa') ?></th>
                                    <td><?= h($crianca->tamanho_roupa) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Tamanho da calça/short') ?></th>
                                    <td><?= h($crianca->tamanho_calca) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Tamanho do calçado') ?></th>
                                    <td><?= h($crianca->tamanho_calcado) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Cartinha') ?></th>
                                    <td>
                                    <?php if ($crianca->carta) : ?>
                                        <button type="button" class="btn btn-info btn-sm open-modal" data-toggle="modal" data-target="#criancaModal">
                                            Ver cartinha
                                        </button>
                                    <?php else : ?>
                                        Não possui cartinha
                                    <?php endif; ?>
                                    
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <th><?= __('Nome Padrinho') ?></th>
                                    <td><?= h($crianca->nome_padrinho) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Tel Padrinho') ?></th>
                                    <td><?= h($crianca->tel_padrinho) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Email Padrinho') ?></th>
                                    <td><?= h($crianca->email_padrinho) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Status') ?></th>
                                    <td>
                                        <?php
                                            switch ($crianca->status) {
                                                case '0':
                                                    echo 'Disponível';
                                                    break;
                                                
                                                case '1':
                                                    echo 'Aguardando contato';
                                                    break;

                                                case '2':
                                                    echo 'Presenteado';
                                                    break;
                                            }
                                            $crianca->status 
                                        ?>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="criancaModal" tabindex="-1" aria-labelledby="criancaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-danger">
        <h5 class="modal-title" id="criancaModalLabel">Cartinha de <?= $crianca->nome ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $this->Html->image($crianca->carta, ['class' => 'img-fluid']) ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
