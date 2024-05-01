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

            $table->bigInteger('client_id')->unsigned()->index();

            $table->foreign('client_id')->references('client_id')->on('clients')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('project_id')->unsigned()->unique()->index();

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('rating');

            // Add description column as varchar
            $table->string('description')->nullable();
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
