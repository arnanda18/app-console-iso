      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update User </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update User</li>
                </ol>
              </nav>
            </div>

              <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url('admin/user');?>" style="color: #155724">Lihat data User</a></u>
          </div>               
        <?php endif;?>

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Update User</h4>
                    <form class="forms-sample" method="POST" action="<?= base_url('admin/user/updateData'); ?>">

                      <input type="hidden" name="id_user" value="<?php echo $datauser->id_user;?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $datauser->username;?>" name="username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $datauser->full_name;?>" name="full_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" value="<?php echo $datauser->email;?>" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" value="<?php echo $datauser->password;?>" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-control" id="exampleSelectGender" name="role">
                          <?php
                              foreach ($role as $r): ?>
                                  <option value=" <?php echo $r->id_role; ?>" <?php if($datauser->id_role == $r->id_role) echo " selected";  ?>> <?php echo $r->name_role; ?> </option>
         
                          <?php  endforeach; ?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>