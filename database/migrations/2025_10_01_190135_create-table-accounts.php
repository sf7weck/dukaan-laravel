<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function(Blueprint $table){
            $table->id();
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('shop_id')->index();
            $table->string('marka');
            $table->unsignedTinyInteger('type')->comment('1 => In, 2 => Out');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->integer('balance')->default(0);
            $table->timestamps();

            // Indexes
            $table->index(['shop_id', 'marka']);
        });
    }
};
