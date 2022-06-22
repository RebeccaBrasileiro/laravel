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
        Schema::create('mensagem_topicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mensagem_id')->constraneid()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('topico_id')->onDelete('cascade');
            $table->unique(['mensagem_id','topico_id']);
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
        Schema::dropIfExists('mensagem_topicos');
    }
};
