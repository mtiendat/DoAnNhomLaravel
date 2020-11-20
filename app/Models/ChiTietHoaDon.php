<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;
    protected $table='chitiethoadon';
    protected $fillable = [
        'TenSP',
        'SoLuong',
        'Gia',
        'KhuyenMai',
        'ThanhTien',
    ];
   
}
