<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servizio extends Model
{
    protected $table = 'servizio';

    protected $fillable = ['nome', 'descrizione', 'note'];

    public function points()
    {
        return $this->belongsToMany(Point::class, 'rel_point_servizio');
    }

    public function listini()
    {
        return $this->belongsToMany(Listino::class, 'rel_servizio_listino');
    }

    public function vendite()
    {
        return $this->belongsToMany(Vendita::class, 'rel_servizio_vendita');
    }
}
