<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            "id" => $row['id'],
            'product_name' => $row['product_name'],
            'description' => $row['description'],
            "style" => $row['style'],
            "brand" => $row['brand'],
            "url" => $row['url'],
            "product_type" => $row['product_type'],
            "shipping_price" => $row['shipping_price'],
            "note" => $row['note'],
            "admin_id" => $row['admin_id']
        ]);
    }
}
