<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tasks')->default()->nullable();
            $table->string('name');
            $table->integer('taskable_id')->default()->nullable();
            $table->string('taskable_type')->default()->nullable();
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
        Schema::dropIfExists('employee_departments');
    }
}
