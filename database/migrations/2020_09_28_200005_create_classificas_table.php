<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificas', function (Blueprint $table) {
            $table->id();
            $table->decimal("porcentagem", 10, 2);
            $table->foreignId("curso_id")->constrained("cursos")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("alternativa_id")->constrained("alternativas")
            ->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('classificas');
    }
}
