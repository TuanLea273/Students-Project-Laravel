<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoiModel extends Model
{
    protected $table = 'nguoi_choi';
    use SoftDeletes;

    public function dsGoiCredit()
    {
    	return $this->belongsToMany('App\GoiCreditModel','lich_su_mua_credit','nguoi_choi_id','goi_credit_id','id','id')->withPivot('id','credit','so_tien');
    }

    public function dsLuotChoi()
    {
    	return $this->hasMany('App\LuotChoiModel','nguoi_choi_id','id');
    	//LuotChoi.nguoi_choi_id = NguoiChoi.id
    }
    
}
