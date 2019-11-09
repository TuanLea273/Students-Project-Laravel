<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoiModel extends Model
{
    protected $table = 'nguoi_choi';
    use SoftDeletes;
    public function luotChoi()
    {
        return $this->hasMany('App\LuotChoiModel');
    }
}
