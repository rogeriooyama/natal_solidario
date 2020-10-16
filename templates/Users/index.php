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
                        <?= $this->Html->link("Novo Administrador", ['action' => 'add'], ['class' => 'btn btn-sm btn-primary float-right']) ?>
                        <h3 class="card-title">Lista de Administradores</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('nome') ?></th>
                                    <th><?= $this->Paginator->sort('sobrenome') ?></th>
                                    <th><?= $this->Paginator->sort('username') ?></th>
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= h($user->nome) ?></td>
                                    <td><?= h($user->sobrenome) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <td class="actions text-nowrap">
                                        <?= $this->Html->link('<i class="far fa-eye"></i> visualizar', ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm', 'escape' => false]) ?>
                                        <?= $this->Html->link('<i class="far fa-edit"></i> editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-sm', 'escape' => false]) ?>
                                        <?= $this->Form->postLink('<i class="far fa-trash-alt"></i> excluir', ['action' => 'delete', $user->id], ['confirm' => __("Tem certeza que quer deletar o gestor '".$user->username."'?"), 'class' => 'btn btn-danger btn-sm', 'escape' => false]) ?>
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
