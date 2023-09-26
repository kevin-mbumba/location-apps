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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->foreignId('statut_location_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('client_id')->constrained();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(["statut_location_id","user_id","client_id"]);
        });
        Schema::dropIfExists('locations');
    }
};
