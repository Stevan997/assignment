<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $cat = Category::whereCategoryName($row['category_name'])->first();

        return new Product([
            'model_number' => $row['model_number'],
            'department_name' => $row['deparment_name'],
            'manufacturer_name' => $row['manufacturer_name'],
            'category_id' => $cat->id,
            'upc' => $row['upc'],
            'sku' => $row['sku'],
            'sale_price' => $row['sale_price'],
            'description' => $row['description'],
            'regular_price' => $row['regular_price'],
            'url' => $row['url'],
        ]);
    }

    // public function rules(): array
    // {
    //     return [
    //         '*.model_number' => ['string'],
    //         '*.deparment_name' => ['string'],
    //         '*.manufacturer_name' => ['string'],
    //         '*.category_id' => ['numeric'],
    //         '*.upc' => ['numeric'],
    //         '*.sku' => ['numeric'],
    //         '*.sale_price' => ['numeric'],
    //         '*.description' => ['string'],
    //         '*.regular_price' => ['numeric'],
    //         '*.url' => ['string'],
    //     ];
    // }
}
