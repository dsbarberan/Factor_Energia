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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            
            $table-> string("tags");
            $table-> integer("owner_id");
            $table-> integer("is_answered")->nullable();
            $table-> integer("view_count")->nullable();
            $table-> integer("bounty_amount")->nullable();
            $table-> integer("bounty_closes_date")->nullable();
            $table-> integer("answer_count")->nullable();
            $table-> integer("score")->nullable();
            $table-> integer("last_activity_date")->nullable();
            $table-> integer("creation_date")->nullable();
            $table-> integer("question_id")->nullable();
            $table-> string("last_edit_date")->nullable();
            $table-> string("content_license")->nullable();
            $table-> string("link")->nullable();
            $table-> string("title")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
