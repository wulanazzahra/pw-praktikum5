<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('pages/contact', $data);
    }
    public function details($id)
    {
        $device = $this->deviceModel->find($id);
        $data = [
            'title' => 'Device Details',
            'device' => $device,
            'id' => $id
        ];

        return view('pages/details', $data);
    }
}
