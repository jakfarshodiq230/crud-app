<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('articels')->insert([
            ['title' => 'Laravel for Beginners', 'content' => 'A beginner\'s guide to Laravel', 'author_id' => 1],
            ['title' => 'PHP for Advanced Users', 'content' => 'Advanced PHP programming', 'author_id' => 2],
            ['title' => 'Introduction to MVC', 'content' => 'Basic MVC concepts in PHP', 'author_id' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articels');
    }
};
