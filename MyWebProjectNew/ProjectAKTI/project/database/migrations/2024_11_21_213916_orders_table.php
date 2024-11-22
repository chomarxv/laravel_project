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
            $table->id();
            $table->string('firstname',length:30);
            $table->string('lastname',length:30);
            $table->string('email',length:50);
            $table->string('mobile',length:30);
            $table->text('address');
            $table->string('country',length:30);
            $table->string('city',length:30);
            $table->double('zipcode');
            $table->double('totalwithtax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
