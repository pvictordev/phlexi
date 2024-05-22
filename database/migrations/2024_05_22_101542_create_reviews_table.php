<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('result_id')->unsigned()->unique()->index();
            $table->bigInteger('freelancer_id')->unsigned();
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('project_id')->unsigned()->unique()->index();

            $table->integer('rating');
            $table->text('description')->nullable();

            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('client_id')->references('client_id')->on('clients')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('result_id')->references('id')->on('results')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
