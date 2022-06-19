<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("admin/layout/header")  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		
			<?php $this->load->view('admin/layout/top_menu') ?>
		
	</div>

	
		<?php $this->load->view("admin/layout/main_sidebar") ?>
	

	<div class="content-wrapper">
		<?php $this->load->view($content) ?>
	</div>

	<footer class="main-footer">
		<?php $this->load->view("admin/layout/footer") ?>
	</footer>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('asset/template/admin')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/template/admin')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/template/admin')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/template/admin')?>/dist/js/demo.js"></script>
</body>
</html>
