<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_text extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
    ];

    protected $primaryKey = 'id_text';

    public function select()
    {
        return $this->hasMany(data_select::class);;
    }
}
