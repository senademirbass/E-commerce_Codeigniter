<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
        <div class="content-wrapper"><br>
        <div class="row" style="padding:5%">
        <div class="row mb-8">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="<?php echo base_url($urun->u_kapakresmi);?>" alt="Ürün Görseli">
                    <div class="card-body">
                    <h4 class="card-title"><?php echo $urun->u_adi;?></h4>
                    <ul>
                        <li>
                            <p class="card-text">
                            <?php echo $urun->u_turu;?>
                            </p>
                        </li>
                        <li>
                            <p><?php echo $urun->u_bilgi;?></p>
                        </li>
                        <li>
                            <p><?php echo $urun->u_fiyat;?> TL</p>
                        </li>
                        <li>
                            <p><?php echo $urun->u_stok;?> Adet</p>
                        </li>
                    </ul>
                    </div>
                  </div>
                </div>

<?php $this->load->view('back/include/footer'); ?>