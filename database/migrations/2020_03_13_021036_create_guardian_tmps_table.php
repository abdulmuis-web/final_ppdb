<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianTmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardian_tmps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('nokk')->nullable();
            $table->unsignedBigInteger('city_born_id');
            $table->date('date_born');
            $table->char('relation');
            $table->char('last_edu');
            $table->char('income');
            $table->char('job');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('edit_by')->nullable();
            $table->unsignedBigInteger('approve_by')->nullable();
            $table->dateTime('approve_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardian_tmps');
    }
}