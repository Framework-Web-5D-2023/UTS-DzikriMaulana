<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $table = 'detail';
    protected $primaryKey = 'id';
    protected $useTimestamp = true;
    public function getDetail(){
       return $this -> findall(); 
    }
    
}
