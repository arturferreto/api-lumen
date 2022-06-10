<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id');
            $table->string('titulo', 100);
            $table->string('subtitulo', 155);
            $table->text('descricao');
            $table->dateTime('publicado_em');
            $table->string('slug', 255);
            $table->boolean('ativo')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('autor_id')->references('id')->on('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticias', function (Blueprint $table) {
            $table->dropForeign('noticias_autor_id_foreign');
        });

        Schema::dropIfExists('noticias');
    }
};
