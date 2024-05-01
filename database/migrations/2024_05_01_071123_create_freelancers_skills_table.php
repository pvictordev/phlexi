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
        Schema::create('freelancers_skills', function (Blueprint $table) {
            $table->bigInteger('freelancer_id')->unsigned()->nullable();

            $table->bigInteger('skill_id')->unsigned()->nullable();

            $table->unique(['freelancer_id', 'skill_id'], 'unique_user_skill');

            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers_skills');
    }
};
