<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Azienda extends Model
{
    protected $table = 'azienda';

    protected $fillable = ['nome', 'indirizzo', 'cap', 'provincia', 'regione', 'email', 'telefono', 'nome_amministratore'];

    public function points()
    {
        return $this->hasMany(Point::class);
    }
}
