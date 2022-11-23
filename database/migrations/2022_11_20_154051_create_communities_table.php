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
        Schema::create('communities', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('tagline')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('website')->nullable();
            $table->string('organisation_college')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->longText('description')->nullable();
            $table->longText('about')->nullable();
            $table->date('founded_at')->nullable();
            $table->string('domains')->nullable();
            $table->json('tags')->nullable();
            $table->json('field')->nullable();
            $table->json('socials')->nullable();
            $table->string('logo_photo_path', 2048)->nullable();
            $table->string('banner_photo_path', 2048)->nullable();
            $table->string('creator')->nullable();
            $table->json('admin')->nullable();
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
        Schema::dropIfExists('communities');
    }
};
