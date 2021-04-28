<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('budget');
            $table->text('description');
            $table->text('primary_beneficiaries');
            $table->text('area');
            $table->string('main_image')->default('');
            $table->unsignedBigInteger('category_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('status');
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('projects');
    }
}
