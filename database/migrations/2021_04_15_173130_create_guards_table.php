<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guards', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->string('address',500);
            $table->string('contact',120);
            $table->string('nid',120);
            $table->string('email')->unique();
            $table->text('age',20);
            $table->string('salary',20);
            $table->string('category_id');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**ph
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guards');
    }
}
