      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Employee </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Employee</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Employee</li>
                </ol>
              </nav>
            </div>

              <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url('admin/employee');?>" style="color: #155724">Lihat data User</a></u>
          </div>               
        <?php endif;?>

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Update Employee</h4>
                    <form class="forms-sample" method="POST" action="<?php echo base_url('admin/employee/updateData');?>">
                      <input type="hidden" name="id_emp" value="<?php echo $dataemp->id_emp;?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name_emp" value="<?php echo $dataemp->name_emp;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email_emp" value="<?php echo $dataemp->email_emp;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Position</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Position" name="position" value="<?php echo $dataemp->position;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Divisi</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Divisi" name="divisi" value="<?php echo $dataemp->divisi;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                          <option value="fulltime" <?= $dataemp->status == 'fulltime' ? 'selected' : '' ?>>Karyawan Tetap</option>
                          <option value="internship" <?= $dataemp->status == 'internship' ? 'selected' : '' ?>>Internship</option>
                          <option value="external" <?= $dataemp->status == 'external' ? 'selected' : '' ?>>External</option>
                          <option value="part time" <?= $dataemp->status == 'part time' ? 'selected' : '' ?>>Part Time</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Phone</label>
                        <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Phone" name="phone" value="<?php echo $dataemp->phone;?>">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>