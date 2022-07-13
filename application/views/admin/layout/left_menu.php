            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Management</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/user') ?>">Data User</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/employee') ?>">Data Employee</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/role_permision') ?>">
                <span class="menu-title">Role & Permission </span>
                <i class="mdi mdi-account-multiple-plus menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/category_aset') ?>">
                <span class="menu-title">Category Aset</span>
                <i class="mdi mdi-book-variant menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Data Aset</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-treasure-chest menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/aset') ?>"> Aset </a></li>
                </ul>
              </div>
            </li>
            
            