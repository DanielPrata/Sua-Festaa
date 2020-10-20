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
