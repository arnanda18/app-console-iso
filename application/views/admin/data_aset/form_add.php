      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Aset </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Aset</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Aset</li>
                </ol>
              </nav>
            </div>

              <?php if ($this->session->flashdata('success')): ?>
			    <div class="alert alert-success">
			      <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url('admin/aset');?>" style="color: #155724">Lihat data Aset</a></u>
			    </div>               
			  <?php endif;?>

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Add Aset</h4>
                    <form class="forms-sample" method="POST" action="<?php echo base_url('admin/aset/add');?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Name Aset</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name Aset" name="name_aset">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">No Aset</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="No Aset" name="no_aset">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Category Aset</label>
                        <select class="form-control" id="exampleSelectCategory" name="category">
                          <?php
                              foreach ($category as $cat): ?>
                                <option value=" <?php echo $cat->id_category; ?>"> <?php echo $cat->name_category; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Pemilik</label>
                        <select class="form-control" id="exampleSelectCategory" name="pemilik">
                          <?php
                              foreach ($emp as $e): ?>
                                <option value=" <?php echo $e->id_emp; ?>"> <?php echo $e->name_emp; ?> </option>
                          <?php endforeach; ?>
                        </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status_aset">
                          <option value="baik">Baik</option>
                          <option value="rusak">Rusak</option>
                          <option value="sedang perbaikan">Sedang Perbaikan</option>
                          <option value="dijual">Dijual</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Location</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Location" name="location">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Keterangan</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="keterangan"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>