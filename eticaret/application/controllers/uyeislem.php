<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uyeislem extends CI_Controller {

    public function index(){
        echo "uye islemleri";
    }

    public function kayitol(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email','E-mail','is_unique[uyeler.uyemail]');
        $this->form_validation->set_rules('sifre','Şifre','matches[sifre2]|min_length[6]|trim');
        $this->form_validation->set_rules('sifre2','Şifre Tekrar','min_length[6]|trim');
        $this->form_validation->set_message('matches','<div class="alert alert-danger"><strong>Başarısız<i class="fa fa-remove"></i></strong>Şifreler Eşleşmiyor!</div>');
        $this->form_validation->set_message('min_length','<div class="alert alert-danger"><strong>Başarısız<i class="fa fa-remove"></i></strong> %s Çok kısa! </div>');
        $this->form_validation->set_message('is_unique','<div class="alert alert-danger"><strong>Başarısız<i class="fa fa-remove"></i></strong>Bu e-mail adresi kullanılmaktadır!</div>');

         if($this->form_validation->run()){
            $ad=$this->input->post('ad'); 
            $soyad=$this->input->post('soyad'); 
            $email=$this->input->post('email');
            $sifre=$this->input->post('sifre'); 
            $tarih=date('d-m-Y');

            $data=array('uyeadi'=>$ad,
            'uyesoyadi'=>$soyad,
            'uyemail'=>$email,
            'uyesifre'=>md5($sifre),
            'uyeresim'=>'assets/front/img/icon-pp.jpg',
            'uyeaktif'=>1,
            'kayittarihi'=>$tarih);
            $this->load->model('vt');
            $ekle=$this->vt->ekle($data,'uyeler');
            if($ekle){
                $this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-chechk"></i></strong>Başarıyla üye oldunuz.Giriş yapabilirsiniz.</div>');
                redirect('anasayfa');
            }
         }else{
            $this->load->view('front/anasayfa');
         }
    }

    public function girisyap()
    {
        $this->load->model('vt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','E-mail','required');

        if($this->form_validation->run())
        {
            $email=$this->input->post('email');
            $pass=$this->input->post('password'); 
            $sonuc=$this->vt->uyevarmi($email,$pass);
            if($sonuc)
            {
               $this->session->set_userdata('durum',true);
               $this->session->set_userdata('user',$sonuc);
               $grit="<script>$(document).ready(function() {'use strict';
                $(function(){
                    $.gritter.add({
                    title:'Hoşgeldin $sonuc->uyeadi.',
                    text: 'Alışveriş için doğru yerdesiniz!',
                    class_name:'with-icon check-circle success',
                    sticky: false,
                    time:''
                    });
                    return false;
                });
            });
            </script>";
            $this->session->set_flashdata('grit',$grit);
            echo "a";
            }else
            {
                echo '<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>E-mail veya şifre yanlış!</div>';
            }
        }else
        {
            echo validation_errors();
        }    
    }

    public function cikisyap()
    {
        $this->session->sess_destroy();
        redirect('anasayfa');
    }

    public function add()
		{
			if($_POST)
			{
				$urunid = $this->input->post('urun_id');
				$urunadet = $this->input->post('urun_adet');

				if($urunadet > 0){
					$this->load->model('common_model');
                    $varmi=$this->common_model->get(['u_id' => $urunid],
					'urunler');
					if($varmi)
					{						
					$veri = array( 
					"id" => $varmi->$u_id,
					"name" => $varmi->$u_adi,
					"qty" => $urunadet,
					"price" => $varmi->$u_fiyat,
                    'img' => $varmi->u_kapakresmi
					);

					$this->cart->insert($veri);
					}
					else{
						'yok';
					}
				}else{
					echo 'adet belirtin';
				}
		}
	}

    
}