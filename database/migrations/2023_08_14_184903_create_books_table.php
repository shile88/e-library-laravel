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
            $table->string('title');
            $table->string('isbn');
            $table->integer('total_count');
            $table->integer('page_count');
            $table->date('publish_date');
            $table->text('description');


            // We use nullable() to allow the field to be empty (null)
            // constrained() means the field will be constrained to a table of the same name as the field name (script_id -> scripts)
            // nullOnDelete() is used to make the value of the field null when row from another table is deleted

            $table->foreignId('script_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('binding_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('size_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('publisher_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
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
