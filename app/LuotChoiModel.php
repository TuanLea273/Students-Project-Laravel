<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LuotChoiModel extends Model
{
    //
    use SoftDeletes;
    protected $table="luot_choi";
    public function nguoiChoi()
    {
        return $this->belongsTo('App\NguoiChoiModel');
    }
    //Cách 1
    // public function chiTiet()
    // {
    //     return $this->belongsTo('App\ChiTietLuotChoiModel');
    // }
    public function dsCauHoi()
    {
        return $this->belongsToMany('App\CauHoiModel','chi_tiet_luot_choi','luot_choi_id','cau_hoi_id','id','id')->withPivot('id','phuong_an','diem');
    }
    public function dsChiTiet()
    {
        return $this->belongstoMany('App\CauHoiModel');
    }
}
