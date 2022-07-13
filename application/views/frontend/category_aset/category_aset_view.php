<!-- Content Header (Page header) -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Category Aset </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Category Aset</li>
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
                    <h4 class="card-title">Data Cetegory</h4>
                    <div class="card-tools">
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Nama Category </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($category as $cat): ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $cat->id_category ?>
                          </td>
                          <td> <?php echo $cat->name_category ?> </td>
                          
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
