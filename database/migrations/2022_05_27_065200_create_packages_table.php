<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price')->default(0);
            $table->enum('billing_type', ['monthly', 'annually'])->default('monthly');
            $table->unsignedBigInteger('storage')->default(0);
            $table->unsignedBigInteger('projects')->default(0);
            $table->unsignedBigInteger('tasks')->default(0);
            $table->unsignedBigInteger('users')->default(0);
            $table->longText('modules')->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
