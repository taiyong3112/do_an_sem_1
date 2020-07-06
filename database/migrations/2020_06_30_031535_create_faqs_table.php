<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->tinyInteger('status')->default(0);
            $table->text('content');
            $table->unsignedInteger('destination_id');
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
        Schema::dropIfExists('faqs');
    }
}
