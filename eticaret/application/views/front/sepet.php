<?php $this->load->view('front/include/header'); ?>
 
<section id="aa-catg-head-banner">
   <img src="<?php echo base_url('assets/front/img/fashion/fashion-header-bg-8.jpg');?>">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Sepetim</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('anasayfa');?>">Anasayfa</a></li>                   
          <li class="active">Sepetim</li>
        </ol>
      </div>
     </div>
   </div>
  </section>

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Ürün</th>
                        <th>Adet</th>
                        <th>Fiyat</th>
                        <th>Toplam</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href=""><fa class="fa fa-close"></fa></a></td>
                        <td><img src="" alt="img"></td>
                        <td><a class="aa-cart-title" href="#"><></a></td>
                        <td> TL</td>
                        <td>TL</td>
                      </tr>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <input class="aa-cart-view-btn" type="submit" value="Sepeti Güncelle"><br><br>
                          <a href="#" class="aa-cart-view-btn">Öde</a>
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <?php $this->load->view('front/include/footer'); ?>
