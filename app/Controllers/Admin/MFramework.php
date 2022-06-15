<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class MFramework extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Framework'
        ];
        return view('backoffice/admin/m_framework/index', $data);
    }
}
