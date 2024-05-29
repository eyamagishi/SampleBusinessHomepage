<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Category model class
 * 
 * @property int $id
 * @property string $category_name
 * @extends \Illuminate\Database\Eloquent\Model
 */
class Category extends Model
{
    use HasFactory;

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

    /** ---------- relation ------------------------------------------------------------------------------------------ */
    /**
     * Get the information associated with the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function information(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Information::class);
    }
}
