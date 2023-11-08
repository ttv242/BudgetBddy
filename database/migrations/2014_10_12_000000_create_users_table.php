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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('full_name');
            $table->string('nickname')->nullable();
            $table->string('avatar_img')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('account_balance', 15, 0)->nullable();
            $table->string('account_type')->nullable();
            $table->string('job_title')->nullable();
            $table->string('workplace')->nullable();
            $table->string('username');
            $table->string('password');
            $table->tinyInteger('role')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

?>
