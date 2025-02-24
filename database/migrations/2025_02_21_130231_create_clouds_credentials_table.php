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
        Schema::create('clouds_credentials', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name', 10);
            $table->text('client_id');
            $table->text('client_secret')->nullable();
            $table->text('scopes')->nullable();
            $table->text('redirect_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clouds_credentials');
    }
};
