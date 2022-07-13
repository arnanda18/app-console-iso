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
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Position </th>
                          <th> Divisi </th>
                          <th> Status </th>
                          <th> Phone </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                         foreach ($emp as $e): ?>
                        <tr>
                          <td> <?php  echo $no++;?></td>
                          <td class="py-1"> <?php echo $e->name_emp ?> </td>
                          <td> <?php echo $e->email_emp ?> </td>
                          <td> <?php echo $e->position ?> </td>
                          <td> <?php echo $e->divisi ?> </td>
                          <td>
                            <?php echo $e->status ?>
                          </td>
                          <td> <?php echo $e->phone ?> </td>
                        </tr>

                      <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
