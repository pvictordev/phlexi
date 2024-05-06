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
        Schema::create('projects_skills', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned()->nullable();

            // Add foreign key constraint for freelancer_id referencing freelancers table
            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade')->onUpdate('cascade');

            // Add skill_id column as unsigned big integer
            $table->bigInteger('skill_id')->unsigned()->nullable();

            // Add foreign key constraint for skill_id referencing skills table
            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_skills');
    }
};
