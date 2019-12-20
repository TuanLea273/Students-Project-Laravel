<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\CauHoiModel;
class LinhVucModel extends Model
{
    //
    use SoftDeletes;
    protected $table="linh_vuc";

    public function dsCauHoi()
    {
    	return $this->hasMany('App\CauHoiModel','linh_vuc_id','id');
    	//CauHoi.linh_vuc_id = LinhVuc.id
    }
}
