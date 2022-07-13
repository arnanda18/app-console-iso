<!-- Content Header (Page header) -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Management User </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
              </nav>
            </div>



    <!--Alert Section-->
      
      <?php if ($this->session->flashdata('delete')): ?>
      <div class="alert alert-danger">
          <?php echo $this->session->flashdata('delete');?>
      </div> 
      <?php endif;?>



             <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <a class="btn btn-primary" href="<?= base_url('admin/user/add') ?>" role="button"><i class="mdi mdi-account-plus"></i> Add User</a>
                      </div>
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Username </th>
                          <th> Full name </th>
                          <th> Email </th>
                          <th> Role </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;
                        foreach ($user as $data): ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $data->username; ?> 
                          </td>
                          <td> <?php echo $data->full_name; ?>  </td>
                          <td>
                            <?php echo $data->email; ?> 
                          </td>
                          <td> <?php echo $data->name_role; ?>  </td>
                          <td>

                            <a style="margin-right:10px" href="<?= base_url('admin/user/update')?>/<?php echo $data->id_user;?>" ><i class="mdi mdi-account-edit"></i></a>
                            <a  href="<?= base_url('admin/user/delete')?>/<?php echo $data->id_user;?>" ><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>
                      <?php endforeach; ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
