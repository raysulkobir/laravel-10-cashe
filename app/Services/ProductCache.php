<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ProductCache
{
    public function cacheProducts($products)
    {
        // Cache the products
        Cache::put('products', $products, 20);
    }

    public function getCachedProducts()
    {
        // Retrieve cached products
        return Cache::get('products');
    }

    public function cacheForget($key = 'products'){
        return Cache::forget($key);
    }
}
