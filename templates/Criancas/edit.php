<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager $manager
 */
?>
<!-- Breadcrumbs -->
<?php
    $this->Breadcrumbs->add([
        ['title' => 'Crianças', 'url' => ['controller' => 'criancas', 'action' => 'index']],
        ['title' => 'Editar']
    ]);
?>
<section class="content">
    <div class="container-fluid">
        <?php  
            $myTemplates = [
                'error' => '<div class="error invalid-feedback">{{content}}</div>',
            ];
            $this->Form->setTemplates($myTemplates);
            $this->Form->setConfig('errorClass', 'is-invalid');
        ?>
        <?= $this->Form->create($crianca) ?>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-secondary">
                    <div class="card-header cursor-pointer" data-toggle="collapse" href="#body1">
                        <h3 class="card-title">Editar criança</h3>
                    </div>
                    <div class="card-body collapse show" id="body1">
                        <div class="form-group">
                            <?php
                                echo $this->Form->control('nome', ['label' => 'Nome', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('sobrenome', ['label' => 'Sobrenome', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('sexo', [
                                    'label' => 'Sexo', 
                                    'type' => 'select',
                                    'options' => [''=>'', 'Masculino' => 'Masculino', 'Feminino' => 'Feminino'],
                                    'class' => 'form-control mb-2'
                                    ]);
                                echo $this->Form->control('idade', ['label' => 'Idade', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('tamanho_roupa', ['label' => 'Tamanho da roupa', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('tamanho_calcado', ['label' => 'Tamanho do calçado', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('observacoes', ['label' => 'Observações', 'class' => 'form-control mb-2']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-secondary">
                    <div class="card-header cursor-pointer" data-toggle="collapse" href="#body1">
                        <h3 class="card-title">Informações do padrinho</h3>
                    </div>
                    <div class="card-body collapse show" id="body1">
                        <div class="form-group">
                            <?php
                                echo $this->Form->control('nome_padrinho', ['label' => 'Nome do Padrinho', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('tel_padrinho', ['label' => 'Telefone do Padrinho', 'class' => 'form-control mb-2']);
                                echo $this->Form->control('email_padrinho', ['label' => 'Email do Padrinho', 'class' => 'form-control mb-2']);
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->button(__('Editar Criança'),['class'=>'btn btn-block btn-primary col-md-6 offset-md-3']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>
