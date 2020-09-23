<?php

namespace App\Imports;

use App\Models\Category;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CategoryImport implements ToCollection, WithHeadingRow, WithValidation
{
    public function collection(Collection $rows)
    {
        $unique_row = $rows->unique('category_name');

        foreach ($unique_row as $row)
        {
            Category::create([
                'category_name' => $row['category_name'],
            ]);
        }
    }

    public function rules(): array
    {
        return [
            '*.category_name' => ['string']
        ];
    }
}
