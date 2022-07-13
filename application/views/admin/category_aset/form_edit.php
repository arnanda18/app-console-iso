      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Category Aset </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                </ol>
              </nav>
            </div>

              <?php if ($this->session->flashdata('success')): ?>
			    <div class="alert alert-success">
			      <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url('admin/category_aset');?>" style="color: #155724">Lihat data Category Aset</a></u>
			    </div>               
			  <?php endif;?>

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Update Category</h4>
                    <form class="forms-sample" method="POST" action="<?php echo base_url('admin/category_aset/updateData');?>">
                      <input type="hidden" name="id_category" value="<?php echo $datacategory->id_category;?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Nama Category</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Aset" name="name_category" value="<?php echo $datacategory->name_category; ?>">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>