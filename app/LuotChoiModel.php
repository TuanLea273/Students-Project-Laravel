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
    public function chiTiet()
    {
        return $this->belongsTo('App\ChiTietLuotChoiModel');
    }
    public function dsChiTiet()
    {
        return $this->belongstoMany('App\CauHoiModel');
    }
}
