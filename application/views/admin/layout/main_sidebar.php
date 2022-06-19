<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dashboard')?>" class="brand-link">
      <img src="<?= base_url('asset/template/admin')?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('asset/template/admin')?>/dist/img/profile2.png" height="160px" width="160px" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('username');?></a>
          <i class="fa fa-circle fa-xs" style="color: green; "> Online</i>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="nav-header">
          <h4>Main Navigation</h4>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library
                -->
               <li class="nav-item" style="font-size: 20px;">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
              <li class="nav-item" style="font-size: 20px;">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data User </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>