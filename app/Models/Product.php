<?php

namespace App\Models;

use JeroenG\Explorer\Application\Explored;
use Lunar\Models\Product as LunarProduct;

class Product extends LunarProduct implements Explored
{

    public function mappableAs(): array
    {
        return [
            'id' => [
                'type' => 'keyword',
            ],
            'status' => [
                'type' => 'keyword',
            ],
            'product_type_id' => [
                'type' => 'keyword',
            ],
            'brand_id' => [
                'type' => 'keyword',
            ],
            'created_at' => [
                'type' => 'date',
            ],
            'updated_at' => [
                'type' => 'date',
            ],
            'name' => [
                'type' => 'text',
                'analyzer' => 'default_analyzer',
                'fields' => [
                    'sortable' => [
                        'type' => 'keyword',
                    ],
                ],
            ],
            'description' => [
                'type' => 'text',
                'analyzer' => 'default_analyzer',
            ],
            'skus' => [
                'type' => 'keyword',
            ],
        ];
    }
}
