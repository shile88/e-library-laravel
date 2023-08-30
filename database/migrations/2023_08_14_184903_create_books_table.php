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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('isbn');
            $table->string('title');
            $table->text('description');
            $table->integer('page_count');
            $table->integer('total_count');
            $table->date('publish_date');

            $table->foreignId('script_id')->constrained();
            $table->foreignId('binding_id')->constrained();
            $table->foreignId('size_id')->constrained();
            $table->foreignId('publisher_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
