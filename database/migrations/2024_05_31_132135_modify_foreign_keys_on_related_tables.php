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
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');

            $table->dropForeign(['freelancer_id']);
            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers')->onDelete('cascade');

            $table->dropForeign(['project_id']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');

            $table->dropForeign(['freelancer_id']);
            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers')->onDelete('cascade');

            $table->dropForeign(['project_id']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('results', function (Blueprint $table) {

            $table->dropForeign(['project_id']);
            $table->foreign('project_id')->references('id')->on('projects');

            $table->dropForeign(['freelancer_id']);
            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers');

            $table->dropForeign(['client_id']);
            $table->foreign('client_id')->references('client_id')->on('clients');
        });

        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->foreign('project_id')->references('id')->on('projects');

            $table->dropForeign(['freelancer_id']);
            $table->foreign('freelancer_id')->references('freelancer_id')->on('freelancers');

            $table->dropForeign(['client_id']);
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }
};
