<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function home()
    {
        $data = [
            'title' => 'Home - AyoBangkit',
            'produk' => $this->produkModel->getProduk()
        ];

        return view('pages/home', $data);
    }

    // public function produk_umkm()
    // {
    //     $data = [
    //         'title' => 'Produk UMKM - AyoBangkit',
    //         'produk' => $this->produkModel->getProduk()
    //     ];
    //     // echo count($this->produkModel->getProduk());
    //     return view('pages/produk_umkm', $data);
    // }

    // public function link_produk($product_id)
    // {
    //     $produk = $this->produkModel->getProduk($product_id);
    //     $user_id = $produk['user_id'];

    //     $data = [
    //         'title' => 'Detail Produk - AyoBangkit',
    //         'produk' => $this->produkModel->getProduk($product_id),
    //         'produk_user' => $this->produkModel->getProdukUser($user_id)
    //     ];
    //     // echo $product_id;

    //     return view('pages/link_produk', $data);
    // }

    // public function list_produk()
    // {
    //     $user_id = session()->get('user_id');
    //     $data = [
    //         'title' => 'List Produk - AyoBangkit',
    //         'produk' => $this->produkModel->getProdukUser($user_id)
    //     ];

    //     return view('pages/list_produk', $data);
    // }

    // public function tambah_data()
    // {
    //     $data = [
    //         'title' => 'Tambah Produk - AyoBangkit'
    //     ];

    //     return view('pages/tambah_data', $data);
    // }

    // public function simpan_data()
    // {
    //     $fileGambar = $this->request->getFile('gambar_produk');
    //     if ($fileGambar->getError() == 4) {
    //         $namaGambar = "default.jpg";
    //     } else {
    //         $fileGambar->move('img');
    //         $namaGambar = $fileGambar->getName();
    //     }
    //     $user_id = session()->get('user_id');
    //     $this->produkModel->save([
    //         'user_id' => $user_id,
    //         'gambar_produk' => '/img/' . $namaGambar,
    //         'nama_produk' => $this->request->getVar('nama_produk'),
    //         'harga_produk' => $this->request->getVar('harga_produk'),
    //         'deskripsi_produk' => $this->request->getVar('deskripsi_produk')
    //     ]);

    //     session()->setFlashdata('pesan', 'Produk berhasil ditambahkan.');

    //     return redirect()->to('/list_produk');
    // }

    // public function hapus_data($product_id)
    // {
    //     $produk = $this->produkModel->find($product_id);

    //     if ($produk['gambar_produk'] != '/img/default.jpg') {
    //         $fileGambar = substr($produk['gambar_produk'], 1);
    //         unlink($fileGambar);
    //     }

    //     $this->produkModel->delete($product_id);

    //     session()->setFlashdata('pesan', 'Produk berhasil dihapus.');

    //     return redirect()->to('/list_produk');
    // }

    // public function edit_data($product_id)
    // {
    //     $data = [
    //         'title' => 'Edit Data Produk - AyoBangkit',
    //         'produk' => $this->produkModel->getProduk($product_id)
    //     ];

    //     return view('pages/edit_data', $data);
    // }

    // public function update_data($product_id)
    // {
    //     $produk = $this->produkModel->find($product_id);
    //     $fileGambar = $this->request->getFile('gambar_produk');

    //     if ($fileGambar->getError() == 4) {
    //         $namaGambar = $produk['gambar_produk'];
    //     } else {
    //         $fileLama = substr($produk['gambar_produk'], 1);
    //         unlink($fileLama);
    //         $fileGambar->move('img');
    //         $namaFile = $fileGambar->getName();
    //         $namaGambar = '/img/' . $namaFile;
    //     }

    //     $this->produkModel->save([
    //         'product_id' => $product_id,
    //         'gambar_produk' => $namaGambar,
    //         'nama_produk' => $this->request->getVar('nama_produk'),
    //         'harga_produk' => $this->request->getVar('harga_produk'),
    //         'deskripsi_produk' => $this->request->getVar('deskripsi_produk')
    //     ]);

    //     session()->setFlashdata('pesan', 'Produk berhasil diedit.');

    //     return redirect()->to('/list_produk');
    // }

    public function about()
    {
        $data = [
            'title' => 'About - AyoBangkit'
        ];

        return view('pages/about', $data);
    }
}
