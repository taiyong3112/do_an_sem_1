<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->unsignedInteger('destination_id');
            $table->string('summary', 150);
            $table->text('content');
            $table->string('image', 255);
            $table->integer('adult_price');
            $table->integer('children_price');
            $table->integer('duration');
            $table->tinyInteger('status')->default(0);
            $table->string('meta_keywords', 100)->nullable();
            $table->string('meta_descriptions', 160)->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
