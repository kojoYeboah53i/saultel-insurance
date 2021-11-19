<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['policy_id', 'description', 'medical_condition', 'total_cover_balance',
    'number_of_subscriptions', 'partner_id'];
}
