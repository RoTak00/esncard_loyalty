<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stamp', function (Blueprint $table) {
            $table->id('stamp_id');
            $table->foreignId('company_id')->constrained(table:'company', column:'company_id')->onDelete('cascade');
            $table->foreignId('student_id')->constrained(table:'student', column:'student_id')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stamp');
    }
};
