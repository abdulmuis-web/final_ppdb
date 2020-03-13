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
            $table->foreignId('city_born_id');
            $table->date('date_born');
            $table->char('relation');
            $table->char('last_edu');
            $table->char('income');
            $table->char('job');
            $table->foreignId('user_id');
            $table->foreignId('edit_by')->nullable();
            $table->foreignId('approve_by')->nullable();
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