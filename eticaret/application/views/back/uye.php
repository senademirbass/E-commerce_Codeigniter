<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
        <div class="content-wrapper"><br>
        <div class="row" style="padding:5%">
        <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="<?php echo base_url('assets/front/img/icon-pp.jpg');?>" alt="Üye Görseli">
                    <div class="card-body">
                    <h4 class="card-title"><?php echo $uye->uyeadi ;?></h4>
                    <ul>
                        <li>
                            <p class="card-text">Adı:
                            <?php echo $uye->uyeadi;?>
                            </p>
                        </li>
                        <li>
                            <p class="card-text">Soyadı:
                            <?php echo $uye->uyesoyadi;?>
                            </p>
                        </li>
                        <li>
                            <p>Aktiflik Durumu:<?php echo $uye->uyeaktif;?></p>
                        </li>
                    </ul>
                    </div>
                  </div>
                </div>

<?php $this->load->view('back/include/footer'); ?>