<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!-- Breadcrumbs -->
<?php
    $this->Breadcrumbs->add([
    ]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <?= $this->Html->link("Nova Criança", ['action' => 'add'], ['class' => 'btn btn-sm btn-primary float-right']) ?>
                        <h3 class="card-title">Lista de Crianças</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('sobrenome') ?></th>
                                <th><?= $this->Paginator->sort('sexo') ?></th>
                                <th><?= $this->Paginator->sort('idade') ?></th>
                                <th><?= $this->Paginator->sort('tamanho_roupa') ?></th>
                                <th><?= $this->Paginator->sort('tamanho_calca') ?></th>
                                <th><?= $this->Paginator->sort('tamanho_calcado') ?></th>
                                <th><?= $this->Paginator->sort('carta') ?></th>
                                <th><?= $this->Paginator->sort('nome_padrinho') ?></th>
                                <th><?= $this->Paginator->sort('tel_padrinho') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($criancas as $crianca): ?>
                                <tr>
                                <td><?= h($crianca->nome) ?></td>
                                <td><?= h($crianca->sobrenome) ?></td>
                                <td><?= h($crianca->sexo) ?></td>
                                <td><?= h($crianca->idade) ?></td>
                                <td><?= h($crianca->tamanho_roupa) ?></td>
                                <td><?= h($crianca->tamanho_calca) ?></td>
                                <td><?= h($crianca->tamanho_calcado) ?></td>
                                <td class="text-nowrap">
                                    <?php if(isset($crianca->carta) && !empty($crianca->carta)) : ?>
                                        <button carta="<?= '/..' . $crianca->carta ?>" title="Cartinha de <?= $crianca->nome ?>" type="button" class="btn btn-info btn-sm open-modal" data-toggle="modal" data-target="#criancaModal">
                                        <i class="far fa-eye"></i> Ver cartinha
                                        </button>
                                    <?php endif; ?>                                    
                                </td>
                                <td><?= h($crianca->nome_padrinho) ?></td>
                                <td><?= h($crianca->tel_padrinho) ?></td>
                                <td>
                                    <?php
                                        switch ($crianca->status) {
                                            case '0':
                                                echo '<span class="badge badge-primary">Disponível</span>';
                                                break;
                                            
                                            case '1':
                                                echo '<span class="badge badge-info">Aguardando contato</span>';
                                                break;
                                            
                                            case '2':
                                                echo '<span class="badge badge-warning">Aguardando presente</span>';
                                                break;

                                            case '3':
                                                echo '<span class="badge badge-success">Presenteado</span>';
                                                break;
                                        }
                                        $crianca->status 
                                    ?>
                                </td>
                                    <td class="actions text-nowrap">
                                        <?= $this->Html->link('<i class="far fa-eye"></i> visualizar', ['action' => 'view', $crianca->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="far fa-edit"></i> editar', ['action' => 'edit', $crianca->id], ['class' => 'btn btn-warning btn-sm', 'escape' => false]) ?>                                        
                                        <?= $this->Html->link('<i class="fas fa-envelope-open-text"></i> cartinha', ['action' => 'carta', $crianca->id], ['class' => 'btn btn-primary btn-sm', 'escape' => false]) ?>
                                        <?= $this->Form->postLink('<i class="far fa-trash-alt"></i> excluir', ['action' => 'delete', $crianca->id], ['confirm' => __("Tem certeza que quer excluir a criança ".$crianca->nome."?"), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?= $this->element('pagination') ?>
            </div>
        </div>
    </div>
</section>

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
        <img id="urlCarta" src="" class="img-fluid" alt="Imagem da cartinha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>