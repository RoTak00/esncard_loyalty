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

        Schema::table('company_admin', function (Blueprint $table) {

            if (Schema::hasColumn('company_admin', 'password_hash')) {
                $table->renameColumn('password_hash', 'password');
            }

            // No need for salt, it's already implemented in the model
            if (Schema::hasColumn('company_admin', 'salt')) {
                $table->dropColumn('salt');
            }

            if (!Schema::hasColumn('company_admin', 'remember_token')) {
                $table->rememberToken();
            }

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('company_admin', function (Blueprint $table) {

            if (Schema::hasColumn('company_admin', 'password')) {
                $table->renameColumn('password', 'password_hash');
            }

            if (!Schema::hasColumn('company_admin', 'salt')) {
                $table->string('salt')->nullable();
            }

            if (Schema::hasColumn('company_admin', 'remember_token')) {
                $table->dropColumn('remember_token');
            }

        });

    }
};
