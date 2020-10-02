<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="content" style="margin: 100px 0px 70px 0px;">
            <p class="title">Muito Obrigado!</p>
            <p class="lead text-center">
                Nós, do Lar Santa Filomena, ficamos muito felizes em saber que se interessou em presentear uma de nossas crianças.
            </p>
            <p class="lead text-center mb-5">
                Em breve, entraremos em contato para confirmarmos algumas informações.
            </p>
            <p class="text-center mb-5">
                <?= $this->Html->link('Voltar à página inicial', ['action' => 'index']) ?>
            </p>
        </div>
    </div>
</div>
