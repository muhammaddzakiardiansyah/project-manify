<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllItem extends Model
{
    use HasFactory;

    protected $table = 'all_items';

    // Specify the primary key type
    protected $keyType = 'string';

    // Disable auto-incrementing
    public $incrementing = false;

    protected $fillable = [
        'item_name',
        'amount',
        'status',
        'place',
        'description',
        'author_id',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(fn($model) => empty($model->id) ? $model->id = uniqid() : '');
    }
}
