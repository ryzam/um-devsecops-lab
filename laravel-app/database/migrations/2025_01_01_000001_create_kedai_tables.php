<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
        });

        Schema::create('guestbook', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('message');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guestbook');
        Schema::dropIfExists('products');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
