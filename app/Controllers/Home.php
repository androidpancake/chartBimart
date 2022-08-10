<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product/product');
    }

    public function item()
    {
        return view('item/item');
    }
}
