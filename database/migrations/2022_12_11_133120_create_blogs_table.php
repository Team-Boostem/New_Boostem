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
            $table->longText('description');
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('creator');
            $table->string('community_id');
            $table->string('creator_type');
            $table->boolean('type')->default('1');
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
