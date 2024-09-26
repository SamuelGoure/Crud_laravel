<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcustomersTable extends Migration
{
    public function up()
    {
        Schema::create('newcustomers', function (Blueprint $table) {
            $table->id(); // Crée une colonne `id` avec auto-incrémentation
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->timestamps(); // Crée les colonnes `created_at` et `updated_at`
        });
    }

    public function down()
    {
        Schema::dropIfExists('newcustomers');
    }
}
