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
                    </div>
                    <table class="table table-striped">
                      <thead>

                        <tr>
                          <th> No</th>
                          <th> Nama Aset </th>
                          <th> No Aset </th>
                          <th> Category </th>
                          <th> Pemilik </th>
                          <th> Status </th>
                          <th> Location </th>
                          <th> Keterangan </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        $no = 1;
                        foreach($aset as $a):  ?>
                        <tr>
                          <td> 
                           <?php echo $no++ ?>
                          </td>
                          <td class="py-1">  <?php echo $a->name_aset  ?> </td>
                          <td> <?php echo $a->no_aset  ?>  </td>
                          <td> <?php echo $a->name_category  ?>  </td>
                          <td> <?php echo $a->name_emp  ?>  </td>
                          <td>
                            <?php echo $a->status_aset  ?> 
                          </td>
                          <td> <?php echo $a->location  ?>  </td>
                          <td> <?php echo $a->keterangan  ?>  </td>
                          
                        </tr>
                      <?php endforeach;  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
