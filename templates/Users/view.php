<!-- Breadcrumbs -->
<?php
    $this->Breadcrumbs->add([
        ['title' => 'Administradores', 'url' => ['controller' => 'users', 'action' => 'index']],
        ['title' => 'Visualizar']
    ]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8 offset-md-2">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Visualizar administrador
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Detalhes</h4>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-sm">
                                    <tr>
                                        <th><?= __('Nome') ?></th>
                                        <td><?= h($user->nome) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Sobrenome') ?></th>
                                        <td><?= h($user->sobrenome) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Username') ?></th>
                                        <td><?= h($user->username) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
