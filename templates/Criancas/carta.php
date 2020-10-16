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
        <?= $this->Form->create($crianca, ['type' => 'file']) ?>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-secondary">
                    <div class="card-header cursor-pointer" data-toggle="collapse" href="#body1">
                        <h3 class="card-title">Atualizar cartinha</h3>
                    </div>
                    <div class="card-body collapse show" id="body1">
                        <div class="form-group">
                            <?php
                                echo $this->Form->control('carta', ['type' => 'file', 'label' => 'Cartinha<small> (Imagem no formato png ou jpeg)</small>', 'class' => 'form-control mb-2', 'escape' => false]);
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->button(__('Salvar Cartinha'),['class'=>'btn btn-block btn-primary col-md-6 offset-md-3']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>
