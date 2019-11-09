<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GoiCreditModel extends Model
{
   	protected $table = 'goi_credit';
    use SoftDeletes;
}
