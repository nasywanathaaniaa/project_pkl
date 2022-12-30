<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\smhrd;

class smhrdcontroller extends BaseController
{
    public function index()
    {
        $smhrdModel = new smhrd();
        $smasuk = $smhrdModel->findAll();

        $data = [
            'title' => 'suratmasuk',
            'suratmasuk' => $smasuk
        ];

        return view('hrd/suratmasuk', $data);
    }
}
