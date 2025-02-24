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
        Schema::create('store_entities', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('driver')->nullable();
            $table->foreignUuid('parent_store_entity')->nullable();
            $table->string('name');
            $table->char('extention', 5);
            $table->integer('size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_entities');
    }
};
