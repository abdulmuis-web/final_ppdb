<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('grade', 1)->comment('a:TK, b:RA, c:SD, d:MI, e:SMP, f:MTS, g:SMA, h:MA, i:SMK, j:MAK, k:PT, l: Lainnya');
            $table->char('status', 1)->comment('0:Negeri, 1:Swasta');
            $table->unsignedBigInteger('district_id');
            $table->text('address')->nullable();
            $table->string('nsm')->nullable();
            $table->string('npsn')->nullable();
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
        Schema::dropIfExists('schools');
    }
}