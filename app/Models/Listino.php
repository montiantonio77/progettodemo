<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listino extends Model
{
    protected $table = 'listino';

    protected $fillable = ['point_id', 'servizio_id', 'prezzo', 'attivo'];

    public function point()
    {
        return $this->belongsTo(Point::class);
    }

    public function servizi()
    {
        return $this->belongsToMany(Servizio::class, 'rel_servizio_listino');
    }
}
