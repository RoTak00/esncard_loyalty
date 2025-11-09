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
        Schema::create('company_admin', function (Blueprint $table) {
            $table->id('company_admin_id');
            $table->foreignId('company_id')->constrained(table:'company', column:'company_id')->onDelete('cascade');
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->string('salt');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_admin');
    }
};
