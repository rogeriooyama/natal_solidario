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
                                <td><?= h($crianca->tamanho_calcado) ?></td>
                                <td><?= isset($crianca->carta) && !empty($crianca->carta) ? $this->Html->link('Visualizar', $crianca->carta, ['fullBase' => true, 'target' => '_blank']) : ' ' ?></td>
                                <td><?= h($crianca->nome_padrinho) ?></td>
                                <td><?= h($crianca->tel_padrinho) ?></td>
                                <td>
                                    <?php
                                        switch ($crianca->status) {
                                            case '0':
                                                echo '<span class="badge badge-primary">Disponível</span>';
                                                break;
                                            
                                            case '1':
                                                echo '<span class="badge badge-warning">Aguardando contato</span>';
                                                break;

                                            case '2':
                                                echo '<span class="badge badge-success">Confirmado</span>';
                                                break;
                                        }
                                        $crianca->status 
                                    ?>
                                </td>
                                    <td class="actions text-nowrap">
                                        <?= $this->Html->link('<i class="far fa-eye"></i> visualizar', ['action' => 'view', $crianca->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="far fa-edit"></i> editar', ['action' => 'edit', $crianca->id], ['class' => 'btn btn-warning btn-sm', 'escape' => false]) ?>
                                        <?= $this->Form->postLink('<i class="far fa-trash-alt"></i> excluir', ['action' => 'delete', $crianca->id], ['confirm' => __("Tem certeza que quer deletar o gestor '".$crianca->username."'?"), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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
