<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Theme extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'rating',
        'description',
        'detail_url',
        'demo_url',
        'purchase_url',
        'sales',
        'details_content',
        'full_description',
        'key_benefits',
        'technical_details',
        'features',
        'design_features',
        'technical_features',
        'preview_images',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'key_benefits' => 'array',
        'technical_details' => 'array',
        'features' => 'array',
        'design_features' => 'array',
        'technical_features' => 'array',
        'preview_images' => 'array',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected function keyBenefits(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? json_decode($value, true) ?? [] : [],
            set: fn ($value) => json_encode($value),
        );
    }

    protected function technicalDetails(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? json_decode($value, true) ?? [] : [],
            set: fn ($value) => json_encode($value),
        );
    }

    protected function features(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if (!$value) return [];
                $decoded = json_decode($value, true) ?? [];
                // Handle both old format (array of strings) and new format (array with 'item' key from Repeater)
                $features = array_map(function($item) {
                    return is_array($item) && isset($item['item']) ? $item['item'] : $item;
                }, $decoded);
                // Filter out empty values
                return array_values(array_filter($features, function($feature) {
                    return !empty($feature) && is_string($feature);
                }));
            },
            set: fn ($value) => json_encode($value),
        );
    }

    protected function designFeatures(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? json_decode($value, true) ?? [] : [],
            set: fn ($value) => json_encode($value),
        );
    }

    protected function technicalFeatures(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? json_decode($value, true) ?? [] : [],
            set: fn ($value) => json_encode($value),
        );
    }

    protected function previewImages(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? json_decode($value, true) ?? [] : [],
            set: fn ($value) => json_encode($value),
        );
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
