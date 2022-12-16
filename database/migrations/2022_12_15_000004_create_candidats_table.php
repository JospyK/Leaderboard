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
            $table->string('nom')->nullable();
            $table->string('projet')->nullable();
            $table->string('categorie')->nullable();
            $table->integer('vpro')->nullable()->default(0);
            $table->integer('vjury')->nullable()->default(0);
            $table->integer('vpublic')->nullable()->default(0);
            $table->integer('total')->nullable()->default(0);
            $table->integer('classement')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
