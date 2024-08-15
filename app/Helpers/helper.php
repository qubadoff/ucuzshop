<?php

use App\Models\SiteSetting;
use \App\Models\ProductCategory;
use \Illuminate\Database\Eloquent\Collection;

if (! function_exists("siteSetting"))
{
    function siteSetting()
    {
        return SiteSetting::query()->where('id', 1)->first();
    }
}

if (! function_exists("productCategory"))
{
    function productCategory(): Collection
    {
        return ProductCategory::all();
    }
}
