<!-- Content Header (Page header) -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Role & Permision </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> role </li>
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
                    <h4 class="card-title">Data Role & Permision</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Role </th>
                          <th> Permision </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;
                        foreach ($role as $data): ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $data->id_role ?>
                          </td>
                          <td> <?php echo $data->name_role ?> </td>
                          
                          <td> 
                            <?php echo $data->permision ?>
                          </td>
                        </tr>

                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
