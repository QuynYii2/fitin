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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('name');
            $table->string('password');
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::table('admin')->insert([
            'phone' => 'daniel',
            'name' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
