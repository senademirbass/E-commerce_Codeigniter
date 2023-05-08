<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class yonetimpaneli extends CI_Controller {

	function guvenlik()
	{
		$login=$this->session->userdata('login');
		if(!$login)
		{
			redirect('yonetimpaneli');
		}
	}

	public function index()
	{
		$login=$this->session->userdata('login');
		if($login)
		{
			redirect('yonetimpaneli/anasayfa');
		}
		$this->load->view('back/giris');
	}

	public function girisyap()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('vty');
		$check=$this->vty->check($email,$password);
		if($check)
		{
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('inf',$check);
			redirect('yonetimpaneli/anasayfa');
		}
		else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger" role="alert">Mail veya şifre yanlış!</div>');
			redirect('yonetimpaneli');
		}
	}	
	
	public function anasayfa()
	{
		$this->guvenlik();
		$this->load->view('back/anasayfa');
	}

	public function cikisyap()
    {
        $this->session->sess_destroy();
        redirect('yonetimpaneli');
    }

	/*ÜRÜN İŞLEMLERİ*/

	public function urunler()
	{
		$this->load->model('vty');
		$sonuc=$this->vty->listele("urunler");
		$data=new stdClass;
		$data->bilgi=$sonuc;
		$this->load->view('back/urunler',$data);
	}

	public function urunekle()
	{
		$this->load->view('back/urunekle');
	}

	public function uruneklendi()
	{
		$urunadi=$this->input->post('urunadi');
		$urunturu=$this->input->post('urunturu');
		$urunbilgi=$this->input->post('urunbilgi');
		$urunfiyati=$this->input->post('urunfiyati');
		$urunstoku=$this->input->post('urunstoku');

		$config=array(
			'upload_path'=>'assets/front/urunler',
			'allowed_types'=>'jpeg|jpg|png',
			'min_height'=>250,
			'min_width'=>250
		);

		$this->load->library('upload',$config);
			if($this->upload->do_upload('kapakresmi'))
			{
				$resim=$this->upload->data();
				$resimyolu=$resim['file_name'];
				$veritabanikayit='assets/front/urunler/'.$resimyolu.'';

				$data=array
				(
					'u_adi'=>$urunadi,
					'u_turu'=>$urunturu,
					'u_kapakresmi'=>$veritabanikayit,
					'u_bilgi'=>$urunbilgi,
					'u_fiyat'=>$urunfiyati,
					'u_stok'=>$urunstoku,
					'u_sef'=>sef($urunadi)
				);
				$this->load->model('vty');
				$sonuc=$this->vty->ekle("urunler",$data);
				if($sonuc)
				{
					$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">Ürün başarıyla eklendi!</div>');
					redirect('yonetimpaneli/urunler');
				}
				else
				{
					$this->session->set_flashdata('sonuc','<div class="alert alert-danger" role="alert">Dizi kapak resmi uygun türde değil!</div>');
					redirect('yonetimpaneli/urunler');
				}
			}

	}

	public function urunguncelle($sef)
	{
		$this->load->model('vty');
		$sonuc=$this->vty->uruncek($sef);
		if($sonuc)
		{
			$data['sonuc']=$sonuc;
			$this->load->view('back/urunguncelle',$data);
		}else
		{
			echo "ürün yok";
		}
		
	}

	public function urunguncelleok()
	{
		$urunadi=$this->input->post('urunadi');
		$urunid=$this->input->post('urunid');
		$urunturu=$this->input->post('urunturu');
		$urunbilgi=$this->input->post('urunbilgi');
		$urunfiyati=$this->input->post('urunfiyati');
		$urunstoku=$this->input->post('urunstoku');

		$config=array(
			'upload_path'=>'assets/front/urunler',
			'allowed_types'=>'jpeg|jpg|png',
			'min_height'=>250,
			'min_width'=>250
		);

		$this->load->library('upload',$config);
			if($this->upload->do_upload('kapakresmi'))
			{
				$resim=$this->upload->data();
				$resimyolu=$resim['file_name'];
				$veritabanikayit='assets/front/urunler/'.$resimyolu.'';

				$data=array
				(
					'u_adi'=>$urunadi,
					'u_turu'=>$urunturu,
					'u_kapakresmi'=>$veritabanikayit,
					'u_bilgi'=>$urunbilgi,
					'u_fiyat'=>$urunfiyati,
					'u_stok'=>$urunstoku,
					'u_sef'=>sef($urunadi)
				);
				$this->load->model('vty');
				$sonuc=$this->vty->update($data,$urunid,"u_id","urunler");
				if($sonuc)
				{
					$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$urunadi.' Ürünü başarıyla güncellendi!</div>');
					redirect('yonetimpaneli/urunler');
				}
			}
				else
				{
					$data=array
				(
					'u_adi'=>$urunadi,
					'u_turu'=>$urunturu,
					'u_bilgi'=>$urunbilgi,
					'u_fiyat'=>$urunfiyati,
					'u_stok'=>$urunstoku,
					'u_sef'=>sef($urunadi)
				);
				$this->load->model('vty');
				$sonuc=$this->vty->update($data,$urunid,"u_id","urunler");
				if($sonuc)
				{
					$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$urunadi.' Ürünü başarıyla güncellendi!</div>');
					redirect('yonetimpaneli/urunler');
				}
			}
		}

		public function urun($id)
		{
			$this->load->model('vty');
			$data['urun']=$this->vty->uruncek($id);
			$this->load->view('back/urun',$data);
		}

		/*GENEL İŞLEMLER*/
		public function sil($id,$where,$from)
		{
			$fonksiyon=$this->session->userdata('fonk');
			if($fonksiyon)
			{
			$this->load->model('vty');
			$sil=$this->vty->sil($id,$where,$from);
			if($sil)
			{
				$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$urunadi.' Ürün silindi!</div>');
				redirect('yonetimpaneli/urunler');
			}else{
				echo "ürün yok";
			}
			}else{
				$this->session->set_flashdata('sonuc','<div class="alert alert-danger" role="alert">Silme fonksiyonunu aktif etmelisin!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

		function silmefonksiyonu()
		{
			$session=$this->session->userdata('fonk');
			if($session)
			{
				$this->session->unset_userdata('fonk');
				redirect($_SERVER['HTTP_REFERER']);
			}else
			{
				$this->session->set_userdata('fonk',true);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

		/*Üye İşlemleri*/

		public function uyeler()
		{
			$this->load->model('vty');
			$sonuc=$this->vty->listele("uyeler");
			$data=new stdClass;
			$data->bilgi=$sonuc;
			$this->load->view('back/uyeler',$data);
		}

		public function uyeguncelle($sef)
	{
		$this->load->model('vty');
		$sonuc=$this->vty->uyecek($sef);
		if($sonuc)
		{
			$data['sonuc']=$sonuc;
			$this->load->view('back/uyeguncelle',$data);
		}else
		{
			echo "üye yok";
		}
		
	}

	public function uyeguncelleok()
	{
		$uyeid=$this->input->post('uyeid');
		$uyedurumu=$this->input->post('uyedurumu');

				$data=array
				(
					'uyeid'=>$uyeid,
					'uyeaktif'=>$uyedurumu
				);
				$this->load->model('vty');
				$sonuc=$this->vty->update($data,$uyeid,"uyeid","uyeler");
				if($sonuc)
				{
					$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">Üye başarıyla güncellendi!</div>');
					redirect('yonetimpaneli/uyeler');
				}
		}

		public function uye($id)
		{
			$this->load->model('vty');
			$data['uye']=$this->vty->uyecek($id);
			$this->load->view('back/uye',$data);
		}

		public function uyesil($id,$where,$from)
		{
			$fonksiyon=$this->session->userdata('fonk');
			if($fonksiyon)
			{
			$this->load->model('vty');
			$sil=$this->vty->sil($id,$where,$from);
			if($sil)
			{
				$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$uyeadi.' Üye silindi!</div>');
				redirect('yonetimpaneli/uyeler');
			}else{
				echo "ürün yok";
			}
			}else{
				$this->session->set_flashdata('sonuc','<div class="alert alert-danger" role="alert">Silme fonksiyonunu aktif etmelisin!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

	}

	


