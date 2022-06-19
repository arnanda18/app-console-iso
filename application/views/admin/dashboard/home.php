<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-md-9 col-lg-7 col-xl-5">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-2">
                <div class="d-flex text-black">
                  <div class="flex-shrink-0">
                    <img src="<?= base_url('asset/template/admin')?>/dist/img/profile2.png"
                      alt="Generic placeholder image" class="img-fluid"
                      style="width: 180px; border-radius: 10px;">
                  </div>
                  <div class="flex-grow-1 ms-3 m-3">
                    <h4 class="mb-1"><?php echo $user->full_name ?></h4>
                    <h6 class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $user->email ?></h6>
                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                      style="background-color: #efefef;">
                      <p>
                        username : <?php echo $user->username ?> <br>
                        role :  <?php echo $user->role ?>
                      </p>
                    </div>
                    <div class="d-flex pt-1">
                      <button type="button" class="btn btn-outline-primary me-1 mr-2 flex-grow-1">Media Soscial</button>
                      <button type="button" class="btn btn-primary flex-grow-1 mr-2">Follow</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->
    </section>

