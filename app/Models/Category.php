<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Category model class.
 * 
 * @property int $id
 * @property string $category_name
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @extends \Illuminate\Database\Eloquent\Model
 */
class Category extends Model
{
    use HasFactory;

    const OTHER          = 1;
    const OTHER_NAME     = 'その他';
    const IMPORTANT      = 2;
    const IMPORTANT_NAME = '重要';
    const SERVICE        = 3;
    const SERVICE_NAME   = 'サービス';

    public const CATEGORIES = [
        [
            'id'            => self::OTHER,
            'category_name' => self::OTHER_NAME,
        ],
        [
            'id'            => self::IMPORTANT,
            'category_name' => self::IMPORTANT_NAME,
        ],
        [
            'id'            => self::SERVICE,
            'category_name' => self::SERVICE_NAME,
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | Variable Fields
    |--------------------------------------------------------------------------
    */
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 
    ];

    /*
    |--------------------------------------------------------------------------
    | Defining Relations
    |--------------------------------------------------------------------------
    */
    /**
     * Get the news associated with the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(News::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Business Logic
    |--------------------------------------------------------------------------
    */
    /**
     * Get the news associated with the category.
     *
     * @return array
     */
    public static function getCategoriesForDataRegistration(): array
    {
        $timestamp = [
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $categories = self::CATEGORIES;
        foreach ($categories as &$category) {
            $category = array_merge($category, $timestamp);
        }
        return $categories;
    }
}
