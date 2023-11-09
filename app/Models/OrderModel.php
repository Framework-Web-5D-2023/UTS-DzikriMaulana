<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'jumlah', 'id_product', 'jumlahbayar'];
    protected $useTimestamp = true;

    public function saveOrder($data)
    {
        return $this->save($data);
    }

    public function getDetail(){
        return $this -> findall(); 
     }
}
