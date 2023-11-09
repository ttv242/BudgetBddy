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
        Schema::create('group_invoice_status', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('groups_invoice_id');
            $table->tinyInteger('confirmation_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_invoice_status');
    }
};
