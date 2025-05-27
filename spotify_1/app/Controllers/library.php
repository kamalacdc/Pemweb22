<?php

namespace App\Controllers;

class Library extends BaseController
{
    public function index()
    {
        return view('pages/library', ['title' => 'Library']);
    }
}
