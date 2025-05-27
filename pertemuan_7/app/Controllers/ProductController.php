<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController {
    public function index() {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('layout/header') . view('products/index', $data) . view('layout/footer');
    }

    public function detail($id) {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('layout/header') . view('products/detail', $data) . view('layout/footer');
    }
}
?>
