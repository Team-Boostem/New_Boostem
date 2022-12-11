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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('title');
            $table->longText('discription');
            $table->string('slug');
            $table->string('type')->default('a');
            $table->longText('content');
            $table->string('creator');
            $table->string('creator_type');
            $table->integer('category')->nullable();
            $table->string('tags')->nullable();
            $table->integer('readtime')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('blogs');
    }
};
