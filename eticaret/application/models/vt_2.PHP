<?php

class vt_2 extends CI_Model
{
    function profilupdate($data=array(),$id)
    {
        $result=$this
        ->db
        ->where('uyeid',$id)
        ->update('uyeler',$data);
        return $result;
    }  
}