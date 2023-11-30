<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasTable('users') && !Schema::hasColumn('users', 'number_id')) {
                $table->string('number_id')->after('id')->nullable();
            }
        });
    }


    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasTable('users') && !Schema::hasColumn('users', 'number_id')) {
                $table->string('number_id');
            }
        });
    }
};
