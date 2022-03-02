<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriposting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',

    ];

    public function posting()
    {
        return $this->belongsToMany(Posting::class);
    }
}
