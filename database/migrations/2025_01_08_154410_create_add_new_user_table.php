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
        Schema::create('add_new_user', function (Blueprint $table) {
            $table->id();
            // $table->string('profile_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_verification_token')->nullable();
            $table->boolean('is_verified')->default(false);
            // $table->string('phone');
            $table->string('password');
            // $table->string('gender');
            // $table->string('dob')->nullable();
            // $table->string('create_ac_type')->nullable();
            // $table->integer('age')->nullable();
            // $table->string('height')->nullable();
            // $table->string('weight')->nullable();
            // $table->string('fathers_name')->nullable();
            // $table->string('fathers_job')->nullable();
            // $table->string('mothers_name')->nullable();
            // $table->string('mothers_job')->nullable();
            // $table->integer('total_family')->nullable();
            // $table->integer('total_brother')->nullable();
            // $table->integer('total_sister')->nullable();
            // $table->string('country')->nullable();
            // $table->string('state')->nullable();
            // $table->string('city')->nullable();
            // $table->string('pin_code')->nullable();
            // $table->text('address')->nullable();
            // $table->string('job_type')->nullable();
            // $table->string('company_name')->nullable();
            // $table->string('salary')->nullable();
            // $table->string('experience')->nullable();
            // $table->string('degree')->nullable();
            // $table->string('college')->nullable();
            // $table->string('school')->nullable();
            // $table->string('hobbies')->nullable();
            // $table->string('whatsapp')->nullable();
            // $table->string('facebook')->nullable();
            // $table->string('instagram')->nullable();
            // $table->string('x')->nullable(); // Field for Twitter/X
            // $table->string('youtube')->nullable();
            // $table->string('linkedin')->nullable();
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_new_user');
    }
};
