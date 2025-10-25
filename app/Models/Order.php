<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SextaNet\LaravelWebpay\Traits\PayWithWebpay;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    use PayWithWebpay;

    public function getBuyOrderAttribute(): string
    {
        return $this->id;
    }

    public function getAmountAttribute(): string
    {
        return $this->price;
    }

    public function getSessionIdAttribute(): string
    {
        return md5($this->id);
    }
}
