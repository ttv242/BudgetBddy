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
        Schema::create('group_invoice', function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id');
            $table->integer('group_id')->nullable();
            $table->integer('member_id')->nullable();
            $table->text('summary')->nullable();
            $table->timestamps();
        });

        \DB::statement('UPDATE group_invoice SET group_id = (SELECT group_id FROM users WHERE id = group_invoice.buyer_id)');
        \DB::statement('UPDATE group_invoice SET member_id = (SELECT member_id FROM users WHERE id = group_invoice.buyer_id)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_invoice');
    }
};
