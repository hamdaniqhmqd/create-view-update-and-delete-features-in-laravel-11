<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_select extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'data_teks',
    ];

    protected $primaryKey = 'id_select';

    public function tabelDataTeks()
    {
        return $this->belongsTo(data_text::class, 'data_teks');
    }
}
