<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //テーブル名
    protected $table = 'products';

    //可変項目
    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'comment',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
