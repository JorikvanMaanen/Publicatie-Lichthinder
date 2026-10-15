<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('users', 'is_approved')) {
            DB::table('users')
                ->where('is_approved', true)
                ->update(['approval_status' => 'approved']);

            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('is_approved');
            });
        }
    }

    public function down(): void
    {
        if (! Schema::hasColumn('users', 'is_approved')) {
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('is_approved')->default(false);
            });
        }

        DB::table('users')
            ->where('approval_status', 'approved')
            ->update(['is_approved' => true]);
    }
};
