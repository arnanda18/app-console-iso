<!-- Content Header (Page header) -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Aset </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Aset</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Aset</li>
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
                    <h4 class="card-title">Data Aset</h4>
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <a class="btn btn-primary" href="<?= base_url('admin/aset/add') ?>" role="button"><i class="mdi mdi-account-plus"></i> Add Aset</a>
                      </div>
                    </div>
                    <table class="table table-striped">
                      <thead>

                        <tr>
                          <th> Nama Aset </th>
                          <th> No Aset </th>
                          <th> Category </th>
                          <th> Pemilik </th>
                          <th> Status </th>
                          <th> Location </th>
                          <th> Keterangan </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($aset as $a):  ?>
                        <tr>
                          <td class="py-1">  <?php echo $a->name_aset  ?> </td>
                          <td> <?php echo $a->no_aset  ?>  </td>
                          <td> <?php echo $a->name_category  ?>  </td>
                          <td> <?php echo $a->name_emp  ?>  </td>
                          <td>
                            <?php echo $a->status_aset  ?> 
                          </td>
                          <td> <?php echo $a->location  ?>  </td>
                          <td> <?php echo $a->keterangan  ?>  </td>
                          <td> 
                            <a style="margin-right:10px" href="<?= base_url('admin/aset/update')?>/<?=  $a->id_aset  ?> " ><i class="mdi mdi-account-edit"></i></a>
                            <a  href="<?= base_url('admin/aset/delete')?>/<?= $a->id_aset  ?> " ><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>
                      <?php endforeach;  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
