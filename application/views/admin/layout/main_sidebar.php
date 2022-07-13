      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?= base_url('asset/template/admin')?>/assets/images/faces/profile2.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= $this->session->userdata('username'); ?></span>
                  <span class="text-secondary text-small"><?= $this->session->userdata('name_role'); ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>

            <?php $this->load->view("admin/layout/left_menu.php") ?>  
          </ul>
        </nav>