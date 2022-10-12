<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Baju;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function home()
    {
        $BajuModel = new Baju();
        $bju = $BajuModel->findAll();
        $data = [
            'title' => 'Home',
            'bajus' => $bju
        ];
        return view('pages/home', $data);
    }
}
