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
            <?= $this->Html->link(__('Listar Crianças'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="criancas form content">
            <?= $this->Form->create($crianca) ?>
            <fieldset>
                <legend><?= __('Cadastrar Criança') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('sobrenome');
                    echo $this->Form->control('sexo', [
                        'label' => 'Sexo', 
                        'type' => 'select',
                        'options' => [''=>'', 'Masculino' => 'Masculino', 'Feminino' => 'Feminino'],
                        'class' => 'form-control mb-2'
                        ]);
                    echo $this->Form->control('idade');
                    echo $this->Form->control('observacoes');
                    echo $this->Form->control('nome_padrinho');
                    echo $this->Form->control('tel_padrinho');
                    echo $this->Form->control('email_padrinho');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
