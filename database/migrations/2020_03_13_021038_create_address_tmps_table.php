<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_tmps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->foreignId('city_id');
            $table->foreignId('district_id');
            $table->foreignId('village_id');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('zip')->nullable();
            $table->morphs('owner');
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
        Schema::dropIfExists('address_tmps');
    }
}