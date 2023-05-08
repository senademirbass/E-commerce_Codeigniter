<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
<br><br>
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"><?php echo $sonuc->uyeadi;?> üyesinin durumunu güncelle</h5>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url('yonetimpaneli/uyeguncelleok');?>" method="post">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Üye Durumu
                          </label>
                          <div class="col-sm-10">
                          <div class="input-group">
                          <input type="hidden" class="form-control" id="basic-default-name" data-placeholder="Üye id giriniz." name="uyeid" value="<?php echo $sonuc->uyeid;?>">
                            <select class="form-select" id="inputGroupSelect01" name="uyedurumu" placeholder="<?php echo $sonuc->uyeaktif ;?>">
                            <option selected="">Seçiniz.</option>
                              <option>0</option>
                              <option>1</option>
                            </select>
                          </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Üye Bilgisini Güncelle</button>
                            <p>0:Pasif</p>
                            <p>1:Aktif</p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

<?php $this->load->view('back/include/footer'); ?>