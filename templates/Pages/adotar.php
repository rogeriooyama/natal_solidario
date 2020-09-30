<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($crianca) ?>
            <fieldset>
                <legend><?= __('Por favor, insira seu contato:') ?></legend>
                <?php
                    echo $this->Form->control('nome_padrinho',['label'=>'Nome']);
                    echo $this->Form->control('tel_padrinho',['label'=>'Telefone']);
                    echo $this->Form->control('email_padrinho',['label'=>'E-mail']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
