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
        Schema::create('imagens_noticias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noticia_id');
            $table->longText('imagem');
            $table->string('descricao', 255);
            $table->boolean('ativo')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('noticia_id')->references('id')->on('noticias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagens_noticias', function (Blueprint $table) {
            $table->dropForeign('imagens_noticias_noticia_id_foreign');
        });

        Schema::dropIfExists('imagens_noticias');
    }
};
