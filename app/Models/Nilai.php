<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    public function kriteria()
    {
        return $this->belongsToMany(Kriteria::class, 'nilai_kriteria', 'nilai_id', 'kriteria_id')
                    ->withPivot('nilai'); // Jika ada kolom tambahan di pivot table
    }
}