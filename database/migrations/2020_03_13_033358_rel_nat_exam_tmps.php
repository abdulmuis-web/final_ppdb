<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelNatExamTmps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nat_exam_tmps', function (Blueprint $table) {
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
        Schema::table('nat_exam_tmps', function (Blueprint $table) {
            //
        });
    }
}