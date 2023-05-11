<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
        'user_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    }
