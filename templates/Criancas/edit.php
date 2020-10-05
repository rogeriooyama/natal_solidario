<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crianca $crianca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $crianca->id],
                ['confirm' => __('Deseja realmente excluir?'), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Crianças'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="criancas form content">
            <?= $this->Form->create($crianca) ?>
            <fieldset>
                <legend><?= __('Editar Criança') ?></legend>
                <?php
                    echo $this->Form->control('nome', ['label' => 'Nome']);
                    echo $this->Form->control('sobrenome', ['label' => 'Sobrenome']);
                    echo $this->Form->control('sexo', [
                        'label' => 'Sexo', 
                        'type' => 'select',
                        'options' => [''=>'', 'Masculino' => 'Masculino', 'Feminino' => 'Feminino'],
                        'class' => 'form-control mb-2'
                        ]);
                    echo $this->Form->control('idade', ['label' => 'Idade']);
                    echo $this->Form->control('observacoes', ['label' => 'Observações']);
                    echo '<hr/>';
                    echo $this->Form->control('nome_padrinho', ['label' => 'Nome do padrinho']);
                    echo $this->Form->control('tel_padrinho', ['label' => 'Telefone do padrinho']);
                    echo $this->Form->control('email_padrinho', ['label' => 'Email do padrinho']);
                    echo '<hr/>';
                    echo $this->Form->control('status', [
                        'label' => 'Status', 
                        'type' => 'select',
                        'options' => [''=>'', '0' => 'Disponível', '1' => 'Aguardando contato', '2' => 'Confirmado'],
                        'class' => 'form-control mb-2'
                        ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
