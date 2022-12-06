<?php

namespace App\Services\Category;

use Illuminate\Database\Eloquent\Collection;

class CategoryOptionsService
{
    /**
     * Transforma uma collection de Category em um array para ser usado em um input do
     * tipo select, no formato [ 'id_da_categoria' => 'nome_da_categoria' ]
     *
     * @param Collection $categories
     *
     * @return array $options
     */
    public function makeCategoryOptions(Collection $categories) :array
    {
        $options = [];
        foreach ($categories as $category) {
            $options[$category->id] = $category->name;
        };
        return $options;
    }
}
