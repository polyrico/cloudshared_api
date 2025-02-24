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
        Schema::table('users_clouds', function (Blueprint $table) {
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('cloud_credential')->references('uuid')->on('clouds_credentials');
        });

        Schema::table('drivers', function (Blueprint $table) {
            $table->foreign('user')->references('id')->on('users');
        });

        Schema::table('store_entities', function (Blueprint $table) {
            $table->foreign('driver')->references('uuid')->on('drivers');
            $table->foreign('parent_store_entity')->references('uuid')->on('store_entities');
        });

        Schema::table('partitions', function (Blueprint $table) {
            $table->foreign('user_cloud')->references('uuid')->on('users_clouds');
            $table->foreign('store_entity')->references('uuid')->on('store_entities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_clouds', function (Blueprint $table) {
            $table->dropForeign(['user']);
            $table->dropForeign(['cloud_credential']);
        });

        Schema::table('drivers', function (Blueprint $table) {
            $table->dropForeign(['user']);
        });

        Schema::table('store_entities', function (Blueprint $table) {
            $table->dropForeign(['driver']);
            $table->dropForeign(['parent_store_entity']);
        });

        Schema::table('partitions', function (Blueprint $table) {
            $table->dropForeign(['user_cloud']);
            $table->dropForeign(['store_entity']);
        });
    }
};
