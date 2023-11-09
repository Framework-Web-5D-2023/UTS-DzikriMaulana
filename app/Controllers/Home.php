<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index(): string
    {
        $detail = $this->detailModel->getDetail();
        $data = [
            "tittle" => "Halaman Utama",
            "data" => $detail
        ];
        return view('index', $data);
    }
}
