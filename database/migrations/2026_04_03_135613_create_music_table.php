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
    Schema::create('music', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('youtube_id', 11);
        $table->text('description')->nullable();
        $table->tinyInteger('day_of_week')->unsigned(); 
        $table->boolean('is_active')->default(true);
        $table->timestamps();
        $table->softDeletes();
        $table->index('day_of_week');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
