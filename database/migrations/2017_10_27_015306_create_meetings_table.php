<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('attending')->nullable()->default(0);
            $table->integer('meetingable_id')->default(1);
            $table->string('meetingable_type')->default('App\\\Models\\\Employee');
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamps()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
