<!-- Content Header (Page header) -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Employee </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Employee</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Employee</li>
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
                    <h4 class="card-title">Data Employee</h4>
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <a class="btn btn-primary" href="<?= base_url('admin/employee/add') ?>" role="button"><i class="mdi mdi-account-plus"></i> Add Data</a>
                      </div>
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Position </th>
                          <th> Divisi </th>
                          <th> Status </th>
                          <th> Phone </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($emp as $e): ?>
                        <tr>
                          <td class="py-1"> <?php echo $e->name_emp ?> </td>
                          <td> <?php echo $e->email_emp ?> </td>
                          <td> <?php echo $e->position ?> </td>
                          <td> <?php echo $e->divisi ?> </td>
                          <td>
                            <?php echo $e->status ?>
                          </td>
                          <td> <?php echo $e->phone ?> </td>
                          <td> 
                            <a style="margin-right:10px" href="<?= base_url('admin/employee/update')?>/<?php echo $e->id_emp ?>" ><i class="mdi mdi-account-edit"></i></a>
                            <a  href="<?= base_url('admin/employee/delete')?>/<?php echo $e->id_emp ?>" ><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>

                      <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
