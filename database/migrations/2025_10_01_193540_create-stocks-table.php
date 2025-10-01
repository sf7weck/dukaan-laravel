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
        Schema::create('stocks', function(Blueprint $table){
            $table->id();
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('product_id')->index();
            $table->string('name');
            $table->integer('carton')->default(0);
            $table->integer('pcs')->default(0);
            $table->timestamps();

        });
    }
};
