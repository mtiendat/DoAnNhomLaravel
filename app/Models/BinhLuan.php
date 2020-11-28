<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table='binhluan';
    protected $fillable =[
        'id',
        'noidung',
        'trangthai',
        'id_user'

    ];
    public function hoadon(){
        return $this->belongsTo('App\Models\User', 'id_user','id');
    }
}
