<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Devices extends BaseController
{
    // protected $deviceModel;
    // public function __construct()
    // {
    //     $this->deviceModel = new DeviceModel();
    // }
    public function index()
    {
        $device = $this->deviceModel->findAll();

        $data = [
            'title' => 'Devices',
            'device' => $device
        ];


        return view('pages/devices', $data);
    }
    // public function details($id)
    // {
    //     $device = $this->deviceModel->where(['id' => $id])->first();
    //     $data = [
    //         'title' => 'Device Details',
    //         'device' => $device
    //     ];

    //     return view('pages/details', $data);
    // }
}
