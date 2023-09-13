<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ProductRepository
{
    public function getAllProducts()
    {
        // Fetch data from the database
        return DB::table('products')->get();
    }
}
