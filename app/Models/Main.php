<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;
    protected $fillable=[
      'first_name',
        'address',
        'city',
        'phone',
        'username',
        'last_name',
        'address2',
        'state',
        'email',
        'password',
        'credit_card_number',
        'card_cvv',
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
        'company_account_status' ];
}
