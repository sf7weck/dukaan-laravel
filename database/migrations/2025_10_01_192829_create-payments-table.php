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
        Schema::create('payments', function(Blueprint $table){
            $table->id();
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('account_id')->index();
            $table->unsignedTinyInteger('type')->comment('1 => In, 2 => Out');
            $table->unsignedTinyInteger('mode')->default(1)->comment('1 => offline, 2 => online');
            $table->integer('amount')->default(0);
            $table->timestamps();

        });
    }
};
