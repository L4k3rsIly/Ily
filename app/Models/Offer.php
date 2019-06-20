<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Offer extends Model
{
    const REMEMBER_TRUE = 'ON';
    const REMEMBER_FALSE = 'OFF';

    const CURRENCY_UAH = 'UAH';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';

    public static $typeCurrency = [
        self::CURRENCY_UAH, self::CURRENCY_USD, self::CURRENCY_EUR,
    ];

    protected  $table = 'offers';
    protected $fillable = [
        'type_object','price','type_price','type_wall','number_rooms','user_id','phone','information','status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
