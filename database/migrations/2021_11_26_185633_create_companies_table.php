<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('status_id')->constrained();
            
            $table->string('name');
            $table->string('image')->default('default-image.jpg');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('short_description')->nullable();
            $table->text('profile')->nullable();
            $table->text('offer')->nullable();
            $table->text('presentation')->nullable();
            //$table->json('urls'); // We want to store a list of strings. $cast in Model is needed
            $table->string('video_url')->nullable();
            $table->string('location')->nullable();
            //$table->boolean('international');
            
            // TODO: presentation, documents,...


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
