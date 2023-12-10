<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alt extends Model
{
    use HasFactory;
    protected $fillable = ['Kode', 'Alt'];

    public function matriks(){
        return $this->hasMany(matriks::class, 'alt_id', 'id');
    }
}
