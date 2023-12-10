<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matriks extends Model
{
    use HasFactory;
    protected $table = 'matriks';
    protected $fillable = ['alt_id', 'kriteria_id', 'nilai'];

    public function alt(){
        return $this->belongsTo(alt::class, 'alt_id', 'id');
    }

    public function kriteria(){
        return $this->belongsTo(kriteria::class, 'kriteria_id', 'id');
    }
}
