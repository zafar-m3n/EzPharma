<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;
    protected $fillable = [
        'Medication_Name',
        'Stock_Count',
        'Expiry_Date',
        'Category',
        'Supplier_Details',
        'Cost_Price',
        'Selling_Price'
    ];

}
