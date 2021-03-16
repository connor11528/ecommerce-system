<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeSearch($query, string $searchTerm = null)
    {
        if (empty($searchTerm)){
            return $query;
        }

        $searchTerm = $searchTerm . '%';
        $query->where('sku', 'like', $searchTerm)
            ->orWhereHas('product', function($query) use ($searchTerm){
                $query->where('product_name', 'like', '%' . $searchTerm)
                    ->orWhere('id', '=', $searchTerm);
            });
    }

}
