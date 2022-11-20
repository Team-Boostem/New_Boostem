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
        Schema::create('surveys', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('creator')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('cover_image')->nullable();
            $table->date('start_dates')->nullable();
            $table->date('end_dates')->nullable();
            $table->json('tags')->nullable();
            $table->json('required_fields')->nullable();
            $table->json('additional_fields')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('suspended')->default(false);
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
        Schema::dropIfExists('surveys');
    }
};
