<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    /** @use HasFactory<\Database\Factories\EntradaFactory> */
    use HasFactory;
    protected $table = 'entrada';
    protected $fillable = [
        'title',
        'entrada_id',
        'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
