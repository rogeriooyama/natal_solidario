<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link mb-3 text-center">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="img-fluid"> -->
      <?= $this->Html->image('logo-lar-sta-filomena-admin.png', ['class' => 'img-fluid', 'alt' => 'AdminLTE Logo']) ?>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2 mb-5 pb-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'index']) ?>" class="nav-link" target="_blank">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Ir para site
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'manual']) ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manual
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']) ?>" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Administradores
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= $this->Url->build(['controller' => 'criancas', 'action' => 'index']) ?>" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Crianças
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sair
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>