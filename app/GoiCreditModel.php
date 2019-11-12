<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GoiCreditModel extends Model
{
   	protected $table = 'goi_credit';
    use SoftDeletes;

    public function dsNguoiChoi()
    {
    	return $this->belongsToMany('App\NguoiChoiModel','lich_su_mua_credit','goi_credit_id','nguoi_choi_id','id','id')->withPivot('id','credit','so_tien');
    }
}
