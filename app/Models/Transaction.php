<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['subscriber_id', 'service_provider_id', 'partner_id', 'policy_id', 
    'transaction_type_id', 'transaction_amount', 'transaction_status', 'transaction_date', ];

    public function subscriber()
    {
        return $this->hasOne('App\Models\Subscriber');
    }


}
