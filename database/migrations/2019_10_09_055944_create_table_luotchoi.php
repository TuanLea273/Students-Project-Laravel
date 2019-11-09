<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLuotchoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_choi_id')->unsigned();
            $table->integer('so_cau');
            $table->integer('diem');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
}
