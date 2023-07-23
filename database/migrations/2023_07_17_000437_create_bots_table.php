<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bots', function (Blueprint $table) {
            $table->id();

            $table->string('url')->nullable();

            $table->string('title_ua')->nullable();
            $table->text('preview_ua')->nullable();
            $table->mediumText('text_ua')->nullable();

            $table->string('title_en')->nullable();
            $table->text('preview_en')->nullable();
            $table->mediumText('text_en')->nullable();

            $table->boolean('show')->default(false);
            $table->integer('order')->nullable();

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
        Schema::dropIfExists('bots');
    }
}
