<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'tb_kriteria';
    protected $primaryKey = 'id_kriteria'; // Pastikan kolom primary key diatur dengan benar
    public $incrementing = false; // Gunakan auto-increment untuk primary key

    protected $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'atribut',
        'bobot',
    ];

    protected $casts = [
        'bobot' => 'float',
    ];

    // Definisikan relasi one-to-many ke model Nilai
    public function nilai()
    {
        return $this->belongsTo(Nilai::class, 'nilai_id', 'id');
    }

    
}
