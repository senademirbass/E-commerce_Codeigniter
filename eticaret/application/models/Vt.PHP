<?php

class Vt extends CI_Model
{
    function ekle($where,$data=array())
    {
        $result=$this
        ->db
        ->insert($data,$where);
        return $result;
    }

    function uyevarmi($email,$sifre)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('uyeler')
        ->where('uyemail',$email)
        ->where('uyesifre',md5($sifre))
        ->get()
        ->row();
        return $result;
    }

    function mailvarmi($email)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('uyeler')
        ->where('uyemail',$email)
        ->get()
        ->row();
        return $result;
    }

    function varmi($bilgi,$id,$userid)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('uyeler')
        ->where($bilgi,$id)
        ->where('uyeid',$userid)
        ->get()
        ->row();
        return $result;
    }

    function urunara($id)
    {
        $result=$this
        ->db
        ->like('u_adi',$id)
        ->limit(5)
        ->from('urunler') 
        ->get()
        ->result();
        return $result;       
    }

    
}