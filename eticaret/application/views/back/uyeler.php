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
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="d-block mb-1">Aktif Üyeler</span><br>
                          <h3 class="card-title text-nowrap mb-2">5</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Pasif Üyeler</span><br>
                          <h3 class="card-title mb-2">1</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <h5 class="card-header">Tüm Üyeler</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Üye Adı</th>
                        <th>Üye Soyadı</th>
                        <th>Üye Kullanıcı Adı</th>
                        <th>Üye Durumu</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach($bilgi as $bilgi){?>
                      <tr>
                        <td><?php echo $bilgi->uyeadi ?></td>
                        <td><?php echo $bilgi->uyesoyadi ?></td>
                        <td><?php echo $bilgi->uyeusername ?></td>
                        <td><?php echo $bilgi->uyeaktif ?></td>
                        <td>
                        <a href="<?php echo base_url('yonetimpaneli/uye/'.$bilgi->uyeid.'');?>"><button type="button" class="btn btn-primary"><i class="fa fa-eye">Görüntüle</i></button></a>
                        <a href="<?php echo base_url('yonetimpaneli/uyeguncelle/'.$bilgi->uyeid.'');?>"><button type="button" class="btn btn-warning"><i class="fa-thin fa-pencil">Güncelle</i></button></a>
                        <a href="<?php echo base_url('yonetimpaneli/uyesil/'.$bilgi->uyeid.'/uyeid/uyeler');?>"><button type="button" class="btn btn-danger"><i class="fa fa-remove">Sil</i></button></a>
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