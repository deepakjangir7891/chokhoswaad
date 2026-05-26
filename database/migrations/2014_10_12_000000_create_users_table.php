<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');

            // Basic Info
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();

            // Login
            $table->string('password');

            // Address
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();

            // Profile
            $table->string('profile_image')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();

            // Role
            $table->enum('role', ['admin', 'user', 'vendor'])->default('user');

            // Status
            $table->boolean('status')->default(1);

            // Verification
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp')->nullable();

            // Security
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
