<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest',function (Blueprint $table){
            $table->increments('id');
            $table->string('name',200);
            $table->string('email',300);
            $table->string('phone',20);
            $table->string('company',200);
            $table->string('type',200);
            $table->string('palmex',100);
            $table->string('duo',100);
            $table->string('iko',100);
            $table->string('tpe',100);
            $table->string('flexideck_seam',100);
            $table->string('other',300);
            $table->integer('sales_id');
            $table->string('photo',300);
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
