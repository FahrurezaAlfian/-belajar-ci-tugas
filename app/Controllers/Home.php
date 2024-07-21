<?php

namespace App\Controllers;

use App\Models\ProductModel;
<<<<<<< HEAD
=======
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;
>>>>>>> af335c2 (menambahkan data transaksi pembelian)

class Home extends BaseController
{
    protected $product;
<<<<<<< HEAD
=======
    protected $transaction;
    protected $transaction_detail;
>>>>>>> af335c2 (menambahkan data transaksi pembelian)

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
<<<<<<< HEAD
=======
        $this->transaction = new TransactionModel ();
        $this->transaction_detail = new TransactionDetailModel ();
>>>>>>> af335c2 (menambahkan data transaksi pembelian)
    }

    public function index()
    {

        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home',$data);
    }
<<<<<<< HEAD
=======
    public function profile()
{
    $username = session()->get('username');
    $data['username'] = $username;

    $buy = $this->transaction->where('username', $username)->findAll();
    $data['buy'] = $buy;

    $product = [];

    if (!empty($buy)) {
        foreach ($buy as $item) {
            $detail = $this->transaction_detail->select('transaction_detail.*, product.nama, product.harga, product.foto')->join('product', 'transaction_detail.product_id=product.id')->where('transaction_id', $item['id'])->findAll();

            if (!empty($detail)) {
                $product[$item['id']] = $detail;
            }
        }
    }

    $data['product'] = $product;

    return view('v_profile', $data);
}
>>>>>>> af335c2 (menambahkan data transaksi pembelian)
}