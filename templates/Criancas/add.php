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
            <?= $this->Form->create($crianca, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Cadastrar Criança') ?></legend>
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
                    echo $this->Form->control('tamanho_roupa', ['label' => 'Tamanho da roupa']);
                    echo $this->Form->control('tamanho_calcado', ['label' => 'Tamanho do calçado']);
                    echo $this->Form->control('carta', ['type' => 'file', 'label' => 'Cartinha<small> (Imagem no formato png ou jpeg)</small>', 'class' => 'form-control mb-2', 'escape' => false]);
                    echo $this->Form->control('observacoes', ['label' => 'Observações']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
