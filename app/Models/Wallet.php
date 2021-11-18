<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['subscriber_id', 'partner_id', 'amount', 'type'];
}
