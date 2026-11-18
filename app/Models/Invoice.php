<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InvoiceItem;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'invoice_ref', 
    'client_name', 
    'client_address', 
    'passengers', 
    'travel_date',
    'issued_date',
    'due_date',
    'pickup_times',
    'return_times',
    'discount_amount',
    'total_amount'
    ];

    public function items()
    {
        // This must match the table name invoice_items
        return $this->hasMany(InvoiceItem::class); 
    }
}