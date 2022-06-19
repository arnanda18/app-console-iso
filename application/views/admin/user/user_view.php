<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data user</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!--Alert Section-->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success">
          <?php echo $this->session->flashdata('success');?>
      </div> 
    <?php endif;?>   
      <?php if ($this->session->flashdata('delete')): ?>
      <div class="alert alert-danger">
          <?php echo $this->session->flashdata('delete');?>
      </div> 
      <?php endif;?>



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar User</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <a class="btn btn-primary" href="<?= base_url('admin/user/add') ?>" role="button"><i class="fas fa-user-plus"></i> Add User</a>

                    <!--<div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                        foreach ($user as $datauser): ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $datauser->username;?></td>
                      <td>**********</td>
                      <td><?php echo $datauser->email;?></td>
                      <td><?php echo $datauser->role;?></td>
                      <td>
                        <a style="margin-right:10px" href="<?= base_url('admin/user/update')?>/<?php echo $datauser->id_user;?>" ><i class="fas fa-user-edit"></i></a>
                        <a  href="<?= base_url('admin/user/delete')?>/<?php echo $datauser->id_user;?>" ><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>