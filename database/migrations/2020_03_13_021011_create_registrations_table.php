<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik')->nullable();
            $table->string('nokk')->nullable();
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->char('gender', 1)->comment('0:M, 1:F');
            $table->foreignId('city_born_id');
            $table->date('date_born');
            $table->char('religion', 1)->comment('0:Islam, 1: Katolik, 2:Protestan, 3:Hindu, 4:Budha, 5:Kong Hu Cu');
            $table->integer('child_numb');
            $table->integer('brothers_total');
            $table->char('live_with', 1)->comment('0:Orang Tua, 1:Saudara Kandung, 2:Saudara, 3:Kost, 4:Pondok Pesantren');
            $table->char('plan_live', 1)->comment('0:Orang Tua, 1:Saudara Kandung, 2:Saudara, 3:Kost, 4:Pondok Pesantren');
            $table->text('hobby')->nullable();
            $table->text('dreams')->nullable();
            $table->text('organization')->nullable();
            $table->char('reg_status', 1)->comment('0:registration_status, 1:new_submission, 2:validating, 3:valid, 4:invalid, 5:registered, 6:accepted, 7:validating_change, 8:valid_change, 9:invalid_change');
            $table->boolean('phys_doc_status')->default(false);
            $table->boolean('pip_status')->default(false);
            $table->foreignId('facility_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('school_id')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}