<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $timestamps = true;

    protected $fillable = [
        'customer_id',
        'reference_number',
        'inquiry_date',
        'inquirer',
        'receptionist',
        'responder',
        'inquiry_content',
        'inquiry_details',
        'category',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
