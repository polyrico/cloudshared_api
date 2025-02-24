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
        Schema::create('users_clouds', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('user');
            $table->foreignUuid('cloud_credential');
            $table->string('cloud_name');
            $table->text('refresh_token')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_clouds');
    }
};
