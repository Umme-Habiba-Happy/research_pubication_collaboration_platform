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
        Schema::create('researchers', function (Blueprint $table) {
            $table->id();

            $table->string('researcher_name', 50);
            $table->string('researcher_field', 30);
            $table->string('email', 30);
            $table->integer('contact', 30);
            $table->string('degree', 30);
            $table->string('institute');
            $table->string('department');
            $table->string('skills');




            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('researchers');
    }
};
