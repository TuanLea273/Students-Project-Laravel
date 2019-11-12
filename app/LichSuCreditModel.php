<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichSuCreditModel extends Model
{
    use SoftDeletes;

    protected $table = 'lich_su_mua_credit';	
}
