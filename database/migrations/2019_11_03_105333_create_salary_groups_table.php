<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('des');
            $table->integer('basic');
            $table->integer('fa');
            $table->integer('fd');
            $table->integer('va');
            $table->integer('vd');
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
        Schema::dropIfExists('salary_groups');
    }
}
