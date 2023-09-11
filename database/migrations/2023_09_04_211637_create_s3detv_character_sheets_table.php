<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s3detv_character_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->text('background')->nullable();
            $table->string('type');
            $table->integer('cost');
            $table->string('origin');
            $table->integer('attribute_power');
            $table->integer('attribute_ability');
            $table->integer('attribute_resistance');
            $table->integer('action_points');
            $table->integer('mana_points');
            $table->integer('life_points');
            $table->integer('experience_points');
            $table->string('image_url')->nullable();
            $table->string('image_path')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s3detv_character_sheets');
    }
};
