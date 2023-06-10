<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendita extends Model
{
    protected $table = 'vendita';

    protected $fillable = ['point_id', 'servizio_id', 'data', 'costo'];

    public function point()
    {
        return $this->belongsTo(Point::class);
    }

    public function servizi()
    {
        return $this->belongsToMany(Servizio::class, 'rel_servizio_vendita');
    }
}
