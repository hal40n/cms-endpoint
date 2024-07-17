<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $timestamps = true;

    protected $fillable = [
        'customer_number',
        'name',
        'kana',
        'address',
        'phone',
        'fax',
        'emergency_contact',
        'email',
        'sales_representative_name',
        'sales_representative_phone',
        'sales_representative_email',
        'billing_address',
        'contract_start_date',
        'termination_date'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
