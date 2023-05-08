<?php

class vty extends CI_Model
{
     /*YÖNETİM PANELİ GİRİŞ İŞLEMLERİ */
    function check($email,$sifre)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('yonetim')
        ->where('y_mail',$email)
        ->where('y_sifre',md5($sifre))
        ->get()
        ->row();
        return $result;
    }

    /*YÖNETİM PANELİ FONKSİYONLAR */

    function ekle($from,$data=array())
    {
        $result=$this
        ->db
        ->insert($from,$data);
        return $result;
    }

    function listele($from)
    {
        $result=$this
        ->db
        ->select('*')
        ->from($from)
        ->get()
        ->result();
        return $result;
    }

    function uruncek($id)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('urunler')
        ->where('u_id',$id)
        ->get()
        ->row();
        return $result;
    }

    function update($data,$id,$where,$from)
    {
        $result=$this
        ->db
        ->where($where,$id)
        ->update($from,$data);
        return $result;
    }

    function sil($id,$where,$from)
    {
        $result=$this
        ->db
        ->delete($from,array($where => $id));
        return $result;

    }

    function uyecek($id)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('uyeler')
        ->where('uyeid',$id)
        ->get()
        ->row();
        return $result;
    }
}