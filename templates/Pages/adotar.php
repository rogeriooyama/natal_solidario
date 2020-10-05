<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head><script src='https://www.google.com/recaptcha/api.js'></script></head>
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="formulario form-group">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($crianca) ?>
                <legend><?= __('Por favor, insira seu contato:') ?></legend>
                <?php
                    echo $this->Form->control('nome_padrinho',['label'=>'Nome completo', 'class' => 'form-control mb-3', 'required' => 'required']);
                    echo $this->Form->control('tel_padrinho',['label'=>'Telefone', 'class' => 'form-control mb-3', 'required' => 'required']);
                    echo $this->Form->control('email_padrinho',['label'=>'E-mail', 'class' => 'form-control mb-3', 'required' => 'required']);
                ?>
            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>    
            <?= $this->Form->button(__('Enviar informações'), ['class' => 'btn btn-block btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
