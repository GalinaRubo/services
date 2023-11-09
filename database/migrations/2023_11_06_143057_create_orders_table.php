<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('order');
            $table->string('tel',24);
            $table->string('name')->nullable();
            $table->string('street');
            $table->integer('house');
            $table->integer('appart')->nullable();
            $table->string('city');
            $table->string('index')->nullable();
            $table->string('day');
            $table->string('time');
            $table->integer('totalprice');
            $table->longText('info',1024)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
