<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChitietluotchoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('luot_choi_id')->unsigned();
            $table->integer('cau_hoi_id')->unsigned();
            $table->string('phuong_an');
            $table->integer('diem');
          
        });
    }

    
}
