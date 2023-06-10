<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'point';

    protected $fillable = ['azienda_id', 'nome', 'indirizzo', 'cap', 'provincia', 'regione', 'email', 'telefono'];

    public function azienda()
    {
        return $this->belongsTo(Azienda::class);
    }

    public function servizi()
    {
        return $this->belongsToMany(Servizio::class, 'rel_point_servizio');
    }

    public function listini()
    {
        return $this->hasMany(Listino::class);
    }

    public function vendite()
    {
        return $this->hasMany(Vendita::class);
    }
}
