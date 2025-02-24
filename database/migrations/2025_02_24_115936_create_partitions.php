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
        Schema::create('partitions', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('user_cloud');
            $table->foreignUuid('store_entity');
            $table->integer('size');
            $table->integer('order');
            $table->string('fileuuid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partitions');
    }
};
