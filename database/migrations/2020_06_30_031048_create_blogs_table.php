<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('image', 255);
            $table->tinyInteger('status')->default(0);
            $table->text('content');
            $table->string('meta_keywords', 100)->nullable();
            $table->string('meta_descriptions', 160)->nullable();
            $table->unsignedInteger('destination_id');
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
        Schema::dropIfExists('blogs');
    }
}
