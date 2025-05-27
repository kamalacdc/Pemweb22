<?php

namespace App\Controllers;

class Playlist extends BaseController
{
    public function index()
    {
        return view('pages/playlist', ['title' => 'Playlist']);
    }
}
