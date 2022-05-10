<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name',)->comment('店名');
            $table->timestamps();
        });
        DB::table('shops')->insert(['id'=>1, 'name'=>'東京本店']);
        DB::table('shops')->insert(['id'=>2, 'name'=>'名古屋支店']);
        DB::table('shops')->insert(['id'=>3, 'name'=>'大阪支店']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
