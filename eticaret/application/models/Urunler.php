<?php

class Urunler extends CI_Model
{
    function urungetir_t()
    {
        $result=$this
        ->db
        ->select('*')
        ->from('urunler')
        ->where('u_turu', 'telefon')
        ->order_by('u_id','ASC')
        ->get()
        ->result();
        return $result;
    }

    function urungetir_b()
    {
        $result=$this
        ->db
        ->select('*')
        ->from('urunler')
        ->where('u_turu', 'bilgisayar')
        ->order_by('u_id','ASC')
        ->get()
        ->result();
        return $result;
    }

    function urungetir_k()
    {
        $result=$this
        ->db
        ->select('*')
        ->from('urunler')
        ->where('u_turu', 'kablo')
        ->order_by('u_id','ASC')
        ->get()
        ->result();
        return $result;
    }

    function urun_isexist($id)
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
}

