  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Ana Menü</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="">Anasayfa</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">Harita</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Bize Ulaşın</h3>
                    <address>
                      <p>Kabaoğlu Mah./İzmit</p>
                      <p><span class="fa fa-phone"></span>+1 000-041-4141</p>
                      <p><span class="fa fa-envelope"></span>sena.kouai@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="https://www.linkedin.com/in/senaademirbas/">Sena Demirbaş</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script>
    $(document).ready(function()
      {
        $('form.aa-login-form').on('submit',function(form)
        {
          form.preventDefault();
          $.post('uyeislem/girisyap',$('form.aa-login-form').serialize(),function(data)
          {
            if(data=='a')
            {
              window.location.href="<?php echo base_url(); ?>";
            }else{
              $('div.info').html(data);
            }
            
          });
        });
      });
  </script>
  
  <script>
  function anlikarama() {
    var harf = $('#harf').val();
    var postdata = {'harf': harf};

    if(harf.length===0){
      $('#urunler').hide();
    }
    else{
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>anasayfa/urunara",
      data: postdata,
      success: function(data) {
        if(data.length > 0) {
          $('#urunler').show();
          $('#urunler').html(data);
        }
      },
      error: function(xhr, status, error) {
        console.log("Error: " + error);
      }
    });
  }
  }
</script>
<script>
  $(document).ready(function(){
    $('.sepeteekle').click(function(){
       var urun_id = $(this).data('u_id');
       var urun_adi = $(this).data('u_adi');
       var urun_fiyat = $(this).data('u_fiyat');
       var urun_adet = $("#" + urun_id).val();

       if(urun_adet != '' && urun_adet > 0){

        $.ajax({
          method : 'POST',
          url : "<?php echo base_url('uyeislem/add'); ?>",
          data : {
            urun_id:urun_id,
            urun_adi:urun_adi,
            urun_fiyat:urun_fiyat,
            urun_adet:urun_adet
          },
          success : function(data){

            if($.trim(data) == "yok"){
              alert("Böyle bir ürün bulunmuyor.");
            }else if($.trim(data) == "adetbelirtin"){
              alert("Lütfen adet giriniz.");
            }
            else{
              alert("Ürün sepete eklendi.");
              window.location.href='<?php echo base_url('anasayfa');?>';
            }
          }
        })
       }else{
        alert('Lütfen adet belirtin.');
       }

    });
  });
</script>


  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('assets/front/js/bootstrap.js');?>"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery.smartmenus.js');?>"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery.smartmenus.bootstrap.js');?>"></script>  
  <!-- To Slider JS -->
  <script src="<?php echo base_url('assets/front/js/sequence.js');?>"></script>
  <script src="<?php echo base_url('assets/front/js/sequence-theme.modern-slide-in.js');?>"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery.simpleGallery.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/jquery.simpleLens.js');?>"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/slick.js');?>"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="<?php echo base_url('assets/front/js/nouislider.js');?>"></script>
  <!-- Custom js -->
  <script src="<?php echo base_url('assets/front/js/custom.js');?>"></script> 
  <!--Gritter js-->
  <script src="<?php echo base_url('assets/front/gritter/js/jquery.gritter.js');?>"></script>
  <script src="<?php echo base_url('assets/front/gritter/js/jquery.gritter.min.js');?>"></script>

  <?php echo $this->session->flashdata('grit'); ?>

  </body>
</html>