<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'Solicituds';

    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'estadoId');
    }

    public function tipoSolicitud()
    {
        return $this->belongsTo('App\Solicitud', 'tipoSolicitudId');
    }

    public function detalleSolicitud()
    {
        return $this->hasOne('App\DetalleSolicitud', 'solicitudId');
    }
}
