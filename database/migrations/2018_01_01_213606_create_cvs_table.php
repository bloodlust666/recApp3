<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Situation_actuelle',120);
            $table->string('Secteur_activité',120);
            $table->string('Salaire_souhaité',120);
            $table->string('Niveau_de_formation',120);
            $table->string('Disponibilité',120);
            $table->string('Expérience',120);
            $table->string('Date_deb_Formation',120);
            $table->string('Date_fin_Formation',120);
            $table->string('Etablissement',120);
            $table->string('Diplome',120);
            $table->string('Description_Formation',120);
            $table->string('Date_Deb_Experience',120);
            $table->string('Date_Fin_Experience',120);
            $table->string('Entreprise',120);
            $table->string('Intitulé_poste',120);
            $table->string('Secteur_activité_exp',120);
            $table->string('Fonction',120);
            $table->string('Type_de_contrat',120);
            $table->string('Ville',120);
            $table->string('Salaire',120);
            $table->string('Description_exp',120);
            $table->string('Arab',120);
            $table->string('Français',120);
            $table->string('Anglais',120);
            $table->string('Autres',120);
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
        Schema::dropIfExists('cvs');
    }
}
