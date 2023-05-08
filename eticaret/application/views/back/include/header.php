
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
<?php $inf=$this->session->userdata('inf');?>
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <br>
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0)" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?php echo base_url('assets/front/assets/img/icon-pp.jpg');?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?php echo base_url('assets/front/assets/img/icon-pp.jpg');?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $inf->y_adsoyad;?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('anasayfa/yprofil');?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profilim</span>
                      </a>
                    </li>
                    <li>
                    <i class="bx bx-user me-2"></i>
                    <a href="<?php echo base_url('yonetimpaneli/silmefonksiyonu');?>"><?php if($this->session->userdata('fonk')){;?><button class="btn btn-success">Silme Özelliği Aktif</button><?php }else{ ?><button class="btn btn-danger">Silme Özelliği Pasif</button><?php }?></a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('yonetimpaneli/cikisyap');?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Çıkış</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->