<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateUuid;

class PaymentItem extends Model
{
    use GenerateUuid;
    protected $fillable = [
        'name',
        'amount',
        'complusory',
        'payment_category_id'
    ];

    public $incrementing = false;
    public $keyType = 'string';
    public $primaryKey = 'uuid';

    public function paymentCategory(){
        return $this->belongsTo(PaymentCategory::class);
    }

    public function userPayment() {
        return $this->hasMany(UserPayment::class);
    }
}
