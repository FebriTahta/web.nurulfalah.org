<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'jenisposting_id',
        'sumberposting_id',
        'penulisposting_id',
        'judul',
        'deskripsi',
        'thumbnail'

    ];

    public function kategoriposting()
    {
        return $this->belongsToMany(Kategoriposting::class);
    }

    public function jenisposting()
    {
        return $this->belongsTo(Jenisposting::class);
    }

    public function sumberposting()
    {
        return $this->belongsTo(Sumberposting::class);
    }

    public function penulisposting()
    {
        return $this->belongsTo(Penulisposting::class);
    }

    public function imageposting()
    {
        return $this->hasMany(Imageposting::class);
    }
}
