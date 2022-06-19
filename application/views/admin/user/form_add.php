<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php if ($this->session->flashdata('success')): ?>
			    <div class="alert alert-success">
			      <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url('admin/user');?>" style="color: #155724">Lihat data User</a></u>
			    </div>               
			  <?php endif;?>

              <form id="quickForm" action="<?= base_url('admin/user/add') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="username" name="username" class="form-control" id="username" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="email">Full Name</label>
                    <input type="name" name="full_name" class="form-control" id="full_name" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="email">Role</label>
                    <select class="form-control select2" id="inputGroupSelect02" name="role">
						<option selected="selected">Choose 1</option>
						<option value="admin">Admin</option>
						<option value="staff">Staff</option>
                    </select> 
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>