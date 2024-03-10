<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ajoutez la colonne comme nouvelle colonne
        Schema::table('etudiants', function (Blueprint $table) {
            $table->unsignedBigInteger('new_filiere_id')->after('filiere_id');
        });

        // Supprimez l'ancienne colonne
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('filiere_id');
        });

        // Renommez la nouvelle colonne
        Schema::table('etudiants', function (Blueprint $table) {
            $table->renameColumn('new_filiere_id', 'filiere_id');
        });

        // Ajoutez la clé étrangère
        Schema::table('etudiants', function (Blueprint $table) {
            $table->foreign('filiere_id')->references('id')->on('filieres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
