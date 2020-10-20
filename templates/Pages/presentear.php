<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head><script src='https://www.google.com/recaptcha/api.js'></script></head>
<div class="row d-print-none">
    <div class="col-lg-6 offset-lg-3">
        <div class="formulario form-group">
            <?= $this->Flash->render() ?>
            <p class="title">
                Olá!
            </p>
            <p class="text-justify">
                Você escolheu presentear <?= ($crianca->sexo == 'Masculino') ? 'o' : 'a'; ?> <?= $crianca->nome . ' ' . $crianca->sobrenome ?> de  <?= $crianca->idade . ' anos.'  ?>
            </p>
            <p class="alert alert-info">
                Tamanho da camiseta/blusa: <strong><?= $crianca->tamanho_roupa ?></strong><br/>
                Tamanho da calça/short: <strong><?= $crianca->tamanho_calca ?></strong><br/>
                Tamanho do calçado: <strong><?= $crianca->tamanho_calcado ?></strong><br/>
                <button class="btn btn-primary btn-sm" onClick="window.print()">Salvar informações</button>
            </p>
            <div>
                <p class="text-justify">
                    Por favor preencha seus dados para que possamos entrar em contato e combinar com você a melhor forma de fazer isso acontecer.
                </p>
                <?= $this->Form->create($crianca) ?>
                    <?php
                        echo $this->Form->control('nome_padrinho',['label'=>'Nome completo', 'class' => 'form-control mb-3', 'required' => 'required']);
                        echo $this->Form->control('tel_padrinho',['label'=>'Telefone', 'class' => 'form-control mb-3', 'required' => 'required']);
                        echo $this->Form->control('email_padrinho',['label'=>'E-mail', 'class' => 'form-control mb-3', 'required' => 'required']);
                    ?>
                    <div class="g-recaptcha mb-3" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>    
                    <?= $this->Form->button(__('Enviar informações'), ['class' => 'btn btn-block btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>          
        </div>
    </div>
</div>
 
<div class="mt-5 d-none d-print-block">    
    <div class="alert alert-secondary lead">
        <h1>Natal de Luz</h1>
        <h3>Lar Santa Filomena</h3>
        <br/>
        Informações sobre a criança escolhida:<br/>
        Nome: <strong><?= $crianca->nome . ' ' . $crianca->sobrenome ?></strong><br/>
        Idade: <strong><?= $crianca->idade ?> anos</strong><br/>
        Sexo: <strong><?= $crianca->sexo ?></strong><br/>
        Tamanho da camiseta/blusa: <strong><?= $crianca->tamanho_roupa ?></strong><br/>
        Tamanho da calça/short: <strong><?= $crianca->tamanho_calca ?></strong><br/>
        Tamanho do calçado: <strong><?= $crianca->tamanho_calcado ?></strong><br/>
        <br/><br/>
        Maiores informações:<br/>
        Telefone: (18) 3223-4786<br/>
        Site: larsantafilomena.org.br<br/>
        Facebook: facebook.com/scblarsantafilomena
    </div>                
</div> 