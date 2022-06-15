<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin'
        ];
        return view('backoffice/admin/dashboard/index', $data);
    }
}
