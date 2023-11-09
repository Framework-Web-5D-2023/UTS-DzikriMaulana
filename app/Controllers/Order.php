<?php

namespace App\Controllers;

use App\Models\DetailModel;
use App\Models\OrderModel;


class Order extends BaseController
{
    public function form($order_id)
    {
        // Membuat instance dari model DetailModel
        $detailModel = new DetailModel();

        // Menggunakan model untuk mendapatkan detail berdasarkan ID
        $detail = $detailModel->getDetailById($order_id);

        if ($detail) {
            // Detail produk ditemukan, lempar ke view 'order'
            return view('order', ['detail' => $detail]);
        } else {
            // Produk tidak ditemukan, tangani sesuai kebutuhan
            return "Produk tidak ditemukan";
        }
    }

    public function ordered()
    {
        $orderModel = new OrderModel();
    
        $id_product = $this->request->getPost('id_product');
        $nama = $this->request->getPost('nama');
        $jumlah = intval($this->request->getPost('jumlah'));
        $alamat = $this->request->getPost('alamat');
        $harga = floatval($this->request->getPost('harga'));
    
        // Hitung jumlah bayar
        $jumlahbayar = $jumlah * $harga;
    
        $data = [
            'id_product' => $id_product,
            'nama' => $nama,
            'jumlah' => $jumlah,
            'alamat' => $alamat,
            'jumlahbayar' => $jumlahbayar
        ];

        session()->setFlashdata('order_created', true);
    
        //var_dump($data);
        $orderModel->saveOrder($data);
    
        return redirect()->to(base_url('/orderlist')); // Ganti dengan halaman sukses atau redirect sesuai kebutuhan Anda.
    }
    
    

    public function orderlist()
    {   

        $detail = $this->orderModel->getDetail();
        $data = [
            "data" => $detail
        ];
        return view ('orderlist', $data);
    }
}