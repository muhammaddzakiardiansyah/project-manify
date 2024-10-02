<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionItem extends Model
{
    use HasFactory;

    protected $table = 'description_items';

    // Specify the primary key type
    protected $keyType = 'string';

    // Disable auto-incrementing
    public $incrementing = false;

    protected $fillable = [
        'item_name',
        'amount',
        'status',
        'date',
        'source_of_founds',
        'author_id',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(fn($model) => empty($model->id) ? $model->id = uniqid() : '');
    }
}
