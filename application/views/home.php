<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("frontend/layout/header")  ?>
</head>
<body>
    <div class="container-scroller">
        
        <?php $this->load->view('frontend/layout/top_menu') ?>


        <div class="container-lg page-body-wrapper">

            <?php $this->load->view("frontend/layout/main_sidebar") ?>            


            <?php $this->load->view($content) ?>            


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
