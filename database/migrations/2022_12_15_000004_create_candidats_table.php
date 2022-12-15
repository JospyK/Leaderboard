<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order')->nullable();
            $table->string('nom')->nullable();
            $table->string('photo')->nullable();
            $table->string('categorie')->nullable();
            $table->integer('vpro')->nullable();
            $table->integer('vjury')->nullable();
            $table->integer('vpublic')->nullable();
            $table->integer('total')->nullable();
            $table->integer('classement')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
