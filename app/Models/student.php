<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jenkel'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    
}