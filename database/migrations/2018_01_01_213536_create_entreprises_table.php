<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Elogo');
            $table->string('nomEntreprise');
            $table->string('ville');
            $table->string('adresse');
            $table->string('codePostal');
            $table->string('siteWeb');
            $table->string('descriptionE');
            $table->enum('pays', ['Maroc', 'Algerie','Tunisie','France']);
            
            $table->enum('activiteE', array('AMEUBLEMENT_DECORATION', 'CENTRES_APPEL', 'EDITION_IMPRIMERIE', 'METALLURGIE_SIDÉRURGIE', 'PAPIER_BOIS_PLASTIQUE', 'QUALITE_METHODES','EDUCATION_FORMATION','IMMOBILIER_ARCHITECTURE','INFORMATIQUE_SSII_INTERNET','INGENIERIE_ETUDES_DEVELOPPEMENT','TELECOM','AUTOMOBILE_TRANSPORT','DISTRIBUTION_VENTE_COMMERCE','SANTE_PHARMACIE_HOPITAUX','SERVICES_AEROPORTUAIRES_MARITIMES','SERVICES_COLLECTIFS_SOCIAUX','MARKETING_COMMUNICATION_MEDIAS','NETTOYAGE_SECURITE_SURVEILLANCE','SPORT_ACTION_CULTURELLE_SOCIALE','SERVICES_AUTRES'));

            /*$table->enum('activiteE', ['AMEUBLEMENT_DECORATION', 'CENTRES_APPEL', 'EDITION_IMPRIMERIE', 'METALLURGIE_SIDÉRURGIE', 'PAPIER_BOIS_PLASTIQUE', 'QUALITE_METHODES','EDUCATION_FORMATION','IMMOBILIER_ARCHITECTURE','INFORMATIQUE_SSII_INTERNET','INGENIERIE_ETUDES_DEVELOPPEMENT','TELECOM','AUTOMOBILE_TRANSPORT','DISTRIBUTION_VENTE_COMMERCE','SANTE_PHARMACIE_HOPITAUX','SERVICES_AEROPORTUAIRES_MARITIMES','SERVICES_COLLECTIFS_SOCIAUX','MARKETING_COMMUNICATION_MEDIAS','NETTOYAGE_SECURITE_SURVEILLANCE','SPORT_ACTION_CULTURELLE_SOCIALE','SERVICES_AUTRES']);*/
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
        Schema::dropIfExists('entreprises');
    }
}
