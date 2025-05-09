<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('birthday')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('freelance')->nullable();
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn([
                'birthday', 'website', 'phone', 'city', 
                'age', 'degree', 'email', 'freelance'
            ]);
        });
    }
};
