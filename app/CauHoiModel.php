<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class CauHoiModel extends Model
{
    protected $table = 'cau_hoi';
    use SoftDeletes;
    public function linhVuc()
    {
        return $this->belongsTo('App\LinhVucModel','linh_vuc_id','id');
        //LinhVuc.id = CauHoi.linh_vuc_id
    }
}
