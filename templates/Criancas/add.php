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
        ['title' => 'Adicionar']
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
        <?= $this->Form->create($crianca, ['type' => 'file']) ?>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-secondary">
                    <div class="card-header cursor-pointer" data-toggle="collapse" href="#body1">
                        <h3 class="card-title">Nova criança</h3>
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
                                echo $this->Form->control('carta', ['type' => 'file', 'label' => 'Cartinha<small> (Imagem no formato png ou jpeg)</small>', 'class' => 'form-control mb-2', 'escape' => false]);
                                echo $this->Form->control('observacoes', ['label' => 'Observações', 'class' => 'form-control mb-2']);
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->button(__('Adicionar Criança'),['class'=>'btn btn-block btn-primary col-md-6 offset-md-3']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>
