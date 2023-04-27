<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['nom','description'];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
    
}
