<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'coba_produk';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['user_id', 'gambar_produk', 'nama_produk', 'harga_produk', 'deskripsi_produk'];

    public function getProduk($product_id = false)
    {
        if ($product_id == false) {
            return $this->findAll();
        }

        return $this->where(['product_id' => $product_id])->first();
    }

    public function getProdukUser($user_id)
    {
        return $this->where(['user_id' => $user_id])->findAll();
    }
}
