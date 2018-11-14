<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    //
    public function getdata()
    {
    	$this->db->select('*');
    	$dl = $this->db->get('nganh');
    	$dl = $$dl->result_array();
    	var_dump($dl);
    }
}
