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
        Schema::create('ukts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('npm')->unique();
            $table->enum('golongan', ['BKT', 'UKT 1', 'UKT 2', 'UKT 3', 'UKT 4', 'UKT 5', 'UKT 6', 'UKT 7', 'UKT 8']);
            $table->string('ukt');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukts');
    }
};
