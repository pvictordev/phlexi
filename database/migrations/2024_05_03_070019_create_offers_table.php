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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('freelancer_id');
            $table->string('description');
            $table->boolean('request')->default(true);
            $table->boolean('response')->default(false);

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers')->onDelete('cascade');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
