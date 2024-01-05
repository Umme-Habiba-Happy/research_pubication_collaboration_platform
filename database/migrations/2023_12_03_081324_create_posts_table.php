<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->foreignId('researcher_id')->constrained('researchers');
            $table->string('description',5000);
            $table->string('author_name',50);
            $table->string('coauthor_name');
            $table->string('doi')->unique();

            $table->string('reference')->nullable();
            $table->integer('citation_count')->default(0);

            $table->foreignId('category_id');
            $table->string('status')->default('inactive');
            $table->string('file')->nullable();
            $table->string('comment')->nullable();
            $table->timestamp('published_date');

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
        Schema::dropIfExists('posts');
    }
};
