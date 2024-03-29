<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = [
        'nom',
        'prix',
        'image',
        'image1',
        'image2',
        'size',
        'color',
        'categorie_id',
    ];
    use HasFactory;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function tags() 
    {
        return $this->belongsToMany(Tag::class);
    }
}
