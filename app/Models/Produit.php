<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'image',
        'prix',
        'description',
        'category_id',
        'detail'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }
}
