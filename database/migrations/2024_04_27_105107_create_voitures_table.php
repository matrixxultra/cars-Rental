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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("marque_id");
            $table->unsignedBigInteger("categorie_id");
            $table->string("modele",30)->nullable();
            $table->integer("année")->nullable();
            $table->integer("prix_location_jour")->nullable();
            $table->string("color",30)->nullable();
            $table->integer("stock")->nullable();
            $table->string("promotion",15)->nullable();
            $table->foreign("marque_id")->references('id')->on("marques")->onDelete("cascade");
            $table->foreign("categorie_id")->references('id')->on("categories")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
