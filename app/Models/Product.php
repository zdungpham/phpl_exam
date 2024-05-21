<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        "productType",
        "productCode",
        "productName",
        "quantity",
        "note"
    ];
    public static $rules = [
        'productType' => 'required|alpha|size:3',
        'productCode' => 'required|alpha_num|size:6',
    ];
}
