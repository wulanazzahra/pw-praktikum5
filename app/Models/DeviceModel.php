<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
    protected $table = 'devices_data';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
}
