<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $fillable = ['Code', 'Nama', 'Bobot', 'Jenis'];

    public function matriks(){
        return $this->hasMany(matriks::class, 'kriteria_id', 'id');
    }
}
