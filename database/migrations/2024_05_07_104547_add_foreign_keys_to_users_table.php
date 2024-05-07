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
        Schema::table('clients', function (Blueprint $table) {
            $table->constrained()->onDelete('cascade')->name('freelancers_freelancer_id_foreign');
        });
        Schema::table('freelancers', function (Blueprint $table) {
            $table->constrained()->onDelete('cascade')->name('clients_client_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
        });

        Schema::table('freelancers', function (Blueprint $table) {
            $table->dropForeign(['freelancer_id']);
        });
    }
};
