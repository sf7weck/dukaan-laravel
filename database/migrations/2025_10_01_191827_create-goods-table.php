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
        Schema::create('goods', function(Blueprint $table){
            $table->id();
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('account_id')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->unsignedTinyInteger('type');
            $table->string('name');
            $table->integer('carton')->default(0);
            $table->integer('pcs')->default(0);
            $table->decimal('rate', 12,2)->default(0);
            $table->integer('amount')->default(0);
            $table->timestamps();

        });
    }
};
