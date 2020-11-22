<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuffetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buffets', function (Blueprint $table) {
            $table-> increments('id');
            $table->string('nome', 50);
            $table->string('descricao', 500);
            $table->string('valor', 50);
            $table->string('endereco', 50);
            $table->string('telefone', 20);
            $table->string('email', 50);
            $table->string('tipo', 1);
            $table->boolean('residencial')->nullable()->default(0);
            $table->boolean('casamento')->nullable()->default(0);
            $table->boolean('infantil')->nullable()->default(0);
            $table->boolean('debutante')->nullable()->default(0);
            $table->boolean('dj')->nullable()->default(0);
            $table->boolean('lembrancinha')->nullable()->default(0);
            $table->boolean('comida')->nullable()->default(0);
            $table->boolean('brinquedo')->nullable()->default(0);
            $table->json('images');
            $table->string('anunciante');
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
        Schema::dropIfExists('buffets');
    }
}
