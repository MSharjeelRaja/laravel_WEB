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
        Schema::table('grader', function (Blueprint $table) {
            $table->foreign(['student_id'], 'grader_ibfk_1')->references(['id'])->on('student')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grader', function (Blueprint $table) {
            $table->dropForeign('grader_ibfk_1');
        });
    }
};
