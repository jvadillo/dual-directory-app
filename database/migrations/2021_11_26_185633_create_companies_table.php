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
            $table->text('profile');
            $table->text('interest');
            $table->text('offer');
            $table->text('technologies');
            $table->json('urls'); // We want to store a list of strings. $cast in Model is needed
            $table->string('video_url')->nullable();
            $table->text('description');
            
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
