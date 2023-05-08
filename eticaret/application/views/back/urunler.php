<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <br><hr>
            <?php echo $this->session->flashdata('sonuc');?>
            <hr>
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Ürünler</span>
                          <h3 class="card-title mb-2">20</h3>
                          <a href="<?php echo base_url('yonetimpaneli/urunekle');?>"><i class="fa-sharp fa-light fa-diamond-turn-right">Yeni ürün ekle</i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span  class="fw-semibold d-block mb-1">Satışlar</span>
                          <br>
                          <h3 class="card-title text-nowrap mb-1">1203</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <h5 class="card-header">Tüm Ürünler</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Ürün Adı</th>
                        <th>Ürün Türü</th>
                        <th>Ürün Fiyatı</th>
                        <th>Ürün Stoku</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach($bilgi as $bilgi){?>
                      <tr>
                        <td><?php echo $bilgi->u_adi ?></td>
                        <td><?php echo $bilgi->u_turu ?></td>
                        <td><?php echo $bilgi->u_fiyat ?></td>
                        <td><?php echo $bilgi->u_stok ?></td>
                        <td>
                        <a href="<?php echo base_url('yonetimpaneli/urun/'.$bilgi->u_id.'');?>"><button type="button" class="btn btn-primary"><i class="fa fa-eye">Görüntüle</i></button></a>
                        <a href="<?php echo base_url('yonetimpaneli/urunguncelle/'.$bilgi->u_id.'');?>"><button type="button" class="btn btn-warning"><i class="fa-thin fa-pencil">Güncelle</i></button></a>
                        <a href="<?php echo base_url('yonetimpaneli/sil/'.$bilgi->u_id.'/u_id/urunler');?>"><button type="button" class="btn btn-danger"><i class="fa fa-remove">Sil</i></button></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div><br>
            </div>
            <!-- / Content -->
            

<?php $this->load->view('back/include/footer'); ?>