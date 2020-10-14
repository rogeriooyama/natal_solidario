<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crianca[]|\Cake\Collection\CollectionInterface $criancas
 */
?>
<div class="criancas index content">
    <?= $this->Html->link(__('Cadastrar Criança'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crianças') ?></h3>
    <div class="table-responsive p-0">
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
                    <th class="actions"><?= __('Ações') ?></th>
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
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $crianca->id], ['class' => 'btn btn-outline-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $crianca->id], ['class' => 'btn btn-outline-warning']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $crianca->id], ['confirm' => __('Deseja realmente excluir?'), 'class' => 'btn btn-outline-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}} totais')) ?></p>
    </div>
</div>
