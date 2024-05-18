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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('client_id')->unsigned()->nullable();

            $table->foreign('client_id')->references('client_id')->on('clients')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('price');

            $table->string('status');

            $table->string('title');

            $table->string('description');

            $table->datetime('date')->default(now());

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
