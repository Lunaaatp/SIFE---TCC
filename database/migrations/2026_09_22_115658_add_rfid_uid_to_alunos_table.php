<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('rfid_uid', 50)->nullable()->unique();
        });
    }

    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropUnique(['rfid_uid']);
            $table->dropColumn('rfid_uid');
        });
    }
};