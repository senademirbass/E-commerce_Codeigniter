<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->view('front/anasayfa');

	}

	public function product_t()
	{	
		$this->load->model('urunler');
		$data['urunler'] = $this->urunler->urungetir_t(array('u_turu' => 'Telefon'));
		$this->load->view('front/product/telefon',$data);
	}

	public function product_b()
	{	
		$this->load->model('urunler');
		$data['urunler'] = $this->urunler->urungetir_b(array('u_turu' => 'bilgisayar'));
		$this->load->view('front/product/bilgisayar',$data);
	}

	public function product_k()
	{	
		$this->load->model('urunler');
		$data['urunler'] = $this->urunler->urungetir_k(array('u_turu' => 'kablo'));
		$this->load->view('front/product/kablo',$data);
	}

	public function profilim(){
		$this->load->view('front/profil');
	}

	public function sepetim(){
		$this->load->view('front/sepet');
	}

	function profilupdate()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Kullanıcı Adı', 'is_unique[uyeler.uyeusername]');
    	$this->form_validation->set_message('is_unique','<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong> %s zaten mevcut.</div>');
	
		if($this->form_validation->run())
		{
            $username = $this->input->post('username');
			$email=$this->input->post('uyemail');
			$ad=$this->input->post('uyead');
			$soyad=$this->input->post('uyesoyad');
			$adres=$this->input->post('adres');

			$config=array(
				'upload_path'=>'assets/front/upload',
				'allowed_types'=>'jpeg|jpg|png',
				'max_size'=>1024,
				'min_height'=>250,
				'min_width'=>250
			);

			$this->load->library('upload',$config);
			if($this->upload->do_upload('pp'))
			{
				$resim=$this->upload->data();
				$resimyolu=$resim['file_name'];
				$veritabanikayit='assets/front/upload/'.$resimyolu.'';

				
			$bilgi=array
			(
				'uyeadi'=>$ad,
				'uyesoyadi'=>$soyad,
				'uyeusername'=>$username,
				'uyeadresi'=>$adres,
				'uyemail'=>$email,	
				'uyeresim'=>$veritabanikayit
			);

			$kisi=$this->session->userdata('user');

			$this->load->model('vt_2');
			$sonuc=$this->vt->profilupdate($bilgi,$kisi->uyeid);
			if($sonuc)
			{
				$this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Üye bilgileriniz güncellendi!</div>');
			}else
			{
				echo "update hatası";
			}
		}else
		{
			$bilgi=array
			(
				'uyeadi'=>$ad,
				'uyesoyadi'=>$soyad,
				'uyeusername'=>$username,
				'uyeadresi'=>$adres,
				'uyemail'=>$email
			);

			$kisi=$this->session->userdata('user');

			$this->load->model('vt_2');
			$sonuc=$this->vt_2->profilupdate($bilgi,$kisi->uyeid);
			if($sonuc)
			{
				$this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Üye bilgileriniz güncellendi!</div>');
				redirect('anasayfa');
			}
		}
	}else
	{
		$this->load->view('front/profil');
	}
	}

	function sifreupdate()
	{
		$old=$this->input->post('old');
		$new=$this->input->post('new');
		$newp=$this->input->post('newp');
		$this->load->model('vt');
		
		$kisi=$this->session->userdata('user');
		if($kisi->uyetipi=="sitekayit")
		{
			
			$kontrol=$this->vt->varmi('uyesifre',md5($old),$kisi->uyeid);
			if($kontrol)
			{
				if($new==$newp)
				{
					$data=array('uyesifre'=>md5($new));

					$this->load->model('vt_2');
					$sonuc=$this->vt_2->profilupdate($data,$kisi->uyeid);
					if($sonuc)
					{
						$this->session->set_flashdata('alert','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Şifreniz güncellendi!</div>');
						redirect('anasayfa');
					}
				else{
					$this->session->set_flashdata('alert','<div class="alert alert-danger"><strong>Hata! <i class="fa fa-remove"></i></strong>Mevcut şifreniz doğru değil!</div>');
					redirect('anasayfa');
					echo "2";
					}
				}
				else{
					$this->session->set_flashdata('alert','<div class="alert alert-danger"><strong>Hata! <i class="fa fa-remove"></i></strong>Yeni şifreler uyuşmuyor! Tekrar deneyin!</div>');
					redirect('anasayfa');
					echo "3";
				}
			}
			
		}
		else{
					if($new==$newp)
					{
						$data=array('uyesifre'=>md5($new));
						$this->load->model('vt_2');
					    $sonuc=$this->vt_2->profilupdate($data,$kisi->uyeid);
					if($sonuc)
					{
						$this->session->set_flashdata('alert','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Şifreniz güncellendi!</div>');
						redirect('anasayfa');
					}
				}	
			}
		}

		public function urun($id)
		{
			$this->load->model('urunler');
			$varmi=$this->urunler->urun_isexist($id);
			
			if($varmi)
			{
				$data['urun']=$varmi;
				$this->load->view('front/urun',$data);
			}else
			{
				echo "yok";
			}
		}

		public function urunara()
		{
			$harf=$this->input->post('harf');
			$this->load->model('vt');
			$sonuc=$this->vt->urunara($harf);

			if(!empty($sonuc))
			{
				foreach($sonuc as $urun)
				{
					echo "<li li style='color:black'><a href='".base_url('urun/'.$urun->u_id)."'> ".$urun->u_adi."</a></li>";
				}
			}else
			{
				echo "<li style='color:black'>Böyle bir ürün bulunamadı.</li>";
			}
		}
}