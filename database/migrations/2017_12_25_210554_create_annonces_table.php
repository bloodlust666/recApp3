<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre_annonce',150);
            $table->string('description_poste',250);
            $table->string('description_profil',250);
            $table->string('emploi_base_ville',120);
            $table->boolean('active')->default(0);
            $table->enum('niveau_experience', ['EtudiantejeuneDiplome', 'Debutant_2ans','Xp2ans5ans','Xp5ans10ans','Xp_10ans']);
            $table->enum('niveau_etude', ['qualifAvantBac', 'bac+1','bac+2','bac+3','bac+5','bacPlus5Plus']);
            $table->enum('langue_exigees', ['france', 'arabe','anglais','espagnol']);
            $table->enum('type_contrat', ['CDI','CDD','stage','mission','alternance','tempsPartiel']);
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
        Schema::dropIfExists('annonces');
    }
}
