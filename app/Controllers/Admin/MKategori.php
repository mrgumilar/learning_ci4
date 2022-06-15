<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class MKategori extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kategori'
        ];
        return view('backoffice/admin/m_kategori/index', $data);
    }
}
