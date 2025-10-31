<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('merchandise') && ! Schema::hasColumn('merchandise', 'description')) {
            Schema::table('merchandise', function (Blueprint $table) {
                $table->text('description')->nullable()->after('name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('merchandise') && Schema::hasColumn('merchandise', 'description')) {
            Schema::table('merchandise', function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }
    }
};


