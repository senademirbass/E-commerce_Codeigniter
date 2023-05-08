<?php $this->load->view('back/include/leftmenu'); ?>
<?php $this->load->view('back/include/header'); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
<br><br>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Yeni Ürün Ekle</h5>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url('yonetimpaneli/uruneklendi');?>" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ürün Adı</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" required="on" id="basic-default-name" placeholder="Ürün adını giriniz." name="urunadi">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Ürün Türü</label>
                          <div class="col-sm-10">
                          <div class="input-group">
                            <select class="form-select" id="inputGroupSelect01" name="urunturu">
                              <option selected="">Seçiniz.</option>
                              <option>Telefon</option>
                              <option>Bilgisayar</option>
                              <option>Kablo</option>
                            </select>
                          </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Ürün Kapak Resmi</label>
                          <div class="col-sm-10">
                          <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile01" name="kapakresmi">
                          </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Ürün Açıklaması</label>
                          <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" name=urunbilgi></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ürünün Fiyatı</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" required="on" id="basic-default-name" placeholder="Ürün fiyatını giriniz." name="urunfiyati">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ürünün Stok Adedi</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" required="on" id="basic-default-name" placeholder="Stok bilgisini giriniz." name="urunstoku">
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ürünü Ekle</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

<?php $this->load->view('back/include/footer'); ?>