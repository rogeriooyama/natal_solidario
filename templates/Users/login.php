<body class="hold-transition login-page">
<!-- login-box -->
<div class="login-box">
  <div class="login-logo">
    <?= $this->Html->image('logo-lar-sta-filomena.png') ?>
  </div>
  <!-- /.login-logo -->
  <div>
    <?= $this->Flash->render() ?>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Acesso</p>

      <?= $this->Form->create() ?>
        <div class="">
          <?php
              echo $this->Form->control('username', ['label' => 'Usuário']);
              echo $this->Form->control('password', ['label' => 'Senha']);
          ?>
          <div class="col-md-6 offset-md-3">
              <?= $this->Form->button(__('Acessar')) ?>
          </div>
        </div>
      <?= $this->Form->end() ?>
    <hr/>
    <?= $this->Html->link('&raquo; Ir para a Página Inicial', ['controller' => 'pages', 'action' => 'index'], ['escape' => false]) ?>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->