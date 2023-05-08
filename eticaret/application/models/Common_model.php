<?php

class Common_model extends CI_Model{
    
    public function getAll($table)
    {
        return $this
        ->db
        ->get($table)
        ->result();
    }

    public function get($where,$table)
    {
        return $this
        ->db
        ->where($where,$table)
        ->get($table)
        ->row();
    }
}