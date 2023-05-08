<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
        <div class="content-wrapper">
        <div class="row mb-5" style="padding:15%">
        <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <h5 class="card-title">Tüm Üyeleri Gör</h5>
                    <a href="<?php echo base_url('yonetimpaneli/uyeler')?>" class="btn btn-primary">Gör</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <h5 class="card-title">Tüm Ürünleri Gör</h5>
                    <a href="<?php echo base_url('yonetimpaneli/urunler')?>" class="btn btn-primary">Gör</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
<?php $this->load->view('back/include/footer'); ?>

