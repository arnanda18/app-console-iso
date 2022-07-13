            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/dashboard') ?>">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/employee') ?>">
                <span class="menu-title">Data Employee</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/category') ?>">
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
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('home/asets') ?>"> Aset </a></li>
                </ul>
              </div>
            </li>
            
            