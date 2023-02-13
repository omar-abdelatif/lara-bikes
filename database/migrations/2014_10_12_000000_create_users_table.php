<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('password');
            $table->integer('phone');
            $table->string('user_img');
            $table->string('address');
            $table->string('gender');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
