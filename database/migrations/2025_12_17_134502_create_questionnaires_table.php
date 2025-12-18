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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->text('question');        // texte de la question
            $table->string('option1');       // option 1
            $table->string('option2');       // option 2
            $table->string('option3');       // option 3
            $table->string('option4');       // option 4
            $table->unsignedTinyInteger('correct'); // index de la bonne réponse (0-3)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaires');
    }
};
