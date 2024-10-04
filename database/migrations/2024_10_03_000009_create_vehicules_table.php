<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table)
        {
            $table->id();
            $table->string('titre', 70);
            $table->decimal('prix', 9, 2);
            $table->string('image', 100)->default('defaultVehicule.jpg');
            $table->text('description');
            $table->string('departement', 100);
            $table->char('code_postal', 5);
            $table->string('ville', 100);
            $table->integer('cv_fiscaux');
            $table->integer('ch_din');
            $table->integer('kilometrage');
            $table->year('annee');
            $table->boolean('statut')->default(0);
            $table->date('Mise_en_circulation');
            $table->boolean('premiere_main');
            $table->date('controle_technique');
            $table->enum('energie', [
                'Diesel',
                'Essence',
                'Électrique',
                'Hybrides',
                'Hybrides_rechargeables',
                'Hybrides_non_rechargeables',
                'Bicarburation_essence_GPL',
                'Bicarburation_essence_bioéthanol',
                'Autres_énergies_alternatives',
            ]);
            $table->enum('type', [
                '4x4_Suv_Crossover',
                'Berline',
                'Cabriolet',
                'Monospace',
                'Sans_permis',
                'Citadine',
                'Break',
                'Coupé',
                'Voiture_société_Commercial',
                'Autre',
            ]);
            $table->enum('etat', [
                'Sans_frais_à_Prévoir',
                'Roulante_Réparations_Nécessaires',
                'Non_Roulante_Réparation_Obligatoire',
                'Accidenté',
                'Pour_Pièces'
            ]);
            $table->enum('place', [
                '1_places',
                '2_places',
                '3_places',
                '4_places',
                '5_places',
                '6_places',
                '7_places',
                'Autre',
            ]);
            $table->enum('porte', [
                '2_portes',
                '4_portes',
                'Autre',
            ]);
            $table->enum('transmission', [
                'Boîte_manuelle',
                'Boite_automatique',
                'Autre',
            ]);

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('couleur_id')->nullable()->constrained('couleurs')->onDelete('set null');
            $table->foreignId('marque_id')->nullable()->constrained('marques')->onDelete('set null');
            $table->foreignId('euro_id')->nullable()->constrained('euros')->onDelete('set null');
            $table->foreignId('critair_id')->nullable()->constrained('critairs')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
