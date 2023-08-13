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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');

            $table->string('credit_card_number');
            $table->string('card_cvv');
//            forbilling
            $table->string('first_name_billing');
            $table->string('last_name_billing');
            $table->string('address_billing');
            $table->string('address2_billing');
            $table->string('city_billing');
            $table->string('state_billing');
            $table->string('zip_code_billing');
//            for business

            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_address2');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_zip_code');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_website');
            $table->string('company_date_joined');
            $table->string('company_subscription_plan');
            $table->string('company_account_status');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
