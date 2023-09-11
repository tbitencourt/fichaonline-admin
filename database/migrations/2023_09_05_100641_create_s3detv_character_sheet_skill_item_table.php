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
        Schema::create('s3detv_character_sheet_skill_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_sheet_skill_id')->constrained(
                table: 's3detv_character_sheet_skill', indexName: 'character_sheet_skill_item_id_foreign'
            );
            $table->string('description')->nullable();
            $table->integer('cost')->default(1);
            $table->integer('quantity')->default(1);
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
        Schema::dropIfExists('s3detv_character_sheet_skill_item');
    }
};
