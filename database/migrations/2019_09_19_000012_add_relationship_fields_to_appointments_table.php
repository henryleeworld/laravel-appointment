<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->foreignId('client_id')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->onDelete('cascade');
        });
    }
};
