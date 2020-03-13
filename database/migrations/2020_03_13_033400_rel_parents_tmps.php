<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelParentsTmps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parents_tmps', function (Blueprint $table) {
            $table->foreign('city_born_id')->references('id')->on('cities');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('edit_by')->references('id')->on('users');
            $table->foreign('approve_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parents_tmps', function (Blueprint $table) {
            //
        });
    }
}