<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("frontend/layout/header")  ?>
</head>
<body>
    <div class="container-scroller">
        
       <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" style="width: 50px; margin-right: 70px;" href="#"><img src="<?= base_url('asset/template/admin')?>/assets/images/logoapp2.png" alt="logo" /> Zafra</a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="<?= base_url('asset/template/admin')?>/assets/images/logoapp2.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          
          
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>

            <li class="nav-item nav-profile dropdown">
              <a style="height: 40px; width: auto; align-content: center;" class="nav-link btn btn-gradient-primary btn-fw justify-content-center" href="<?= base_url('admin/login')?>">
                <span style="color:white;">Login</span>
              </a>
              
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>


        <div class="container-lg page-body-wrapper">

            <?php $this->load->view("frontend/layout/main_sidebar") ?>            

    		<div class="main-panel">
          		<div class="content-wrapper">
          			<h4 style="color: green;" class="breadcrumb-item mt-4">Please Login to Your Account or Contact Administrator!</h4>
          		</div>


            <?php $this->load->view("frontend/layout/footer") ?>            
        </div>


    </div>
		


	<script src="<?= base_url('asset/template/admin')?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('asset/template/admin')?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('asset/template/admin')?>/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('asset/template/admin')?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url('asset/template/admin')?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('asset/template/admin')?>/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url('asset/template/admin')?>/assets/js/dashboard.js"></script>
    <script src="<?= base_url('asset/template/admin')?>/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
