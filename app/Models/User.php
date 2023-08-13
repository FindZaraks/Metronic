<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'address',
        'city',
        'phone',
        'username',
        'last_name',
        'zip_code',
        'address2',
        'state',
        'email',
        'password',
        'credit_card_number',
        'cvv',
        'first_name_billing',
        'last_name_billing',
        'address_billing',
        'address2_billing',
        'city_billing',
        'state_billing',
        'zip_code_billing',
        'company_name',
        'company_address',
        'company_address2',
        'company_city',
        'company_state',
        'company_zip_code',
        'company_phone',
        'company_email',
        'company_website',
        'company_date_joined',
        'company_subscription_plan',
        'company_account_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
