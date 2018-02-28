<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('tel1');
            $table->string('tel2')->nullable($value = true);
            $table->string('fax')->nullable($value = true);
            $table->string('email');
            $table->string('password');
            //$table->enum('userType', ['admin', 'candidat','recruteur'])->default('candidat');
            $table->boolean('adminType')->default(0);
            $table->boolean('recruteurType')->default(0)->nullable($value = true);;
            $table->boolean('candidatType')->default(0)->nullable($value = true);;
            $table->enum('civilite', ['Mr', 'Mme','Mlle']);
           
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
